<?php
include 'connection.php';
 
mysqli_select_db($conn,"a_m_s");

$sql="INSERT INTO time_data (employee_id, date, time_in, status)

VALUES

('$_POST[employee_id]','$_POST[date]','$_POST[time_in]','$_POST[status]')";


if (!mysqli_query($conn,$sql))

  {

  die('Error:' . mysql_error());

  }

header('Location: index.php');

?>