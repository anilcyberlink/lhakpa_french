<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reset Your Password</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                color: #333;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                margin: 20px auto;
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 5px;
            }
            .header {
                background-color: #8b767e;
                color: white;
                padding: 20px;
                text-align: center;
                border-radius: 5px 5px 0 0;
            }
            .logo {
                max-width: 150px;
                height: auto;
                margin-bottom: 15px;
            }
            .content {
                padding: 20px;
            }
            .button {
                display: inline-block;
                padding: 12px 24px;
                background-color: #8b767e;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                margin: 10px 0;
            }
            .button:hover {
                background-color: #0056b3;
            }
            .footer {
                text-align: center;
                font-size: 12px;
                color: #666;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img src="<?php echo e(asset('theme-assets/img/logo.png')); ?>" alt="<?php echo e($siteData->site_name ?? env('APP_NAME', 'Your Application')); ?> Logo" class="logo">
                <h1>Password Reset Request</h1>
            </div>
            
            <div class="content">
                <p>Hello,</p>
                
                <p>We received a request to reset your password for your <?php echo e($siteData->site_name ?? env('APP_NAME', 'Your Application')); ?> account. Click the button below to set a new password:</p>
                
                <a href="<?php echo e(route('reset.password.form', ['token' => $data->token, 'email' => $data->email])); ?>" class="button">Reset Password</a>
                
                <p>This link will expire in 5 minutes for security reasons. If the button doesn't work, you can copy and paste this URL into your browser:</p>
                
                <p>
                    <a href="<?php echo e(route('reset.password.form', ['token' => $data->token, 'email' => $data->email])); ?>"><?php echo e(route('reset.password.form', ['token' => $data->token, 'email' => $data->email])); ?></a>
                </p>
                
                <p>If you didn't request a password reset, please ignore this email or contact our support team.</p>
                
                <p>Thanks,<br>
                The <?php echo e($siteData->site_name ?? env('APP_NAME', 'Your Application')); ?> Team</p>
            </div>
            
            <div class="footer">
                <p>© <?php echo e(date('Y')); ?> <?php echo e($siteData->site_name ?? env('APP_NAME', 'Your Application')); ?>. All rights reserved.</p>
            </div>
        </div>
    </body>
</html><?php /**PATH /home/lhakpa/public_html/resources/views/emails/reset-password.blade.php ENDPATH**/ ?>