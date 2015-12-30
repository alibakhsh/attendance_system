<?php
ob_start();
include 'connection.php';
session_start();
include 'header.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}

if(isset($_POST['btn-login']))
{
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $upass = mysqli_real_escape_string($conn,$_POST['pass']);
 $res=mysqli_query($conn,"SELECT * FROM emp_profile WHERE email='$email'");
 //$row=mysql_fetch_array($res);
 $row=mysqli_fetch_array($res);
 
 if($row['password']=($upass))
 {
  $_SESSION['user'] = $row['employee_id'];
  header("Location: home.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
ob_end_flush();
?>
<!-- BEGIN BODY -->
<body class="login">
    <!-- BEGIN LOGO -->
    <div class="logo">

    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form method="post" class="form-vertical login-form">
            <h3 class="form-title">Login to your account</h3>
            
            <div class="control-group">

                <label class="control-label visible-ie8 visible-ie9">Email</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-user"></i>
                        <input type="email" name="email" placeholder="Email" class="m-wrap placeholder-no-fix"/>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-lock"></i>
                        <input type="password" name="pass" placeholder="Password" class="m-wrap placeholder-no-fix"/>
                    </div>
                </div>
            </div>
            <div class="form-actions">

                <button type="submit" name="btn-login" class="btn green pull-right">
                    Login <i class="m-icon-swapright m-icon-white"></i>
                </button>            
            </div>


        </form>


    </div>
    <!-- END LOGIN -->
