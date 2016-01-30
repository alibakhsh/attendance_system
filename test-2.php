<?php
include 'connection.php';

// $sql = 'SELECT date FROM time_data';
// $retval = mysqli_query($conn, $sql);

// // if (!$retval) {
// //     die('Could not get data: ' . mysql_error());
// // }

// // while ($row = mysqli_fetch_array($retval)) {

// // 	// echo $row['time_in'] ."<br>";
// // }
$sql_timein = 'SELECT time_in FROM time_data';
$timein = mysqli_query($conn, $sql_timein);
if ($result = $conn->query($sql_timein)) {
    while ($row = $result->fetch_object()) {
        $time_in = $row->time_in;
    }
    $result->close();
}

$sql_timeout = 'SELECT time_out FROM time_data_out';
$timeout = mysqli_query($conn, $sql_timeout);
if ($result = $conn->query($sql_timeout)) {
    while ($row = $result->fetch_object()) {
        $time_out = $row->time_out;
    }
    $result->close();
};

$in = new DateTime($time_in);
$out = new DateTime($time_out);
$diff = $in->diff($out);










// $date = 'SELECT date FROM time_data';
// $currentdate = mysqli_query($conn, $date);
// if ($result = $conn->query($date)) {
//     while ($row = $result->fetch_object()) {
//         $date = $row->date;
//     }
//     $result->close();
// };



// function query($query, $class) {
//    $data = $query->fetch_assoc();
//    $instance = new $class($data);
//    return $instance;
// } 



// echo $date ."<br>";
// echo $diff->format("%H:%I:%S")."<br>";





// $sql_timein = 'SELECT time_in FROM time_data';
// $timein = mysqli_query($conn, $sql_timein);
// if ($result = $conn->query($sql_timein)) {
//     while ($obj = $result->fetch_object()) {
//         printf ($obj->time_in. "<br>");
//     }
//     $result->close();
// }







// $sql = 'SELECT date FROM time_data';
// $numrows = mysqli_query($conn, $sql);
// $num_rows = mysqli_num_rows($numrows);

// // echo "$num_rows \n";

// do { 
//     echo $diff->format("%H:%I:%S"). "<br>";
//     $counter++;
// } while ($counter <= $num_rows);

// do { 
//     echo $diff->format("%H:%I:%S"). "<br>";
//     // $diff++;
// } while ($diff <= $num_rows);







// $query = "SELECT * FROM time_data";
// $result = mysqli_query($conn, $query);
// $num_results = mysqli_num_rows($result);
// for($i=0; $i<$num_results; $i++) {
// $row = mysqli_fetch_assoc($result);

//  echo  $row['time_in'] . "<br>";

// }
// $query = "SELECT * FROM time_data_out";
// $result = mysqli_query($conn, $query);
// $num_results = mysqli_num_rows($result);
// for($i=0; $i<$num_results; $i++) {
// $row = mysqli_fetch_assoc($result);

//  echo  $row['time_out'] . "<br>";

// }






// $query = "SELECT * FROM time_data";
// $result = mysqli_query($conn, $query);
// $num_results = mysqli_num_rows($result);
// for($i=0; $i<$num_results; $i++) {
// $row = mysqli_fetch_assoc($result);

//  echo  $row['time_in'];
//  echo  $diff->format("%H:%I:%S") . "<br>";
//  echo  $row['time_in'] . "<br>";

// }

// Read more: http://www.phpmagicbook.com/php-mysqli-db-connect-results-loop/#ixzz3xK6mZpXr


// $query = "SELECT date FROM time_data";
// $result = $mysqli->query($query);
// $row = $result->fetch_array(MYSQLI_BOTH);
// $row_cnt = $result->num_rows;
// $result->free();
// $mysqli->close();

// $sql = 'SELECT time_in FROM time_data';
// $retval = mysqli_query($conn, $sql);


// $result = mysql_query("SELECT * FROM time_data", $conn);
// $num_rows = mysqli_num_rows($retval);

// echo "$num_rows \n";

// }

// $q1 = 'some query on a set of tables';
// $q2 = 'similar query on a another set of tables';

// if ( ($r1=mysqli_query($q1)) && ($r2=mysqli_query($q2)) ) {

//      while (($row=mysql_fetch_assoc($r1))||($row=mysql_fetch_assoc($r2))) {

//          /* do something with $row coming from $r1 and $r2 */

//       }
//    } 





?>