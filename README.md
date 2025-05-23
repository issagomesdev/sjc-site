[LARAVEL__BADGE]: https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white
[JAVASCRIPT__BADGE]: https://img.shields.io/badge/Javascript-000?style=for-the-badge&logo=javascript
[HTML5__BADGE]: https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white
[CSS3__BADGE]: https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white
[PROJECT__BADGE]: https://img.shields.io/badge/📱Visit_this_project-000?style=for-the-badge&logo=project
[PROJECT__URL]: https://sjc.byissa.tech

<h1 align="center" style="font-weight: bold;">🌐 SJC Sistemas — Institutional Website </h1>

![Preview do site](https://sjc.byissa.tech/imagens/preview.png)

![Laravel][LARAVEL__BADGE] ![HTML5][HTML5__BADGE] ![JavaScript][JAVASCRIPT__BADGE] ![CSS3][CSS3__BADGE]

<p align="center">
    <a href="#about">About</a> •
    <a href="#features">Features</a> •
    <a href="#started">Getting Started</a> •
    <a href="#routes">App Routes</a>
</p>

<h2 id="about">📌 About</h2>

<p>Institutional website developed for <strong>SJC Sistemas</strong>, a company specialized in educational solutions for schools and municipalities. Built with <strong>Laravel</strong>, <strong>Blade</strong>, and <strong>JavaScript</strong>, the website showcases the company, its products, key features, and contact channels.</p>

[![project][PROJECT__BADGE]][PROJECT__URL]

<h2 id="features">✨ Features</h2>

- Responsive layout for mobile devices and desktops
- Institutional presentation of the company and its services
- Functional contact form
- Products and features page

<h2 id="started">🚀 Getting Started</h2>

<h3>Prerequisites</h3>

- PHP 8.1+
- Composer

<h3>Steps</h3>

```bash
# Clone repository
git clone https://github.com/issagomesdev/sjc-site.git

# Access the directory
cd sjc-site

# Install PHP dependencies
composer install

# Copy the environment file
cp .env.example .env

# Generate the application key
php artisan key:generate

# Start the server
php artisan serve

```

<h2 id="routes">📍 Application Routes</h2>

Here is a list of the project's routes.
​
| route               | description                                          
|----------------------|-----------------------------------------------------
| <kbd>/</kbd>     | Home page
| <kbd>/sobre-nos</kbd>     | Share information about the company, its mission, values, vision, and team.
| <kbd>/sjc-educacional</kbd>     | Present the company's school management system, highlighting its features.
| <kbd>/contato</kbd>     | Provides information for direct communication with the company, including phone, email, and location.
| <kbd>/info</kbd>     | Contact form for inquiries or interest in the company's products.





