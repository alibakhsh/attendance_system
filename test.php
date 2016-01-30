<?php
include 'connection.php';
 
mysqli_select_db($conn,"a_m_s");
// $sql="INSERT INTO time_data_out (employee_id, date, time_out)
// VALUES
// ('$_POST[employee_id]','$_POST[date]','$_POST[time_in]')";
// if (!mysqli_query($conn,$sql))
//   {
//   die('Error:' . mysql_error());
//   }

$sql = "UPDATE time_data SET time_out = '$_POST[time_in]' ORDER BY id DESC LIMIT 1 ";
if ($conn->query($sql) == TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record:" . $conn->error;
}



header('Location: index.php');

?>