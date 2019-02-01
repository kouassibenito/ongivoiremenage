

<!DOCTYPE html>
<html>


<head>
    <?php include("templates/tpl_head_form.php"); ?>
</head>

<body class="menu-position-side menu-side-left full-screen">
    <div class="all-wrapper solid-bg-all">
        <div class="search-with-suggestions-w">
            
        </div>
        <div class="layout-w">
            <!--------------------
START - Mobile Menu
-------------------->
            <?php include("templates/tpl_mobile_resp.php"); ?>
            <!--------------------
END - Mobile Menu
-------------------->
            <!--------------------
START - Main Menu
-------------------->
            <?php include("templates/tpl_main_menu.php"); ?>
            <!--------------------
END - Main Menu
-------------------->
            <div class="content-w">
                <!--------------------
START - Top Bar
-------------------->
                <div class="top-bar color-scheme-transparent">
                    <!--------------------
START - Top Menu Controls
-------------------->
                    <div class="top-menu-controls">
                        <div class="element-search autosuggest-search-activator">
                            <input placeholder="Start typing to search..." type="text">
                        </div>
                        <!--------------------
START - Messages Link in secondary top menu
-------------------->
                        <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-mail-14"></i>
                            <div class="new-messages-count">12</div>
                            <div class="os-dropdown light message-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">John Mayers</h6>
                                                <h6 class="message-title">Account Update</h6></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="img/avatar2.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">Phil Jones</h6>
                                                <h6 class="message-title">Secutiry Updates</h6></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="img/avatar3.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">Bekky Simpson</h6>
                                                <h6 class="message-title">Vacation Rentals</h6></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="img/avatar4.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">Alice Priskon</h6>
                                                <h6 class="message-title">Payment Confirmation</h6></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--------------------
END - Messages Link in secondary top menu
-------------------->
                        <!--------------------
START - Settings Link in secondary top menu
-------------------->
                        <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-ui-46"></i>
                            <div class="os-dropdown">
                                <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                <ul>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--------------------
END - Settings Link in secondary top menu
-------------------->
                        <!--------------------
START - User avatar and menu in secondary top menu
-------------------->
                        <div class="logged-user-w">
                            <div class="logged-user-i">
                                <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                <div class="logged-user-menu color-style-bright">
                                    <div class="logged-user-avatar-info">
                                        <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="logged-user-info-w">
                                            <div class="logged-user-name">Maria Gomez</div>
                                            <div class="logged-user-role">Administrator</div>
                                        </div>
                                    </div>
                                    <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                                    <ul>
                                        <li><a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a></li>
                                        <li><a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a></li>
                                        <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a></li>
                                        <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>
                                        <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--------------------
END - User avatar and menu in secondary top menu
-------------------->
                    </div>
                    <!--------------------
END - Top Menu Controls
-------------------->
                </div>
                <!--------------------
END - Top Bar
-------------------->
               
                <div class="content-i">


                    <div class="content-box">

                        <!-- <div class="alert alert-success" id="succes_box" role="alert"><strong>Succès! </strong> Produit ajouté avec succès.
                         </div>-->

                   <div id="zone_id">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Ajouter une pointure de chaussures</h6>
                                    <div class="element-box">


                                        <form>
                                            <h5 class="form-header">Ajouter une pointure de chaussures</h5>
                                            <div class="form-desc">Ajouter une pointure de chaussures...</div>

    
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="">libelle pointure de chaussures</label>
                                                       
                                                        <input class="form-control" id="nom_produit"  type="text" value="">
                                                    </div>
                                                </div>

                                            </div>

                                             
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label> Commentaire</label>
                                                        <textarea id="description_produit" class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                           

                                            <div class="form-buttons-w">
                                                <button class="btn btn-primary" id="button_submit" type="submit"> Modifier</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                  
                    </div>
                       
                       
                        
                       
                    </div>
                </div>
            </div
        </div>
        <div class="display-type"></div>
    </div>
    <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/moment/moment.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/dropzone/dist/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/tether/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/util.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/button.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="<?php echo base_url(); ?>js/demo_customizer4a76.js?version=4.3.0"></script>
    <script src="<?php echo base_url(); ?>js/main4a76.js?version=4.3.0"></script>
    <script>


    </script>
</body>

</html>