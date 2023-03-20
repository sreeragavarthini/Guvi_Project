<?php
require 'vendor/autoload.php';
//connect to MongoDB Database
$client = new MongoDB\Client;

//connecting to specific database in mongoDB
$myDatabase = $client->myDB;

//connecting to our mongoDB Collections
$myCollection = $myDatabase->users;

if(isset($_POST['signup'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phoneNo = $_POST['phoneNo'];
    $Age = $_POST['age'];
    $Education = $_POST['education'];
    $DOB = sha1($_POST['dob']);
}

$data = array('$set' => array(

	"Firstname" => $fname,
	"Lastname" => $lname,
	"Email" => $email,
	"Phone Number" => $phoneNo,
    "Age" =>$age,
    "Address"=> $address,
    "Education"=>$education,
    "DOB"=>$dob

));

$insert = $myCollection->insertOne($data);



?>