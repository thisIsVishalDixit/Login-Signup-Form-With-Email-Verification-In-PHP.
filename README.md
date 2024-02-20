Login-form-with-email-verification
Welcome to our GitHub repository!

This repository contains a sleek login form featuring essential functionalities such as login/logout capabilities, email verification during login, and password recovery through email. With a user-friendly interface and robust security measures, this login form ensures a seamless and secure authentication experience for your application users.

Key Features:

Login/Logout: Effortlessly manage user authentication with our intuitive login/logout mechanism.
Email Verification: Enhance account security and validity by requiring email verification during the login process.
Password Recovery: Enable users to regain access to their accounts securely through email-based password recovery.
Feel free to explore, contribute, and integrate this login form into your projects to streamline user authentication while prioritizing security and user experience. Happy coding!

How To Send Mail From Localhost XAMPP Using PHP

To send mail from localhost XAMPP using Gmail, configure XAMPP after installing it. Follow the below steps for the same.

Steps to Send Mail From Localhost XAMPP Using Gmail:

Open XAMPP Installation Directory.

Go to C:\xampp\php and open the php.ini file. Find [mail function] by pressing ctrl + f. Search and pass the following values: SMTP=smtp.gmail.com smtp_port=587 sendmail_from = YourGmailId@gmail.com sendmail_path = ""C:\xampp\sendmail\sendmail.exe" -t"

Now, go to C:\xampp\sendmail and open the sendmail.ini file.

Find [sendmail] by pressing ctrl + f. Search and pass the following values smtp_server=smtp.gmail.com smtp_port=587 or 25 //use any of them error_logfile=error.log debug_logfile=debug.log auth_username=YourGmailId@gmail.com auth_password=Your-Gmail-Password force_sender=YourGmailId@gmail.com(optional)

Here is the actual code that you have to write Script To Send Mail:

Turning on 'less secure apps' settings as mailbox user Go to your (Google Account). On the left navigation panel, click Security. On the bottom of the page, in the Less secure app access panel, click Turn on access. If you don't see this setting, your administrator might have turned off less secure app account access (check the instruction above). Click the Save button.
About
No description, website, or topics provided.
Resources
 Readme
 Activity
Stars
 0 stars
Watchers
 1 watching
Forks
 0 forks
Releases
No releases published
Create a new release
Packages
No packages published
Publish your first package
Languages
PHP
80.6%
 
CSS
10.9%
 
Hack
8.5%
Suggested workflows
Based on your tech stack
Symfony logo
Symfony
Test a Symfony project.
Laravel logo
Laravel
Test a Laravel project.
SLSA Generic generator logo
SLSA Generic generator
Generate SLSA3 provenance for your existing release workflows
More workflows
Footer
