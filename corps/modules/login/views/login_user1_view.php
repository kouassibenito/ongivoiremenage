


 <?php 
      require('_header_2.php');
    ?>
<body style="background-image:url(<?php echo base_url(); ?>assets/login/bg.jpg);">
    <!-- Content Wrapper -->
    <div class="login-wrapper">
        <!-- <div class="back-link">
            <a href="index-2.html" class="btn btn-success">Back to Dashboard</a>
        </div> -->

       
        <div class="container-center">
             <center>
                    <img src="<?php echo base_url(); ?>assets/login/logoapn.jpg">
                </center>
                <br>
            <div class="panel panel-bd">
                
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>Se connecter</h3>
                            <small><strong>Veuillez renseigner vos identifiants</strong></small>
                        </div>
                    </div>
                </div>
                <?php echo form_open('login/login_members'); ?>
 
                <div class="panel-body">
                    <form action="#" id="loginForm" novalidate>
                        <div class="form-group">
                            <label class="control-label" for="username">Votre Numéro</label>
                            
                            <input type="text" placeholder="ex : 07070707" title="Entrer votre Numéro" required="" value="" name="login" class="form-control">
                            <?php echo form_error('login','<font color="red">','</font>'); ?>
                            <span class="help-block small">Votre Numéro d'inscription</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Votre Mot de passe</label>
                           
                            <input type="password" title="" placeholder="********" required="" value="" name="pass" class="form-control">
                             <?php echo form_error('pass','<font color="red">','</font>'); ?>
                            <span class="help-block small">Le mot de passe qui vous a été envoyé par SMS et par Email apres votre inscription.</span>
                        </div>
                        <div>
                            <button class="btn btn-primary">Se connecter</button>
                        </div>
                    </form>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/login/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url(); ?>assets/login/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>


</html>

