<?php
    $displayForm = true;
    $heading = "";

    function createCheckBox($myArr) {
        foreach($myArr as $value) {
            echo '<input type="checkbox" name="checkedWaether['.$value.']" value="'.$value.'">'.strtoupper($value). '</input> <br>';
        }
    }

    if(isset($_POST['city']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['checkedWaether'])){
        $checked = [];
        $heading = "<h1>Pick a day</h1>
                    <h1>With a function";


    $userInputs = array(
        $_POST['city'],
        $_POST['month'],
        $_POST['year']
    );

    $heading .= "In $userInputs[0] in the month of $userInputs[1] $userInputs[2], you observed the following weather:<br> <ul>";
    foreach ($_POST['checkedWaether'] as $value){
        $heading .= "<li>$value</li>";
    }
    $heading .= "</ul>";
    $displayForm = False;
    echo $heading ; 
}        
if ($displayForm) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive form</title>
</head>
<body>
    
    <h1>How`s your weather</h1>
    <h1>With Function</h1>
    <form action="" method="post">
    <p>Please choose your information:</p>
    <span>City:</span>
    <input type="text" name="city">
    <span>Month:</span>
    <input type="text" name="month">
    <span>Year:</span>
    <input type="text" name="year">
    <p>Please choose the kind of weather oy experienced from the list below.</p>
    <p>Choose all that can apply.</p>
    <?php
        createCheckBox(array("Sunshine", "Clouds", "Rain", "Hail", "Sleet", "Snow", "Wind","Cold", "Heat"));
    ?>

    <input type="submit" name="submit" id="button" value="GO"></input>
    </form>
<?php
    }
?>
</body>
</html>