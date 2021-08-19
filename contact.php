<?php


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $number =$_POST['phonenumber'];
    $date =$_POST['date'];
    $time =$_POST['time'];

    $mailTo = "bludek.co@gmail.com";
    $headers ="From: ".$mailfrom;
    $txt ="you recieved a mail from ".$name.".\n\n".$number;

    mail($mailTo, $mailfrom, $number,  $date, $time, $headers );
    header("Location: index.html?mailsend");
}

?>