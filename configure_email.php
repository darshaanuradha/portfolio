<?php

/**
 * Email Configuration Helper Script
 * Run this script to help configure your email settings
 */

echo "📧 Portfolio Email Configuration Helper\n";
echo "=====================================\n\n";

echo "Current mail configuration:\n";
echo "MAIL_MAILER: " . env('MAIL_MAILER', 'not set') . "\n";
echo "MAIL_HOST: " . env('MAIL_HOST', 'not set') . "\n";
echo "MAIL_PORT: " . env('MAIL_PORT', 'not set') . "\n";
echo "MAIL_USERNAME: " . env('MAIL_USERNAME', 'not set') . "\n";
echo "MAIL_FROM_ADDRESS: " . env('MAIL_FROM_ADDRESS', 'not set') . "\n\n";

echo "To configure Gmail SMTP:\n";
echo "1. Enable 2-Factor Authentication on your Gmail account\n";
echo "2. Generate an App Password (16 characters)\n";
echo "3. Update your .env file with:\n\n";

echo "MAIL_MAILER=smtp\n";
echo "MAIL_HOST=smtp.gmail.com\n";
echo "MAIL_PORT=587\n";
echo "MAIL_USERNAME=darsha.anuardha2020@gmail.com\n";
echo "MAIL_PASSWORD=your_16_character_app_password\n";
echo "MAIL_ENCRYPTION=tls\n";
echo "MAIL_FROM_ADDRESS=darsha.anuardha2020@gmail.com\n";
echo "MAIL_FROM_NAME=\"G.B.D Anuradha Portfolio\"\n\n";

echo "4. Run: php artisan config:cache\n";
echo "5. Test by visiting: http://127.0.0.1:8000/contact\n\n";

echo "For detailed instructions, see: MAIL_CONFIGURATION.md\n"; 