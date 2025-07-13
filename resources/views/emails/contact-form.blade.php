<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Message</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }
        .content {
            padding: 40px 30px;
        }
        .message-box {
            background-color: #f8fafc;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
        .contact-info {
            background-color: #f1f5f9;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .contact-info h3 {
            margin-top: 0;
            color: #1e293b;
            font-size: 18px;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            padding: 8px 0;
            border-bottom: 1px solid #e2e8f0;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: 600;
            color: #475569;
        }
        .value {
            color: #1e293b;
        }
        .footer {
            background-color: #1e293b;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 14px;
        }
        .timestamp {
            color: #64748b;
            font-size: 14px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📧 New Contact Form Message</h1>
        </div>
        
        <div class="content">
            <h2>Hello! You have received a new message from your portfolio website.</h2>
            
            <div class="contact-info">
                <h3>📋 Contact Information</h3>
                <div class="info-row">
                    <span class="label">Name:</span>
                    <span class="value">{{ $contactData['name'] }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Email:</span>
                    <span class="value">{{ $contactData['email'] }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Subject:</span>
                    <span class="value">{{ $contactData['subject'] }}</span>
                </div>
            </div>
            
            <div class="message-box">
                <h3>💬 Message</h3>
                <p>{{ $contactData['message'] }}</p>
            </div>
            
            <div class="timestamp">
                Message sent on: {{ now()->format('F j, Y \a\t g:i A') }}
            </div>
        </div>
        
        <div class="footer">
            <p>This message was sent from your portfolio contact form.</p>
            <p>You can reply directly to this email to respond to {{ $contactData['name'] }}.</p>
        </div>
    </div>
</body>
</html> 