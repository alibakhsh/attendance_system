<?php
include 'connection.php';

// ##### View DB data ##### Start ->
// $str = str_replace("\n", "<BR />", $str);
if(!isset($cmd))
{
    $result = mysqli_query($conn, "SELECT *	FROM time_data");
	
	echo "<table width='100%' cellpadding='0' cellspacing='0' border='1'>";
	echo "<tr>";
	echo "<td valign='top'>Date</td>";
	echo "<td valign='top'>Time in</td>";
	echo "<td valign='top'>Time Out</td>";
	echo "<td valign='top'>Total Time</td>";
	echo "<td valign='top'>Less Hours</td>";
	echo "<td valign='top'>Extra Hours</td>";
	echo "</tr>";
	
    while($r=mysqli_fetch_array($result))
   {
      $id=$r["id"];
      $date=$r["date"];
      $ss_timestart=$r["time_in"];
      $ss_timeend=$r["time_out"];
	  
	echo "<tr>";
	
	echo "<td valign='top'>$date</td>";
	echo "<td valign='top'>$ss_timestart</td>";
	echo "<td valign='top'>$ss_timeend</td>";
			$date1 = "$date"; $time1 = "$ss_timestart";
			$date2 = "$date"; $time2 = "$ss_timeend";
			$before = strtotime($date1 . " " . $time1);
			$after = strtotime($date2 . " " . $time2);
			$diff = $after - $before;
			$hours = floor($diff / 3600);
			$minutes = floor(($diff - $hours * 3600) / 60);
			$seconds = $diff - $hours * 3600 - $minutes * 60;
	echo "<td valign='top'>$hours:$minutes:$seconds</td>";
	echo "<td valign='top'> </td>";
	echo "<td valign='top'> </td>";
	echo "</tr>";
	}
echo "</table>";
echo "<br>";
}
// ##### View DB data ##### End <-


?>