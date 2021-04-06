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
        <legend>CHANGE PASSWORD</legend>
        <form class="" action="passcheck.php" method="post">
            <table>
            <tr>
            <td>Current Password</td>
            <td>:<input type="password" name="password" value=""></td>
            </tr>
            <tr>
            <td>New Password</td>
            <td>:<input type="password" name="newpassword" value=""></td>
            </tr>
            <tr>
            <td>Retype New Password</td>
            <td>:<input type="password" name="repassword" value=""></td>
            </tr>
            </table>
            <hr>
            <input type="submit" name="submit" value="Submit"><br>
        </form>
            </fieldset>
        </td>
      </tr>
  </body>
</html>


<?php

  }else{
    header('location: Login.html');
  }

?>
