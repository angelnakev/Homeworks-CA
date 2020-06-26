<?php echo "Exercise 1<br>" ?>

&copy; <?php echo date("Y") . "PHP Exercises - CodeAcademy<br>" ?>




<?php echo "<br>Exercises 2</br>";

$myBirthday = mktime(0, 0, 0, 2, 22, 2021);
$myTime = time();
$daysTillBirthday = ($myBirthday - $myTime) / 60 / 60 / 24;
echo "I have " . floor($daysTillBirthday) . " days until my birthday.<br>";




echo "<br>Exercise 3<br>";

$date = date_create("2020-09-01");
$dateFormat1 = date_format($date, "Y/m/d");
$dateFormat2 = date_format($date, "y.m.d");
$dateFormat3 = date_format($date, "d-m-y");
echo $dateFormat1."<br>";
echo $dateFormat2."<br>";
echo $dateFormat3."<br>";




echo "<br>Exercise 4<br>";

$date1 = date_create("1988-03-04");
$date2 = date_create("2004-04-04");

$difference = date_diff($date1, $date2);
echo "The difference is: " . $difference->y . " years, " . $difference->m . " months and " . $difference->d . " days <br>";




echo "<br>Exercise 5<br>";

$sampleDate = "2020-09-12";
$resultDate = date("d-m-Y", strtotime($sampleDate));
echo "Result date is :" . $resultDate . "<br>";




echo "<br>Exercise 6<br>";

$nowTime = time();
$someTIme = strtotime("24 April 2015");

$dayDifference = floor(($nowTime - $someTIme)/86400);

echo $dayDifference ."<br>";




echo "<br>Exercise 7<br>";

$dateString = "2018-08-07";
$firstDateOfMonth = date("l-m-Y", strtotime($dateString));
$lastDateOfMonth = date("t-m-Y", strtotime($dateString));

echo "THe first day is: " .$firstDateOfMonth. " and the last day is :".$lastDateOfMonth."<br>";




echo "<br>Exercise 8<br>";

$dateStringEx8 = "2018-08-07";
$nameDay = date("l", strtotime ($dateStringEx8));
$dayOfMonth = date("j", strtotime($dateStringEx8));
echo $nameDay . " the " .$dayOfMonth. "th<br>";



echo "<br>Exercise 9<br>";

$dateToConvert = "2005-03-10 10:30:00";
$dateEx9 = strtotime($dateToConvert);
$hour = date("g:ia", $dateEx9);
$dayEx9 = date("j", $dateEx9);
$monthEx9 = date("F", $dateEx9);
echo $hour ." ".$dayEx9."th of ".$monthEx9;



echo "<br>Exercise 10<br>";

function convertTime($dateEx10, $mer){
    $date = $dateEx10 . "" . $mer;

    if ($mer === "AM") {
        echo date("Y-m-d h:i", strtotime($date)) . "<br>";               
    } else {
        echo date("Y-m-d H:i", strtotime($date)) . "<br>";               
    }
}
convertTime("2020-02-25 08:00:00", "AM");
convertTime("2020-02-25 08:00:00", "PM");



?>