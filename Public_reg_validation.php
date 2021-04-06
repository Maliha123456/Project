<?php
session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
	$email =$_POST [ 'email' ];
	$user_name =$_POST [ 'user_name' ];
	$user_name_length = strlen($user_name);
	$password =$_POST [ 'password' ];
	$password_length = strlen($password);
	$confirm_password = $_POST [ 'confirm_password' ];
	$gender = $_POST['gender'];
    $dd    =   $_POST [ 'dob'] ;
	$mm  = $_POST [ 'dob1'];
	$yyyy   = $_POST [ 'dob2' ] ;



    if ( $name == "" || $email == "" || $user_name == "" || $password == "" || $confirm_password == "" || $gender == "" || $dd == "" || $mm == ""|| $yyyy == "") {
 	echo "Filled all the file... ";
 }
 elseif ( $password != $confirm_password) {
 	echo "Password didn't match with confirm Password ";
 }
 elseif ( !preg_match("/[@#$%]/", $password) ) {
 	echo "Password Should contain special cherecters";
 }
 elseif ( $user_name_length < 2 && $password_length < 8) {
 	echo "username should be more than 2 words and password should be more than 8 words......";
 }
 else{
 	$user = [	
			                'name'=>$name, 
							'user_name'=>$user_name, 
							'email'=> $email,
							'password'=>$password, 
							'gender'=> $gender,
							'dob' => $dd,
							'dob1' => $mm,
							'dob2' => $yyyy

						];

	$_SESSION['current_user'] = $user;
    header('location: login.html');
 }

}

?>

 