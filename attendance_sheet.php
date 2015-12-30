<?php
include 'connection.php';
 
mysqli_select_db($conn,"a_m_s");

$sql="INSERT INTO emp_profile (name, email, cnic, mobile, designation, department, username, password )

VALUES

('$_POST[name]','$_POST[email]','$_POST[cnic]','$_POST[mobile]','$_POST[designation]','$_POST[department]','$_POST[uname]','$_POST[pass]')";

if (!mysqli_query($conn,$sql))

  {

  die('Error:' . mysql_error());

  }

header('Location: index.php');

?>