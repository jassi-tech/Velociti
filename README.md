# Velociti | Premium Cycle Shop

A modern, responsive landing page for a premium cycle shop built with PHP, HTML5, CSS3, and a touch of JavaScript. It features dynamic product rendering, a functional contact form simulation, and a sleek dark-themed design with neon accents.

## Features
- **Dynamic Content**: Bike models are rendered dynamically using PHP arrays.
- **Contact Form**: Basic PHP form processing that simulates receiving a message and displaying a success notification.
- **Responsive Design**: Adapts beautifully to desktop, tablet, and mobile screens.
- **Modern UI**: Dark theme, glassmorphism effects, and CSS variables for easy theme customization.

## Prerequisites
To run this project locally, you need a local web server environment that supports PHP. Some popular options include:
- [XAMPP](https://www.apachefriends.org/index.html) (Windows, Mac, Linux)
- [MAMP](https://www.mamp.info/) (Mac, Windows)
- [WampServer](https://www.wampserver.com/en/) (Windows)
- PHP Built-in Web Server (Any OS with PHP installed)

## Setup and Running

### Option 1: Using PHP's Built-in Web Server (Recommended if PHP is installed)
1. Open your terminal or command prompt.
2. Navigate to the project directory:
   ```bash
   cd path/to/cycle_shop
   ```
3. Start the PHP built-in server:
   ```bash
   php -S localhost:8000
   ```
4. Open your web browser and go to `http://localhost:8000`.

### Option 2: Using XAMPP / WAMP / MAMP
1. Start your local server application and ensure the **Apache** (or equivalent web server) module is running.
2. Copy the entire project folder.
3. Paste it into your server's root directory:
   - For XAMPP: `C:\xampp\htdocs\` or `/opt/lampp/htdocs/`
   - For WAMP: `C:\wamp\www\`
   - For MAMP: `/Applications/MAMP/htdocs/`
4. Open your web browser and navigate to `http://localhost/cycle_shop/` (adjust the URL depending on your setup).

## Project Structure
- `index.php` / `product.php`: The main entry pages that assemble the layout and content.
- `includes/`: Directory containing PHP partials, components, and logic:
  - `data.php`: Contains the dynamic `$featured_bikes` array.
  - `form_handler.php`: Processes the contact form submissions.
  - `header.php` / `footer.php`: Reusable layout templates.
  - `sections/`: Contains individual page sections (Hero, About, Featured, Contact).
  - `components/`: Contains reusable UI pieces like the `bike_card.php`.
- `assets/`: Directory for static assets:
  - `css/style.css`: All styling rules, layout, animations, and CSS variables.
  - `js/main.js`: Client-side JavaScript (e.g., sticky navbar effect, loader).

## Customization
- **Theme Colors**: Open `assets/css/style.css` and modify the variables under `:root` (e.g., `--bg-color`, `--accent-color`).
- **Bike Data**: Open `includes/data.php` and edit the `$featured_bikes` array to add, remove, or change the bicycles displayed.
# Velociti
