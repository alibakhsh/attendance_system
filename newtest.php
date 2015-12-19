<?php
   include 'connection.php';
   
   $sql = 'SELECT id, name FROM emp_profile';
   mysqli_select_db($conn, $dbname);
   $retval = mysqli_query($conn, $sql );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysqli_fetch_array($retval))
   {
      echo "EMP ID :{$row['id']}  <br> ".
         "EMP NAME : {$row['name']} <br> ".
         "--------------------------------<br>";
   }
   
  
?>