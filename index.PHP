<?php

$firstname=$_REQUEST['firstname'];
$secondname=$_REQUEST['secondname'];
$address=$_REQUEST['address'];
$phonenumbe=$_REQUEST['phonenumber'];
$toolsdoyouneed=$_REQUEST['toolsdoyouneed'];


if(isset($_POST['btntest']))

{

    $host="localhost";
    $user="root";
    $password="";
    $dp="gym equipment";

    @conn = mysqli_connect($host,$usser,$password,$db);
  
    $insert="insert into gg values('$firstname','$secondname','$address','$phonenumber';'$toolsdoyouneed')";
    mysquli_quiry($conn,$insert);
    
    if($conn){
        echo("<h1 style=" color:green;">Your Regestration is Done!</h1> ");
    }
    else{
        echo("<h1 style=' color:red;'>Your Regestration is Failed!</h1> ");

    }


}
