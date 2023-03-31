<?php
   
    $f_name = $_POST["fname"];
    $l_name = $_POST["lname"];
    $gender = $_POST["Gender"];
    $username=$_POST["Username"];
    $address=$_POST["address"];
    $ProgLangs=$_POST["ProgLangs"];
    $department=$_POST["Department"];
    if( $gender == "Male" )
    {
        echo"Thanks Mr  $f_name $l_name","<br>";
    }
    else
    {
        echo"Thanks Miss  $f_name $l_name","<br>";
    }

    echo"Please Review your Information","<br>";
    echo"Name : $username","<br>";
    echo"Address :  $address","<br>";
    echo"Your Skills :  ";
   for($i=0;$i<count($ProgLangs);$i++)
   {
    echo "  $ProgLangs[$i] ";
   }
    echo"Department  :  $department ","<br>";
   