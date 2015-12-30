<?php
include 'left.php';

$sql = 'SELECT employee_id, name, designation FROM emp_profile';
mysqli_select_db($conn, $dbname);
$retval = mysqli_query($conn, $sql);

if (!$retval) {
    die('Could not get data: ' . mysql_error());
}
?>

<!-- BEGIN PAGE -->  
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->   
        <div class="row-fluid">
            <div class="span12">
                <h3 class="page-title">Registered Employee</h3>
                <ul class="breadcrumb hidden-phone">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                    </li>
                    <li>
                        <a href="#">Registered Employee</a>
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
                        <div class="caption"><i class="icon-user"></i>Employee list</div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                            <thead>
                                <tr>
                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" /></th>
                                    <th> Employee Id </th>
                                    <th> Name </th>
                                    <th> Designation </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($retval)) {
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td><?php echo $row['employee_id'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['designation'] ?></td>
                                        <td><a class="btn red icn-only mini" href="#"><i class="icon-remove icon-white"></i></a>
                                            <a class="btn blue icn-only mini" href=""><i class="icon-edit icon-white"></i></a></td>
                                    </tr>
                                        <?php
                                }
                                ?>
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