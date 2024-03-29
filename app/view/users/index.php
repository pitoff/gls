<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title></title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo URLROOT;?>/NiceAdmin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo URLROOT;?>/NiceAdmin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo URLROOT;?>/NiceAdmin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo URLROOT;?>/NiceAdmin/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?php echo URLROOT;?>/NiceAdmin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="<?php echo URLROOT;?>/NiceAdmin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo URLROOT;?>/NiceAdmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo URLROOT;?>/NiceAdmin/css/owl.carousel.css" type="text/css">
	<link href="<?php echo URLROOT;?>/NiceAdmin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo URLROOT;?>/NiceAdmin/css/fullcalendar.css">
	<link href="<?php echo URLROOT;?>/NiceAdmin/css/widgets.css" rel="stylesheet">
    <link href="<?php echo URLROOT;?>/NiceAdmin/css/style.css" rel="stylesheet">
    <link href="<?php echo URLROOT;?>/NiceAdmin/css/style-responsive.css" rel="stylesheet" />
	<link href="<?php echo URLROOT;?>/NiceAdmin/css/xcharts.min.css" rel=" stylesheet">	
	<link href="<?php echo URLROOT;?>/NiceAdmin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo URLROOT;?>/js/jquery.min.js"></script>
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <style type="text/css">
  .login-img3-body{

  background: url('./NiceAdmin/img/home.jpg') no-repeat center center fixed !important; 

  -webkit-background-size: cover;

  -moz-background-size: cover;

  -o-background-size: cover;

  background-size: cover;

}
</style>
<body class="login-img3-body">

    <div class="container">
    <a href="<?php echo URLROOT;?>" class="logo"> <?php echo SITENAME;?> </a>

    <div class="login-wrap">
      <form class="login-form" method="POST" action = "<?php echo URLROOT;?>/users/index">        
        
          <div id="errMsg"><em style="text-align: center;"><?= flashdanger('msg');?></em></div>
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="email" name="email" placeholder="Email" autofocus class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email'];?>"><span class="invalid-feedback" style="color:red;"><?php echo $data['email_err'];?></span>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" placeholder="Password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password'];?>"><span class="invalid-feedback" style="color:red;"><?php echo $data['password_err'];?></span>
            </div>
            
            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Login</button>
        
        </form>
      </div>
    </div>
</body>
<?php require APPROOT .'/view/include/footer'. '.php';?>

<script>
  function errMsg(){
    setTimeout(() => document.querySelector('#errMsg').remove(), 5000);
  }
  errMsg();
</script>