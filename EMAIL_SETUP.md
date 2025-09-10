# Email Notification Setup

This application uses PHPMailer to send email notifications, which is ideal for shared hosting environments. Here's how to set it up:

## Configuration Steps

1. Open your `.env` file and add the following configuration variables:

```
# PHPMailer Configuration
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=your-username@example.com
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=hello@example.com
MAIL_FROM_NAME="Your Application Name"

# PHPMailer Debug (0-4, 0 = no output, 4 = detailed)
MAIL_DEBUG=0
```

2. Replace the example values with your actual SMTP server details:
   - `MAIL_HOST`: Your SMTP server address (e.g., `smtp.gmail.com`, `smtp.hostgator.com`)
   - `MAIL_PORT`: The SMTP port (commonly `587` for TLS, `465` for SSL)
   - `MAIL_USERNAME`: Your full email address
   - `MAIL_PASSWORD`: Your email account password or app password
   - `MAIL_ENCRYPTION`: Use `tls` or `ssl` depending on your server requirements
   - `MAIL_FROM_ADDRESS`: The email address to send from (usually the same as `MAIL_USERNAME`)
   - `MAIL_FROM_NAME`: The name that should appear as the sender

## Shared Hosting Tips

For shared hosting environments:

1. Ensure your hosting provider allows SMTP connections.
2. Some providers may block outgoing SMTP connections to external servers. In this case, use your hosting provider's mail server.
3. If you're unsure about the settings, contact your hosting provider's support.

## Testing Email

To test if your email configuration is working:

1. Create a new user through the admin panel.
2. The system will attempt to send a welcome email.
3. Check the user's email to see if they received the welcome message.
4. If the email fails to send, check your application logs for error messages.

## Debugging

If emails aren't sending properly:

1. Set `MAIL_DEBUG=2` in your `.env` file to get detailed error information.
2. Check your application logs for any error messages.
3. Verify that your SMTP credentials are correct.
4. Make sure your hosting provider allows outgoing SMTP connections to your specified mail server.

## Email Templates

The email template for new user notifications is located at:
`resources/views/emails/new-user.blade.php`

You can modify this template to customize the content and styling of the welcome emails. 