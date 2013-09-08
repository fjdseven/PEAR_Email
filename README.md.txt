Your form "action" must submit to "index.php"

In order for the form to work, you must provide the following:

emailText => the text content for your email
emailFrom => the email address that will appear as the 'From address'
emailTo => the email address(es) that the email will be sent to (NOTE: you may provide multiple email addresses by comma separating each email address)

Additionally, you have two optional fields:

emailHTML => an HTML version of the email text
emailSubject => the subject line of the email

So the 'emailText', 'emailFrom', etc keys MUST be the names of the input fields in your form in order for this work. Also, your form action MUST be "post"; the script doesn't process "get" requests.

An example form that could submit to the php script would look like this:
<form method="POST" action="index.php">

<input type="text" name="emailFrom" />
<input type="text" name="emailTo" />
<input type="text" name="emailSubject" />
<input type="text" name="emailText" />
<textarea name="emailHTML"></textarea> <!-- since HTML is allowed here, we want a text area so it's easier to see the markup -->

<input type="submit" value="Submit" />

</form>

A working example of this using AJAX is provided, see form_test.html