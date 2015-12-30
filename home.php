<?php 
include 'left.php'; 
?>
<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>Widget Settings</h3>
        </div>
        <div class="modal-body">
            Widget settings form goes here
        </div>
    </div>
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    Dashboard <small>statistics and more</small>
                    
                </h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="home.php">Home</a> 
                        <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="#">Dashboard</a></li>

                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <div id="dashboard">
            <!-- BEGIN DASHBOARD STATS -->
            <form method="post" class="horizontal-form" name="clock">
                <div class="row-fluid">
                    <div class="span6 ">
                        <p class="time"> Current Time: <input class="timehome" type="text" id="face" name="time_in" value="" readonly> 
                            <input type="date" name="date" class="timehome" id="datePicker" value="<?php echo date("Y-m-d") ?>" readonly>
                        </p>
                        <p class="control-group"> Employee Id: <input class="timehome" type="text" name="employee_id" value=" <?php echo $userRow['employee_id']; ?>" readonly>  </p>
                        <p class="control-group"> Name: <span> <?php echo $userRow['username']; ?> </span> </p>
                        <p class="control-group"> Designation: <span><?php echo $userRow['designation']; ?></span> </p>

                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                            <thead>
                                <tr>
                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" /></th>
                                    <th> Total Leave  </th>
                                    <th> Total Working Hours </th>
                                    <th> Short Hours </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>5</td>
                                    <td>255</td>
                                    <td>4</td>

                                </tr>
                            </tbody>
                        </table>
                        <br>

                    </div>
                    <div class="span6 ">
                        <div class="example1 pull-right"></div>
                    </div>
                </div>
                <div class="row-fluid">


                    <div class="span3">
                        <select class="form-control" name="status">
                            <option> Present</option>
                            <option> Holiday </option>
                            <option> Leave </option>
                            <option> Absent </option>
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                   
                    <button type="submit" formaction="status.php" class="btn blue" value="time_in"> Start Time </button>
                    <button type="submit" formaction="test.php" class="btn blue" value="time_out"> End Time </button>
                </div>
            </form>

            <!-- END DASHBOARD STATS -->
            <div class="clearfix"></div>

        </div>
    </div>
    <!-- END PAGE CONTAINER-->    
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->
<?php include 'footer.php'; ?>