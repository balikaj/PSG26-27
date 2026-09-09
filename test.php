<?php 
   /* $szam = 5;
    $szoveg = " asdasd";
    $karkater="a";
    $valosszam = 3.15;
    $trueorfalse = true;
    
    echo "ez van benne: " . $szam .  " ez a tipusa: " . gettype($szam) . "<br>";
    echo "ez van benne: " . $szoveg . " ez a tipusa: " . gettype($szoveg) . "<br>";
    echo "ez van benne: " . $karkater . " ez a tipusa: " . gettype($karkater) . "<br>";
    echo "ez van benne: " . $valosszam . " ez a tipusa: " . gettype($valosszam) . "<br>";
    echo "ez van benne: " . $trueorfalse . " ez a tipusa: " . gettype($trueorfalse) . "<br>";

    var_dump($szam;)
    */

    //egysor


    $array = [1,2,2000,4,5];
    $arraykarakter = ["a","b","c"];
    

    print(max($array));


    for($i = 0; $i < count($array); $i++){

        echo $array[$i] . " " . "<br>";
    }

    foreach ($arraykarakter as $item) {
        
        echo $item . " " . "<br>";
    }
    
    define("greeting", "welcome to w3");
    echo greeting;

   
    $a =13;
    $b = $a<10 ? "hello" : "goodbye";

    echo $b;

    
    function  sum ($parameter1,$parameter2){
        $value =  $parameter1 + $parameter2;
        return $value;

    }

    print(sum("1", " 2"));
 
?>