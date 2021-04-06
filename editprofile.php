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
                <legend>EDIT PROFILE</legend>
            <form class="" action="editprofilevalidation.php" method="post">
               <table>
               <tr>
                <td>Name</td> 
                <td>:<input type="text" name="name" value=""></td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Email</td> 
                <td>:<input type="email" name="email" value=""></td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Gender</td> 
                <td>:<input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other</td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Date of Birth</td> 
                <td>:<input type="text" name="dob" value=""> / <input type="text" name="dob1" value=""> / <input type="text" name="dob2" value=""><i>(dd/mm/yyyy)</i></td>
               </tr>
               </table>
                <hr>
                <input type="submit" name="submit" value="Submit">
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
