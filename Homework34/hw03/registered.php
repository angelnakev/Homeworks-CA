<?php
    if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $browser = $_POST['browsers'];


    echo "<p>Thank you for registering <b>".$name."</b> Your created username: <b>".$username."</b> while using browser: <b>".$browser."</b></p>";

    }else {
    echo "<h1>Please fill in all the fields</h1>";
    
}
?>
  