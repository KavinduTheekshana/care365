<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px;
        }
        .field {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }
        .field:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #667eea;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }
        .value {
            color: #333;
            font-size: 16px;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📧 New Contact Form Submission</h1>
        </div>
        
        <div class="content">
            <div class="field">
                <div class="label">Name</div>
                <div class="value">{{ $data['name'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">Email Address</div>
                <div class="value">{{ $data['email'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">Phone Number</div>
                <div class="value">{{ $data['number'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">Service Interested In</div>
                <div class="value">{{ $data['subject'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">Message</div>
                <div class="value">{{ $data['message'] }}</div>
            </div>
        </div>
        
        <div class="footer">
            <p>This email was sent from Care 365 contact form</p>
            <p>Received on {{ date('F j, Y \a\t g:i A') }}</p>
        </div>
    </div>
</body>
</html>