PEAR_Email
==========

PHP Email API written with PEAR 

Your form "action" must submit to "index.php"

In order for the form to work, you must provide the following:

emailText => the text content for your email
emailFrom => the email address that will appear as the 'From address'
emailTo => the email address(es) that the email will be sent to (NOTE: you may provide multiple email addresses by comma separating each email address)

Additionally, you have two optional fields:

emailHTML => an HTML version of the email text
emailSubject => the subject line of the email

So the 'emailText', 'emailFrom', etc keys MUST be the names of the input fields in your form in order for this work. Also, your form action MUST be "post"; the script doesn't process "get" requests.

A working example of this using AJAX is provided, see form_test.html

Also, have a look at this JSFiddle: http://jsfiddle.net/XrehC/1/
