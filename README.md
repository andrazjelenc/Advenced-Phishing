# Advenced-Phishing
Proof of concept about using AJAX for advenced phishing.


index.html is out "fake login page".
Add "onsubmit" event on login form and evil function to execute AJAX POST to middle.php
Middle.php is our middle station: we save passwords, send passwords etc...
Then navigate to legit login.php page

#Classic phishing
We change POST destitination file to our malicious file, that save the password
and then navigate back to legit page. So the victim must enter the username and password once again.
This is very suspectious and the victim goes and change their password.

#Advenced phishing
We add post to our .php file befor posting to original server. This requires to enter the password only one time.

#Security
Some sites check headers and block this kind of log in. Facebook for example shows "security alert" telling that typing facebook password on other sites is not safe. But most of users will think they just mistype the password.


Some other pages don't use header checking and will accept out log in with no alert at all. In combination with DNS spoofing this could be used to bypass HTTPS with HSTS on Wireless Access Point where we can control DNS without ARP poisoning (poisoning is detected by some AVs).
