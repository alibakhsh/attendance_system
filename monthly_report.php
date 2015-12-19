<?php 
include "left.php";
?>
            <!-- BEGIN PAGE -->  
            <div class="page-content">
                <!-- BEGIN PAGE CONTAINER-->
                <div class="container-fluid">
                    <!-- BEGIN PAGE HEADER-->   
                    <div class="row-fluid">
                        <div class="span12">
                            <h3 class="page-title">
                                Monthly Report
                            </h3>
                            <ul class="breadcrumb hidden-phone">
                                <li>
                                    <i class="icon-home"></i>
                                    <a href="index.php">Home</a> 
                                    <span class="icon-angle-right"></span>
                                </li>
                                <li>
                                    <a href="#"> Monthly Report </a>
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
                                    <div class="caption"><i class="icon-user"></i> Monthly Report </div>
                                </div>
                                <div class="portlet-body">
                                    <form class="form-vertical login-form" action="">
                                    <div class="span4 ">
                                        <div class="control-group">
                                            <label class="control-label"> Start of Date </label>
                                            <div class="controls">
                                                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date date-picker">
                                                    <input type="text" value="" size="16" readonly="" class="m-wrap m-ctrl-large  date-picker"><span class="add-on"><i class="icon-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="span4 ">
                                        <div class="control-group">
                                            <label class="control-label"> End of Date </label>
                                            <div class="controls">
                                                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date date-picker">
                                                    <input type="text" value="" size="16" readonly="" class="m-wrap m-ctrl-large  date-picker"><span class="add-on"><i class="icon-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter">
                                        <button type="submit" class="btn blue"><i></i> Filter </button>
                                    </div>
                                    <!--/span-->
                                    </form>
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" /></th>
                                                <th> Employee Name </th>
                                                <th> Month Days </th>
                                                <th> Holiday </th>
                                                <th> Working Days </th>
                                                <th> Total Present </th>
                                                <th> Total Leave </th>
                                                <th> Total Absent </th>
                                                <th> Working Hours </th>
                                                <th> Hours Worked </th>
                                                <th> Less Hours </th>
                                                <th> Extra Hours </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                                 <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                                 <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                                 <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                                 <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-actions">
                                        <button type="submit" class="btn blue pull-right"><i></i> Print </button>
                                    </div>
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
include "footer.php";
?>