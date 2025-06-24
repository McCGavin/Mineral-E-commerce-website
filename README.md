# Mineral Co. Prototype

This is a prototype web application for an online mineral store. It allows users to browse a collection of minerals, add them to a shopping cart, and proceed to checkout. The app includes user authentication and dynamically loads mineral data from a JSON file.

## 🌐 Live Demo
🔗 [https://bigrockhard.org/](https://bigrockhard.org/)

---

## 📁 Project Structure

- `index.php` / `index.html` – Landing pages
- `about.php` – Info about the site/store
- `contact.php` – Contact form for users
- `create.php` – User registration page
- `login.php` / `do_login.php` – User authentication
- `logout.php` – Logout handler
- `item.php` – View details for individual minerals
- `addtocart.php` – Add items to shopping cart
- `cart.php` – View/update cart contents
- `checkout.php` – Finalize and submit orders
- `minerals.json` – JSON database of available minerals
- `styles.css` – Styling for the entire site
- `assets/images/` – Contains images for each mineral (e.g., `chlorite.png`, `tourmaline.png`, etc.)

---

## 🔧 Features

- 🔍 Browse minerals with images and descriptions
- 🛒 Add to cart and review before checkout
- ✅ Simple user login/logout system
- 📄 Dynamic data loading from `minerals.json`
- 🥽 **VR-compatible 3D rock viewing experience**
- 📬 Contact page for user feedback or support
---

## 🧪 How to Run  
*(Using the [Live Demo 🌐](https://bigrockhard.org/) is recommended for easiest access)*

1. Clone the repository:
   `git clone https://github.com/your-username/minerals-store-prototype.git && cd minerals-store-prototype`

2. Make sure you have PHP 7.0+ installed:
   `php -v`

3. Start a local PHP server:
   `php -S localhost:8000`

4. Open your browser and go to `http://localhost:8000`

5. You can now browse the site, view minerals, and test the cart system. 🛒 To explore the **VR-compatible 3D views of rocks**, click “View” on a mineral to open its interactive model.

## 📌 Notes
- Ensure your PHP server allows session usage (`session_start()` is used for cart and login functionality).
- This project is a front-end/back-end prototype; there is no database — user data and cart info are stored in session variables.
- The JSON file is used instead of a traditional SQL database for simplicity.
- 🥽 **The site supports VR-compatible 3D viewing of rocks** using embedded Sketchfab models.
