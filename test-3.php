<?php 
 include 'connection.php';


 $sql = "SELECT * FROM t_time";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "   " . $row["totaltime"].  "<br>";
    }
} else {
    echo "0 results";
}

// $query = "SELECT SUM(totaltime) AS soma FROM t_time";

// // $sql = 'SELECT employee_id, name, designation FROM emp_profile';
// $retval = mysqli_query($conn, $query);

// if (!$retval) {
//     die('Could not get data: ' . mysql_error());
// }
//  while ($row = mysqli_fetch_array($retval)) {

//     echo $row['soma'] ;
//     }
       
echo $date->format("%H:%I:%S")."<br>";





$date = 'SELECT SUM(totaltime) AS soma FROM t_time';
$currentdate = mysqli_query($conn, $date);
if ($result = $conn->query($date)) {
    while ($row = $result->fetch_object()) {
        $date = $row->date;
    }
    $result->close();
};

$conn->close();




 ?>