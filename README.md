# ElixApps WordPress Theme

A modern, high-tech WordPress theme designed specifically for software studios and developers building **Monday.com Marketplace Apps** and **WordPress Plugins**.

---

## 🚀 Key Features

- **Modern SaaS / Tech Developer Aesthetic**: Dark slate background (`#07090E`), glowing indigo/cyan gradients, glassmorphism cards, and crisp typography (`Plus Jakarta Sans` + `JetBrains Mono`).
- **Interactive Hero & Live Mockup**: Showcases a simulated real-time Monday board & WordPress API sync console right on the front page.
- **Product & App Showcase with Live Filter**: Filter seamlessly between **All Products**, **Monday.com Apps**, and **WordPress Plugins**.
- **Page Templates Included**:
  1. **Home Page (`front-page.php`)**: Hero, live board mockup, app catalog, bento engineering features, and CTA.
  2. **Services Page (`page-services.php`)**: Full-cycle Monday app engineering, WordPress plugin development, bi-directional sync engines, our 4-step workflow, and FAQ accordion.
  3. **Team Page (`page-team.php`)**: High-tech developer cards with roles, tech stack tags (React, GraphQL, PHP 8, Node.js), engineering values, and social links.
  4. **Contact Us Page (`page-contact.php`)**: Interactive AJAX contact inquiry form with budget selectors, category filters, and response guarantees.
- **AJAX Contact Form Engine**: Built-in WordPress AJAX handler with nonce security and instant feedback (no bulky form plugins required).
- **Responsive Mobile Navigation**: Fast drawer toggle for mobile devices.
- **Performance Focused**: Pure vanilla JavaScript and modular CSS for fast page speeds.

---

## 🛠️ How to Activate & Configure in WordPress

1. Log in to your WordPress Admin dashboard (`/wp-admin`).
2. Navigate to **Appearance** &rarr; **Themes**.
3. Locate **ElixApps** and click **Activate**.

### Creating the Core Pages:
1. Navigate to **Pages** &rarr; **Add New**:
   - **Services**: Set title to `Services` and select Template **Services Page** in the Page Attributes sidebar. Slug: `services`.
   - **Team**: Set title to `Team` and select Template **Team Page** in the Page Attributes sidebar. Slug: `team`.
   - **Contact Us**: Set title to `Contact Us` and select Template **Contact Page** in the Page Attributes sidebar. Slug: `contact`.
2. To set the front page:
   - Go to **Settings** &rarr; **Reading**.
   - Under **Your homepage displays**, select **A static page**.
   - Choose your Home page for Homepage. (The theme will automatically render `front-page.php`).
3. To customize the navigation menu:
   - Go to **Appearance** &rarr; **Menus** and assign your menu to the **Primary Navigation Menu** location.
