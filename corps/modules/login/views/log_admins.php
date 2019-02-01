<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 13:28:33 GMT -->

<head>
    <title>Espace administrateur maxshop</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="http://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/main4a76.css?version=4.3.0" rel="stylesheet">
</head>

<body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
            <div class="logo-w">
                <a href="index-2.html"><img alt="" src="<?php echo base_url(); ?>img/logo-big.png"></a>
            </div>
            <h4 class="auth-header">Se connecter</h4>

            <?php 
                if(isset($mot_de_passe_erronee)){

                    if($mot_de_passe_erronee="erreur"){ ?>
                    <center>
                        <h5><b> <font color="red">login ou mot de passe incorrect</font> </b></h5>
                    </center>

                    <?php }

                 } 
            ?>
            

            <?php echo form_open('login'); ?>
            <form action="#">
                <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" placeholder="Entrer votre email" name="login" type="text">
                     <?php echo form_error('login','<font color="red">','</font>'); ?>
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                    
                           
                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <input class="form-control" placeholder="Entrer votre mot de passe" name="pass" type="password">
                     <?php echo form_error('pass','<font color="red">','</font>'); ?>
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                </div>
                <div class="buttons-w">
                    <button class="btn btn-primary">Se connecter</button>
                    
                </div>
            </form>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
<!-- Mirrored from light.pinsupreme.com/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 13:28:33 GMT -->

</html>