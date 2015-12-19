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
                                    <form class="form-vertical login-form" action="index.html">
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
                                                <th> Working Hours </th>
                                                <th> Worked Hours </th>
                                                <th> Less Hours </th>
                                                <th> Extra Hours </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td> 31 </td>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>

                                        </tbody>
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