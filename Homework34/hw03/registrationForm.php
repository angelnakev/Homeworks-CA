<?php 
//Create array of browsers
// import Select class
 $browsers = ['Chrome', 'Firefox', 'Edge', 'Opera', 'Safari', 'Other'];
 include 'Select.php';
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Class Select - Browsers</title>
 </head>
 <body>
 <h2>User Registration - Browser</h2>

 
<?php
//If form not submitted, display form.
 ?>
 
<form method="post" action="registered.php">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:
 
 
<?php
//Instantiate object.
 
//Set properties.
 
//The object has the data it needs from the preceding commands.
//Tell it to make the select field.
 $browser = new Select();
 $browser->setName("browsers");
 $browser->setValue($browsers);
 $browser->makeSelect();
?>
</p>
<input type="submit" name="submit" value="Go" />
 
</form>

 
<?php
  //If form submitted, process input.
 
    //Could include code to send data to database here.
    //Retrieve user responses.
 
    //The following variable has an altered name to avoid confusion.
 
    //Confirm responses to user.

?>
 </body>
 </html>
 