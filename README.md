# 🎨 G.B.D Anuradha Portfolio

A modern, responsive portfolio website built with Laravel 12 and Livewire 3.

## ✨ Features

- **Modern Design**: Beautiful, responsive design with glassmorphism effects
- **Admin Panel**: Easy-to-use admin interface for managing portfolio content
- **Contact Form**: Functional contact form with email notifications
- **CV Download**: PDF CV generation and download
- **Livewire**: Real-time updates without page refreshes
- **Mobile Responsive**: Works perfectly on all devices

## 🚀 Quick Start

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & NPM
- SQLite (or MySQL/PostgreSQL)

### Installation

1. **Clone the repository**
```bash
git clone <your-repo-url>
cd portfolio
```

2. **Install dependencies**
```bash
composer install
npm install
```

3. **Environment setup**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Database setup**
```bash
php artisan migrate
php artisan db:seed --class=AdminUserSeeder
```

5. **Build assets**
```bash
npm run build
```

6. **Start the server**
```bash
php artisan serve
```

Visit `http://localhost:8000` to see your portfolio!

## 🔧 Admin Access

- **URL**: `http://localhost:8000/admin/login`
- **Email**: `admin@portfolio.com`
- **Password**: `admin123`

## 📧 Email Configuration

1. Follow the `MAIL_CONFIGURATION.md` guide
2. Configure Gmail SMTP settings in your `.env` file
3. Test the contact form

## 🚀 Deployment

### Option 1: Vercel (Recommended)
```bash
npm install -g vercel
vercel login
vercel --prod
```

### Option 2: Railway
1. Connect your GitHub repo to Railway
2. Deploy automatically
3. Configure environment variables

### Option 3: Shared Hosting
1. Run the deployment script: `./deploy.sh`
2. Upload files to `public_html`
3. Configure database and environment

For detailed instructions, see `DEPLOYMENT_GUIDE.md`

## 🛠️ Development

### Available Commands
```bash
# Start development server
php artisan serve

# Watch for asset changes
npm run dev

# Build for production
npm run build

# Clear caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

## 📁 Project Structure

```
portfolio/
├── app/
│   ├── Http/Controllers/     # Controllers
│   ├── Livewire/            # Livewire components
│   │   ├── Admin/           # Admin panel components
│   │   └── Portfolio/       # Portfolio page components
│   ├── Models/              # Eloquent models
│   └── Services/            # Business logic services
├── resources/
│   └── views/
│       ├── livewire/        # Livewire views
│       └── layouts/         # Layout templates
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/            # Database seeders
└── public/                 # Public assets
```

## 🔧 Configuration

### Environment Variables
```env
APP_NAME="G.B.D Anuradha Portfolio"
APP_ENV=production
APP_DEBUG=false
APP_KEY=your_generated_key
APP_URL=https://your-domain.com

DB_CONNECTION=sqlite
DB_DATABASE=/path/to/database.sqlite

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="G.B.D Anuradha Portfolio"
```

## ✅ Status

- ✅ All issues fixed
- ✅ Application optimized
- ✅ Ready for deployment
- ✅ Admin panel functional
- ✅ Contact form working
- ✅ CV download working
- ✅ Mobile responsive
- ✅ SEO optimized

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## 📄 License

This project is open-sourced software licensed under the [MIT license](LICENSE).

## 🆘 Support

If you encounter any issues:
1. Check the `DEPLOYMENT_GUIDE.md`
2. Review the `MAIL_CONFIGURATION.md`
3. Ensure all dependencies are installed
4. Verify environment variables are set correctly

---

**Built with ❤️ using Laravel 12 & Livewire 3**
<!-- 
APP_ENV	production
APP_KEY	Paste result of php artisan key:generate --show (starts with base64:)
APP_DEBUG	false
DB_CONNECTION	sqlite
DB_DATABASE	/opt/render/project/src/database/database.sqlite -->