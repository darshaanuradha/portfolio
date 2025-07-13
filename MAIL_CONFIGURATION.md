# 📧 Email Configuration Guide for Portfolio Contact Form

## Gmail SMTP Configuration

### Step 1: Enable 2-Factor Authentication on Gmail
1. Go to your Google Account settings
2. Navigate to Security
3. Enable 2-Step Verification

### Step 2: Generate App Password
1. Go to Google Account settings
2. Navigate to Security → 2-Step Verification
3. Click on "App passwords"
4. Generate a new app password for "Mail"
5. Copy the 16-character password

### Step 3: Update .env File
Replace the mail configuration in your `.env` file with:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=darsha.anuardha2020@gmail.com
MAIL_PASSWORD=your_16_character_app_password_here
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=darsha.anuardha2020@gmail.com
MAIL_FROM_NAME="G.B.D Anuradha Portfolio"
```

### Step 4: Clear Configuration Cache
```bash
php artisan config:cache
```

### Step 5: Test Email Functionality
1. Visit your portfolio: `http://127.0.0.1:8000`
2. Go to Contact page
3. Fill out the form and submit
4. Check your email at `darsha.anuardha2020@gmail.com`

## Alternative Email Services

### Mailgun Configuration
```env
MAIL_MAILER=mailgun
MAILGUN_DOMAIN=your-domain.com
MAILGUN_SECRET=your-mailgun-secret
MAIL_FROM_ADDRESS=noreply@your-domain.com
MAIL_FROM_NAME="G.B.D Anuradha Portfolio"
```

### SendGrid Configuration
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=your-sendgrid-api-key
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=darsha.anuardha2020@gmail.com
MAIL_FROM_NAME="G.B.D Anuradha Portfolio"
```

## Troubleshooting

### Common Issues:
1. **"Authentication failed"**: Check your app password
2. **"Connection timeout"**: Verify SMTP settings
3. **"Mail not sending"**: Check firewall/antivirus settings

### Debug Mode:
Add this to your `.env` file for debugging:
```env
MAIL_LOG_CHANNEL=mail
```

Then check logs at: `storage/logs/laravel.log`

## Security Notes:
- Never commit your `.env` file to version control
- Use app passwords, not your main Gmail password
- Consider using environment-specific configurations for production 