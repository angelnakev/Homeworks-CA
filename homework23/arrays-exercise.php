<?php

//1
$a = array( 0, 1, 2, 3, 4);
echo ($a[3]) ."<br>";

//2
$a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
echo ($a['three'])."<br>";

//3
$a = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);
echo ($a[1][1][0])."<br>";



//4
$a = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);
echo ($a["b"]["o"]["b"])."<br>";


//5
$a = "a,b,c,d,e,f";
$aexplode = explode(",", $a);
var_dump($aexplode);



//6
foreach ($aexplode as $value) {
    $newArr[$value] = $value;
}
var_dump($newArr);


//7
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);
$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);
$keysAndValues = array_combine($keys, $values);
var_dump($keysAndValues);


//8
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);

$amountOne = abs ($transactions[0]["debit"] - $transactions[0]["credit"]);
$amountTwo = abs ($transactions[1]["debit"] - $transactions[1]["credit"]);

$transactions[0]["amount"] = $amountOne;
$transactions[1]["amount"] = $amountTwo;

var_dump($transactions);






//9
$a = array( 0, 1, 2, 3, 4, 5, 6 );
echo array_sum($a);




