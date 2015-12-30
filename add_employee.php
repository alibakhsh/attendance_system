<?php
include 'left.php';
//ob_start();
//session_start();

//
//if (isset($_SESSION['user']) != "") {
//    header("Location: index.php");
//}
//
//if (isset($_POST['btn-signup'])) {
//    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $upass = mysqli_real_escape_string($conn, $_POST['pass']);
//
//    $sql = "INSERT INTO emp_profile (username,email,password)
//
//VALUES ('$uname','$email','$upass')";
//
//    if (!mysqli_query($conn, $sql)) {
//
//        die('Error:' . mysql_error());
//    }
//}
//ob_end_flush();
?>
<!-- BEGIN PAGE -->  
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->   
        <div class="row-fluid">
            <div class="span12">
                <h3 class="page-title">
                    Add Employee

                </h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                    </li>
                    <li>
                        <a href="#"> Add Employee</a>
                        <span class="icon-angle-right"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <div class="tabbable tabbable-custom boxless">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="portlet box light-grey">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>New Employee</div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form method="post" action="attendance_sheet.php" class="horizontal-form">
                                        <!--/row-->
                                        <div class="row-fluid">
                                            <div class="span6 ">
                                                <div class="control-group">
                                                    <label class="control-label"> Name </label>
                                                    <div class="controls">
                                                        <input type="text" name="name"  class="m-wrap span12" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="span6 ">
                                                <div class="control-group">
                                                    <label class="control-label"> Email </label>
                                                    <div class="controls">
                                                        <input type="email" name="email" class="m-wrap span12" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row-fluid">
                                            <div class="span6 ">
                                                <div class="control-group">
                                                    <label class="control-label"> CNIC </label>
                                                    <div class="controls">
                                                        <input type="text" name="cnic" class="m-wrap span12" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="span6 ">
                                                <div class="control-group">
                                                    <label class="control-label"> Mobile </label>
                                                    <div class="controls">
                                                        <input type="text" name="mobile" class="m-wrap span12" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row-fluid">
                                            <div class="span6 ">
                                                <div class="control-group">
                                                    <label class="control-label"> Designation </label>
                                                    <div class="controls">
                                                        <input type="text" name="designation" class="m-wrap span12" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="span6 ">
                                                <div class="control-group">
                                                    <label class="control-label"> Department </label>
                                                    <div class="controls">
                                                        <input type="text" name="department" class="m-wrap span12" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row-fluid">
                                            <!--/span-->
                                            <div class="span6 ">
                                                <div class="control-group">
                                                    <label class="control-label"> User Name </label>
                                                    <div class="controls">
                                                        <input type="text" name="uname" class="m-wrap span12" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6 ">
                                                <div class="control-group">
                                                    <label class="control-label"> Password </label>
                                                    <div class="controls">
                                                        <input type="password" name="pass" class="m-wrap span12" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>


                                        <!--/row-->
                                        <div class="form-actions">
                                            <button type="submit" name="btn-signup" class="btn blue"><i class="icon-ok"></i> Save</button>
                                            <button type="button" class="btn">Cancel</button>
                                        </div>
                                    </form>
                                    <!-- END FORM--> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        