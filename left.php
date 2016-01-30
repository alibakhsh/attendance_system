<?php 
session_start();
 
include 'header.php';

if(!isset($_SESSION['user']))
{
    header("Location: index.php");
}
$res=mysqli_query($conn, "SELECT * FROM emp_profile WHERE employee_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
 ?>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="page-header-fixed" onLoad="startclock()">
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN LOGO -->
                    <a class="brand" href="home.php">
                        Attendance Management System
                    </a>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <img src="assets/img/menu-toggler.png" alt="" />
                    </a>          
                    <!-- END RESPONSIVE MENU TOGGLER -->            

                </div>
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar nav-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->        
                <ul class="page-sidebar-menu">
                    <li>
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler hidden-phone"></div>
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    </li>
                    <li class="start active ">
                        <a href="home.php">
                            <i class="icon-home"></i> 
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="add_employee.php">
                            <i class="icon-bookmark-empty"></i> 
                            <span class="title">Add Employee</span>
                            <span class="arrow "></span>
                        </a>

                    </li>
                    <li class="">
                        <a href="report.php">
                            <i class="icon-cogs"></i> 
                            <span class="title"> Attendance Report </span>
                            <span class="arrow "></span>
                        </a>
                    </li>

                    <li class="">
                        <a href="registered.php">
                            <i class="icon-briefcase"></i> 
                            <span class="title">Registered Employee</span>
                            <span class="arrow "></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="monthly_report.php">
                            <i class="icon-briefcase"></i> 
                            <span class="title"> Monthly Report </span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="icon-user"></i> 
                            <span class="title">
                                <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Log Out</a>
                                </span>
                            <span class="arrow "></span>
                        </a>
                    </li>

                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
            
    <!-- END HEAD -->