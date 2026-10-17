/**
 * ElixApps Theme Main Script
 * Handles Navigation, Product Filter Tabs, FAQ Accordion, and AJAX Contact Form
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. Sticky Header Blur Effect on Scroll
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 30) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // 2. Mobile Menu Drawer Toggle
    const navToggle = document.querySelector('.nav-toggle');
    const mobileDrawer = document.querySelector('.mobile-nav-drawer');

    if (navToggle && mobileDrawer) {
        navToggle.addEventListener('click', function () {
            mobileDrawer.classList.toggle('open');
            const isOpen = mobileDrawer.classList.contains('open');
            navToggle.setAttribute('aria-expanded', isOpen);
            navToggle.innerHTML = isOpen
                ? '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>'
                : '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 6h18M3 18h18"/></svg>';
        });

        // Close drawer when clicking any link inside it
        const drawerLinks = mobileDrawer.querySelectorAll('a');
        drawerLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileDrawer.classList.remove('open');
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.innerHTML = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 6h18M3 18h18"/></svg>';
            });
        });
    }

    // 3. Product Filter Tabs (Monday.com Apps vs WP Plugins)
    const filterButtons = document.querySelectorAll('.tab-btn');
    const productCards = document.querySelectorAll('.product-card');

    if (filterButtons.length > 0 && productCards.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                filterButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                productCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    if (filterValue === 'all' || cardCategory === filterValue) {
                        card.style.display = 'flex';
                        card.style.opacity = '0';
                        setTimeout(() => {
                            card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                            card.style.opacity = '1';
                        }, 50);
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // 4. Interactive FAQ Accordion
    const faqTriggers = document.querySelectorAll('.faq-trigger');
    faqTriggers.forEach(trigger => {
        trigger.addEventListener('click', function () {
            const parentItem = this.closest('.faq-item');
            const isActive = parentItem.classList.contains('active');

            // Close other items if desired
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== parentItem) {
                    item.classList.remove('active');
                }
            });

            if (isActive) {
                parentItem.classList.remove('active');
            } else {
                parentItem.classList.add('active');
            }
        });
    });

    // 5. AJAX Contact Form Handler
    const contactForm = document.getElementById('elixapps-contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const alertBox = document.getElementById('contact-form-alert');
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            const formData = new FormData(contactForm);
            formData.append('action', 'elixapps_contact');
            if (typeof elixappsData !== 'undefined') {
                formData.append('security', elixappsData.nonce);
            }

            // Disable button & show spinner
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="spin-icon">
                    <circle cx="12" cy="12" r="10" stroke-opacity="0.25"/>
                    <path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"/>
                </svg>
                <span>Sending message...</span>
            `;

            if (alertBox) {
                alertBox.className = 'form-alert';
                alertBox.textContent = '';
                alertBox.style.display = 'none';
            }

            const ajaxEndpoint = (typeof elixappsData !== 'undefined' && elixappsData.ajaxUrl)
                ? elixappsData.ajaxUrl
                : '/wp-admin/admin-ajax.php';

            fetch(ajaxEndpoint, {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;

                if (alertBox) {
                    alertBox.style.display = 'block';
                    if (data.success) {
                        alertBox.className = 'form-alert success';
                        alertBox.innerHTML = `<strong>Success!</strong> ${data.data.message || 'Your inquiry was sent successfully.'}`;
                        contactForm.reset();
                    } else {
                        alertBox.className = 'form-alert error';
                        alertBox.innerHTML = `<strong>Error:</strong> ${data.data.message || 'Could not send message. Please try again.'}`;
                    }
                }
            })
            .catch(err => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;

                if (alertBox) {
                    alertBox.style.display = 'block';
                    alertBox.className = 'form-alert error';
                    alertBox.innerHTML = '<strong>Error:</strong> An unexpected network error occurred. Please try again later.';
                }
            });
        });
    }

    // 6. Reading Progress Bar & Table of Contents Spy
    const progressBar = document.querySelector('.reading-progress-bar');
    const contentArea = document.querySelector('.entry-content');
    const tocList = document.querySelector('.doc-toc-list');

    // Generate TOC if list container exists and headings are in entry-content
    if (tocList && contentArea) {
        const headings = contentArea.querySelectorAll('h2');
        if (headings.length > 0) {
            tocList.innerHTML = '';
            headings.forEach((heading, idx) => {
                if (!heading.id) {
                    heading.id = 'section-' + (idx + 1) + '-' + heading.textContent.trim().toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
                }
                const li = document.createElement('li');
                const a = document.createElement('a');
                a.href = '#' + heading.id;
                a.className = 'doc-toc-link';
                a.textContent = heading.textContent.trim();
                if (idx === 0) a.classList.add('active');

                a.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetEl = document.getElementById(heading.id);
                    if (targetEl) {
                        const headerOffset = 90;
                        const elementPosition = targetEl.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });

                li.appendChild(a);
                tocList.appendChild(li);
            });
        } else {
            // Hide widget if no h2 headings
            const tocWidget = tocList.closest('.doc-widget');
            if (tocWidget) tocWidget.style.display = 'none';
        }
    }

    // Scroll Handler for Reading Progress & TOC Active State
    if (progressBar || tocList) {
        window.addEventListener('scroll', function () {
            // Update Reading Progress Bar
            if (progressBar && contentArea) {
                const totalHeight = contentArea.offsetHeight;
                const contentTop = contentArea.getBoundingClientRect().top + window.pageYOffset;
                const windowScroll = window.pageYOffset;
                const windowHeight = window.innerHeight;

                if (windowScroll < contentTop) {
                    progressBar.style.width = '0%';
                } else if (windowScroll > contentTop + totalHeight - windowHeight) {
                    progressBar.style.width = '100%';
                } else {
                    const progress = ((windowScroll - contentTop) / (totalHeight - windowHeight)) * 100;
                    progressBar.style.width = Math.min(100, Math.max(0, progress)) + '%';
                }
            }

            // Update TOC Active Link on Scroll
            if (tocList && contentArea) {
                const headings = contentArea.querySelectorAll('h2');
                const tocLinks = tocList.querySelectorAll('.doc-toc-link');
                let currentActiveId = '';

                headings.forEach(heading => {
                    const rect = heading.getBoundingClientRect();
                    if (rect.top <= 140) {
                        currentActiveId = heading.id;
                    }
                });

                if (currentActiveId) {
                    tocLinks.forEach(link => {
                        if (link.getAttribute('href') === '#' + currentActiveId) {
                            link.classList.add('active');
                        } else {
                            link.classList.remove('active');
                        }
                    });
                }
            }
        });
    }

    // 7. Print Document Handler
    const printBtns = document.querySelectorAll('.btn-print-doc');
    printBtns.forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            window.print();
        });
    });

    // 8. Fade-in-up scroll animations via IntersectionObserver
    const fadeTargets = document.querySelectorAll(
        '.product-card, .bento-card, .team-card, .workflow-card, .value-card, ' +
        '.service-card-large, .contact-info-item, .faq-item, .stat-item'
    );

    if (fadeTargets.length > 0 && 'IntersectionObserver' in window) {
        fadeTargets.forEach(el => el.classList.add('fade-in-up'));

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    // Stagger delay for grid siblings
                    const siblings = Array.from(entry.target.parentElement?.children || []);
                    const idx = siblings.indexOf(entry.target);
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, Math.min(idx * 80, 400));
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

        fadeTargets.forEach(el => observer.observe(el));
    }

    // 9. Dynamic spinner style
    const styleEl = document.createElement('style');
    styleEl.innerHTML = `
        .spin-icon {
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            100% { transform: rotate(360deg); }
        }
    `;
    document.head.appendChild(styleEl);
});
