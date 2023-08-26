<?php
// fan 20 w
// ac 100 w
// fridge 150 w
// 1w = 14 taka
// fan 2 ac 5 fridge 2

// total word and Bill


//just a function
function electricity(){
    $fan = 20 * 2;
    $aci = 100 * 5;;
    $Refrigerator = 150*2;

    $totalbill_watt= $fan+ $aci+ $Refrigerator;
    echo " Your total watt  $totalbill_watt W <br>";

    $totalbill = $totalbill_watt * 14;
    echo "Total electricity Bill $totalbill Taka <br>";

}

electricity();

// dainamayc funtion
function electricity_d($fan=0,$aci=0,$Refrigerator=0){
    $fan = $fan * 2;
    $aci = $aci * 5;;
    $Refrigerator = $Refrigerator*2;


    $totalbill_watt= $fan+ $aci+ $Refrigerator;
    echo " Your total watt  $totalbill_watt W <br>";
   
    $totalbill = $totalbill_watt * 14;

    
    echo "Total electricity Bill $totalbill Taka";

}
electricity_d(10,20,30);



?>