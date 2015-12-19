 <?php 
 include 'left.php';

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
                                                <form action="attendance_sheet.php" method="post" class="horizontal-form">
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

                                                    <!--/row-->
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
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
        