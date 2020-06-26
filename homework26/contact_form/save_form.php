<?php 
$file = 'files/requests.txt';

if (!empty ($_POST['name']) && !empty ($_POST['email']) && !empty ($_POST['message'])) {

    $userInput = $_POST['name'] . '  |  ' . $_POST['email'] . ' | ' . $_POST['message'] . "\n" ;

    if (!file_get_contents($file)) {
        file_get_contents($file, $userInput);
    } else {
        file_put_contents($file, $userInput , FILE_APPEND);
    }

    echo "The request is saved and you will be contacted vie email";
} else {
    echo "Please fill all inputs";
}

?>