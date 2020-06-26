<?php

include "AngelNakjev/Select/ASelect.php";
include "AngelNakjev/Select/HtmlSelect.php";
include "AngelNakjev/Select/BootstrapSelect.php";

use AngelNakjev\Select\HtmlSelect;
use AngelNakjev\Select\BootstrapSelect;

$browsers = [
    'None',
    'Firefox',
    'Chrome',
    'Edge',
    'Safari',
    'Opera',
    'Other'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Select Browser</title>
</head>
<body>

<h2>User Registration - Browser</h2>

<?php
if (!isset($_POST['submit'])) {
?>

<form method="post" action="registrationForm.php">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:
    

<?php

$bootstrapSelect = new BootstrapSelect();
$bootstrapSelect->setName('browserWork');
$bootstrapSelect->setValue($browsers);
$bootstrapSelect->makeSelect();

?>
</p>
<input type="submit" name="submit" value="Go"/>

</form>

<?php

} else {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $selectedBrowsers = $_POST['browserWork'];

    echo "<p>Thank you for registering <b>".$name."</b> Your created username: <b>".$username."</b> while using browser: <b>".$browser."</b></p>";
}
?>


</body>
</html>