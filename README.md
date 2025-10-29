# Banas Marine

Static website for Banas Marine: services, about, and contact pages.

## Run locally
- Open `index.html` in your browser.

## Assets
- Images and icons are in `assests/` (note the spelling used in the project).

## Contact form (PHP)
- `contact.php` processes form submissions using `mail()` and logs entries to `contact_log.txt`.
- Update the receiving email in `contact.php` by changing `$to_email`.
- Requires PHP-enabled hosting (e.g., cPanel). It will not send mail on GitHub Pages.

## Deploying to GitHub
1. Create a GitHub repository and push this project.
2. For GitHub Pages:
   - Use the `main` branch and set Pages source to root.
   - Note: PHP (`contact.php`) will not run on GitHub Pages; host on a server with PHP if you need the form. 
