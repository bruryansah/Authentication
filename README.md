<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Laravel Full Auth System with Social Login (Google + GitHub)

[![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=flat&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=flat&logo=php)](https://php.net)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-Database-316192?style=flat&logo=postgresql)](https://postgresql.org)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind-CSS-06B6D4?style=flat&logo=tailwind-css)](https://tailwindcss.com)

![image alt](https://github.com/bruryansah/Full-Authentication/blob/419bcbc39189b36052bce8e0fa28b2af100357e6/hehe.png)


Project ini adalah sistem autentikasi lengkap menggunakan **Laravel 12** yang mendukung:
- ✅ Register, Login, Logout, Forgot Password, Reset Password
- ✅ Email Verification
- ✅ Social Login dengan Google dan GitHub (OAuth)
- ✅ Dashboard user setelah login
- ✅ Responsive UI dengan Tailwind CSS

---

## 📦 Tech Stack

| Technology | Version | Purpose |
|-----------|---------|---------|
| **Laravel** | 12.x | Backend Framework |
| **PHP** | 8.2+ | Programming Language |
| **PostgreSQL** | Latest | Database |
| **Blade** | - | Template Engine |
| **Tailwind CSS** | 3.x | Styling |
| **Laravel Socialite** | Latest | OAuth Integration |

---

## 🛠 Features

### 🔐 Authentication
- ✨ **Register** dengan email & password
- 🔑 **Login & Logout** dengan session management
- 🔄 **Forgot Password** & Reset Password via email
- ✉️ **Email Verification** untuk keamanan akun
- 🔒 **Password Hashing** dengan bcrypt
- 🛡️ **Throttle Login** untuk mencegah brute force
- 👤 **Remember Me** functionality

### 🌐 Social Login
- 🔴 **Login dengan Google** OAuth 2.0
- ⚫ **Login dengan GitHub** OAuth 2.0
- 🆕 **Auto-create user** jika belum terdaftar
- 🔗 **Link existing user** dengan social provider
- 👥 **Multiple provider** support per user

### 🖥 Dashboard
- 📊 Lihat profile & data user
- 🔗 Lihat social provider yang terhubung
- ⚙️ Update profile information
- 🔐 Change password
- 🗑️ Delete account

---

## ⚡ Installation

### Prerequisites
Pastikan system Anda sudah terinstall:
- PHP >= 8.2
- Composer
- PostgreSQL
- Node.js & NPM

### 1️⃣ Clone Repository
```bash
git clone https://github.com/username/Full-Authentication.git
cd Full-Authentication
```

### 2️⃣ Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install NPM dependencies
npm install
```

### 3️⃣ Environment Setup
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4️⃣ Database Configuration
Edit file `.env` dan sesuaikan dengan database PostgreSQL Anda:
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=full_auth
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5️⃣ Mail Configuration
Konfigurasi email untuk fitur reset password dan verifikasi:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

### 6️⃣ Social Login Setup

#### Google OAuth
1. Buka [Google Cloud Console](https://console.cloud.google.com)
2. Buat project baru
3. Enable Google+ API
4. Buat OAuth 2.0 credentials
5. Tambahkan Authorized redirect URIs: `http://localhost:8000/auth/google/callback`
6. Copy Client ID dan Client Secret ke `.env`:

```env
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback
```

#### GitHub OAuth
1. Buka [GitHub Developer Settings](https://github.com/settings/developers)
2. Klik "New OAuth App"
3. Isi form:
   - **Application name:** Full Auth System
   - **Homepage URL:** `http://localhost:8000`
   - **Authorization callback URL:** `http://localhost:8000/auth/github/callback`
4. Copy Client ID dan Client Secret ke `.env`:

```env
GITHUB_CLIENT_ID=your_github_client_id
GITHUB_CLIENT_SECRET=your_github_client_secret
GITHUB_REDIRECT_URI=http://localhost:8000/auth/github/callback
```

### 7️⃣ Run Migrations
```bash
php artisan migrate
```

### 8️⃣ Build Assets
```bash
npm run build
# atau untuk development
npm run dev
```

### 9️⃣ Run Application
```bash
php artisan serve
```

Aplikasi akan berjalan di: **http://localhost:8000**

---

## 📁 Project Structure

```
Full-Authentication/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Auth/
│   │       └── SocialAuthController.php
│   └── Models/
│       ├── User.php
│       └── SocialProvider.php
├── database/
│   └── migrations/
├── resources/
│   └── views/
│       ├── auth/
│       │   ├── login.blade.php
│       │   ├── register.blade.php
│       │   └── forgot-password.blade.php
│       └── dashboard.blade.php
├── routes/
│   ├── web.php
│   └── auth.php
└── .env.example
```

---

## 🔧 Configuration

### Social Provider Table
Tabel `social_providers` menyimpan data OAuth:
```sql
- user_id (foreign key)
- provider (google/github)
- provider_id (unique ID dari provider)
- avatar (optional)
- created_at, updated_at
```

### Routes
```php
// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    // ...
});

// Social Authentication
Route::get('/auth/{provider}/redirect', [SocialAuthController::class, 'redirect'])
    ->name('social.redirect');
Route::get('/auth/{provider}/callback', [SocialAuthController::class, 'callback'])
    ->name('social.callback');

// Protected Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
```

---

## 🚀 Usage

### Register New User
1. Kunjungi `/register`
2. Isi form dengan email & password
3. Verifikasi email yang dikirim
4. Login dengan kredensial yang telah dibuat

### Login with Email
1. Kunjungi `/login`
2. Masukkan email & password
3. Klik "Log in"

### Login with Google/GitHub
1. Kunjungi `/login`
2. Klik tombol "Login with Google" atau "Login with GitHub"
3. Authorize aplikasi
4. Redirect otomatis ke dashboard

### Forgot Password
1. Klik "Forgot your password?"
2. Masukkan email terdaftar
3. Cek email untuk link reset password
4. Buat password baru

---

## 🎨 Screenshots

### Googl Login
![image alt](https://github.com/bruryansah/Full-Authentication/blob/419bcbc39189b36052bce8e0fa28b2af100357e6/googlelogin.png)

### Github Login
![image alt](https://github.com/bruryansah/Full-Authentication/blob/419bcbc39189b36052bce8e0fa28b2af100357e6/githublogin.png)

### Database
![image alt](https://github.com/bruryansah/Full-Authentication/blob/419bcbc39189b36052bce8e0fa28b2af100357e6/database.png)
---

## 🐛 Troubleshooting

### Email tidak terkirim
- Pastikan konfigurasi SMTP di `.env` sudah benar
- Gunakan App Password jika menggunakan Gmail
- Cek log di `storage/logs/laravel.log`

### Social Login Error
- Pastikan Client ID & Secret sudah benar
- Cek Redirect URI sudah match dengan yang di provider
- Clear cache: `php artisan config:clear`

### Database Connection Error
- Pastikan PostgreSQL service running
- Cek kredensial database di `.env`
- Test koneksi: `php artisan migrate:status`

---

## 📚 Documentation

- [Laravel Documentation](https://laravel.com/docs/12.x)
- [Laravel Socialite](https://laravel.com/docs/12.x/socialite)
- [Tailwind CSS](https://tailwindcss.com/docs)

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 👤 Author

**Your Name**
- GitHub: [@username](https://github.com/username)
- Email: your.email@example.com

---

## ⭐ Support

Jika project ini membantu Anda, berikan ⭐ di repository ini!

---

## 📮 Contact

Ada pertanyaan? Silakan buat [issue](https://github.com/username/Full-Authentication/issues) atau hubungi saya melalui email.

---
## Catatan

Readme ini 70% di buat oleh ai, bukan karena saya malas, padahal iya. 
Jadi jangan lupa cek cek lagi


**Happy Coding! 🚀**
>>>>>>> daa49f51b7702f0f496454110f42040d67192e8b
