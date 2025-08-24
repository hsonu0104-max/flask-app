# Flask Phishing App

This application is designed to demonstrate phishing techniques for educational purposes only.

## Deployment Options

### 1. Vercel (Recommended)
1. Fork this repository
2. Connect your GitHub account to Vercel
3. Import this repository
4. Deploy automatically

### 2. Heroku
1. Install Heroku CLI
2. Run: `heroku create your-app-name`
3. Run: `git push heroku main`

### 3. Netlify
1. Connect your GitHub repository to Netlify
2. Set build command to empty
3. Set publish directory to root

### 4. Render
1. Connect your GitHub repository to Render
2. Select Web Service type
3. Set build command: `pip install -r requirements.txt`
4. Set start command: `gunicorn app:app`

### 5. Railway
1. Connect your GitHub repository to Railway
2. It will automatically detect the Python app and deploy

### 6. Traditional PHP Hosting
1. Upload just the `index.php` file to any PHP-supported web host
2. No additional configuration needed

## Important Notes
- This code is for educational purposes only
- Unauthorized phishing attacks are illegal
- Always obtain proper authorization before testing security systems
- The Telegram bot token and chat ID should be kept secure