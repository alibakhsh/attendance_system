<?php 
include 'left.php';
$min = isset($_POST['fromDate']);
$max = isset($_POST['toDate']);
 

if(!isset($cmd))
{

    $sql = "SELECT * FROM time_data"; // Would display all rows
if(isset($_POST['fromDate']) && !empty($_POST['fromDate']) && isset($_POST['toDate']) && !empty($_POST['toDate'])){ // if both dates are set and not empty...
    $sql .= " WHERE date BETWEEN '".$_POST['fromDate']."' AND '".$_POST['toDate']."'"; // ...filter dates
}
$result = mysqli_query($conn,$sql);
    // $result = mysqli_query($conn, "SELECT * FROM time_data");  
// $sql="SELECT * FROM time_data WHERE date BETWEEN '".$min."' AND '".$max."'";
// $result = mysqli_query($conn, $sql);

//  SELECT time_in, time_out, TIMEDIFF((time_out), time_in) AS total_time FROM time_data;

 ?>
            <!-- BEGIN PAGE -->  
            <div class="page-content">
                <!-- BEGIN PAGE CONTAINER-->
                <div class="container-fluid">
                    <!-- BEGIN PAGE HEADER-->   
                    <div class="row-fluid">
                        <div class="span12">
                            <h3 class="page-title">
                                Attendance Report
                            </h3>
                            <ul class="breadcrumb hidden-phone">
                                <li>
                                    <i class="icon-home"></i>
                                    <a href="index.php">Home</a> 
                                    <span class="icon-angle-right"></span>
                                </li>
                                <li>
                                    <a href="#"> Attendance Report </a>
                                    <span class="icon-angle-right"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box light-grey">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-user"></i> Attendance Report </div>
                                </div>
                                <div class="portlet-body">
                                    <form class="form-vertical login-form" action="" method="POST">
                                        <div class="span4 ">
                                            <div class="control-group">
                                                <label class="control-label"> Start of Date </label>
                                                <div class="controls">
                                                    <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2016-01-01" class="input-append date date-picker">
                                                        <input  name="fromDate" type="text" value="" size="16" readonly="" class="m-wrap m-ctrl-large  date-picker"><span class="add-on"><i class="icon-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span4 ">
                                            <div class="control-group">
                                                <label class="control-label"> End of Date </label>
                                                <div class="controls">
                                                    <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2016-01-01" class="input-append date date-picker">
                                                        <input name="toDate" type="text" value="" size="16" readonly="" class="m-wrap m-ctrl-large  date-picker"><span class="add-on"><i class="icon-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <label class="control-label text-center"> By Name </label>
                                            <div class="">
                                                <button type="submit" class="btn blue"><i></i> Filter </button>

                                                <select class="form-control pull-right">
                                                    <option> Atif Rafiq </option>
                                                    <option> Waqar Ahmed </option>
                                                    <option> Ali Bakhsh</option>
                                                    <option> Maher Adil</option>
                                                    <option></option>
                                                </select>
                                            </div> 
                                        </div>
                                        <!--/span-->
                                    </form>
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th> Date </th>
                                                <th> Status </th>
                                                <th> Time In </th>
                                                <th> Time Out </th>
                                                <th> Worked Hours </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                while($r=mysqli_fetch_array($result)){      
      $date=$r["date"];
      $ss_timestart=$r["time_in"];
      $ss_timeend=$r["time_out"];
      $status=$r["status"];

      // $totaltime = $ss_timestart=$r["time_in"] + $ss_timeend=$r["time_out"];
                                    ?>
                                            
                                            
                                            <tr class="odd gradeX">
                                                <td><?php echo "$date"; ?></td>
                                                <th><?php echo "$status"; ?></th>
                                                <th><?php echo "$ss_timestart"; ?></th>
                                                <th><?php echo "$ss_timeend"; ?></th>
                                                <th><?php  $date1 = "$date"; $time1 = "$ss_timestart";
            $date2 = "$date"; $time2 = "$ss_timeend";
            $before = strtotime($date1 . " " . $time1);
            $after = strtotime($date2 . " " . $time2);
            $diff = $after - $before;
            $hours = floor($diff / 3600);
            $minutes = floor(($diff - $hours * 3600) / 60);
            $seconds = $diff - $hours * 3600 - $minutes * 60;
    echo "$hours:$minutes:$seconds";?></th>

                                                



                                                
                                                
                                            </tr>

                                            <?php
                                }


}
                                ?>          
                                             

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th> Date </th>
                                                <th> Status </th>
                                                <th> Time In </th>
                                                <th> Time Out </th>
                                                <th>  </th>
                                                
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                            
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE CONTENT-->         
                </div>
                <!-- END PAGE CONTAINER-->
            </div>
            <!-- END PAGE -->  
        </div>
        <!-- END CONTAINER -->
        <?php 
 include 'footer.php';
 ?>