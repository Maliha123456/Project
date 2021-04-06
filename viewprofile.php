<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    index
  </title>
</head>
<body background="images/bg.jpg" link="#000" alink="#017bf5" vlink="#000">
    <div>
      <br />
      <h3 align="center">
        <font face="sans" size="4">
          <a href="profile.php">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
        </font>
      </h3>
    </div>

    <td>
            <fieldset>
                <legend>PROFILE</legend>
            <form class="" action="" method="post">
               <table>
               <tr>
                <td>Name</td>
                <td>:<?php $user = $_SESSION['current_user']; $name= $user['name']; echo "$name"; ?></td>
                <td rowspan="4"><img height="60px" weight="60px" src="user.png" alt="" ><br><a href="ProfilePic.php">Change</a></td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Email</td> 
                <td>:<?php $user = $_SESSION['current_user']; $email= $user['email']; echo "$email"; ?></td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Gender</td> 
                <td>:<?php $user = $_SESSION['current_user']; $gender= $user['gender']; echo "$gender"; ?></td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Date of Birth</td> 
                <td>:<?php $user = $_SESSION['current_user']; $dob= $user['dob']; echo "$dob"; ?>/<?php $user = $_SESSION['current_user']; $dob1= $user['dob1']; echo "$dob1"; ?>/<?php $user = $_SESSION['current_user']; $dob2= $user['dob2']; echo "$dob2"; ?></td>
               </tr>
               </table>
                <hr>
                <a href="EditProfile.php">Edit Profile</a>
            </form>
            </fieldset>
        </td>
      </tr>
    </table>

  </body>
</html>


<?php

	}else{
		header('location: Login.html');
	}

?>