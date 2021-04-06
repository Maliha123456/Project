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
    header('location: viewprofile.php');
}

?>
