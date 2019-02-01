<!DOCTYPE html>
<html>


<head>
  <?php //include("templates/tpl_welcome_modal.php"); ?>
  <?php include("templates/tpl_head_form.php"); ?>
</head>

<body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
       <?php include("templates/tpl_head.php"); ?>
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
                <!--------------------
START - Breadcrumbs
-------------------->
               
                <!--------------------
END - Breadcrumbs
-------------------->
                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end">
                                            <select class="form-control form-control-sm rounded">
                                                <option value="Pending">Aujourd'hui</option>
                                                <option value="Active">Cette semaine</option>
                                                <option value="Cancelled">Tous</option>
                                            </select>
                                        </form>
                                    </div>
                                    <h6 class="element-header">Tableau des ventes</h6>
                                    <div class="element-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Total produit vendus</div>
                                                    <div class="value" style="font-size: 28px"><?php if(isset($Total_produits_vendus)) echo $Total_produits_vendus; ?></div>
                                                    <div class="trending trending-up-basic">
                                                        <!-- <span>12%</span> -->
                                                        <i class="os-icon os-icon-arrow-up2"></i></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Profit Net (Fcfa)</div>

                                                    <div class="value" style="font-size: 28px"><?php if(isset($total_profit_net_maxshop)) echo $total_profit_net_maxshop; ?></div>
                                                    <div class="trending trending-down-basic">
                                                      <!--   <span>12%</span> -->
                                                        <i class="os-icon os-icon-arrow-down"></i></div>
                                                </a>
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Total commandes</div>

                                                    <div class="value" style="font-size: 28px"><?php if(isset($Total_commande)) echo $Total_commande; ?></div>
                                                    <div class="trending trending-down-basic">
                                                       <!--  <span>9%</span> -->
                                                        <i class="os-icon os-icon-arrow-down"></i></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end">
                                            <select class="form-control form-control-sm rounded">
                                                <option value="Cancelled">Tous</option>
                                                <option value="Pending">Aujourd'hui</option>
                                                <option value="Active">Cette semaine</option>
                                                
                                            </select>
                                        </form>
                                    </div>
                                    <h6 class="element-header">Tableau des produits</h6>
                                    <div class="element-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Total produits</div>
                                                    <div class="value" style="font-size: 28px"><?php if(isset($total_produit_maxshop)) echo $total_produit_maxshop; ?></div>
                                                    <div class="trending trending-up-basic">

                                                        <!-- <span>12%</span> -->
                                                        <i class="os-icon os-icon-arrow-up2"></i></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label"> Produits en attente</div>
                                                    <div class="value" style="font-size: 28px"><?php if(isset($total_produit_maxshop_en_attente)) echo $total_produit_maxshop_en_attente; ?> </div>
                                                    <div class="trending trending-down-basic">
                                                        
                                                        <!-- <span>12%</span> -->
                                                        <i class="os-icon os-icon-arrow-down"></i></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Total produits validés</div>
                                                    <div class="value"><?php if(isset($total_produit_maxshop_validé)) echo $total_produit_maxshop_validé; ?></div>
                                                    <div class="trending trending-down-basic">

                                                        

                                                        <!-- <span>9%</span> -->
                                                        <i class="os-icon os-icon-arrow-down"></i></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end">
                                            <select class="form-control form-control-sm rounded">
                                                <option value="Cancelled">Tous</option>
                                                <option value="Pending">Aujourd'hui</option>
                                                <option value="Active">Cette semaine</option>
                                                
                                            </select>
                                        </form>
                                    </div>
                                    <h6 class="element-header">Tableau des vendeurs</h6>
                                    <div class="element-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Nombre de vendeurs</div>
                                                    <div class="value" style="font-size: 28px"><?php if(isset($total_vendeurs_maxshop)) echo $total_vendeurs_maxshop; ?></div>
                                                    <div class="trending trending-up-basic">

                                                        <!-- <span>12%</span> -->
                                                        <i class="os-icon os-icon-arrow-up2"></i></div>
                                                </a>
                                            </div>
                                             
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end">
                                            <select class="form-control form-control-sm rounded">
                                                <option value="Pending">Aujourd'hui</option>
                                                <option value="Active">Cette semaine</option>
                                                <option value="Cancelled">Tous</option>
                                            </select>
                                        </form>
                                    </div>
                                    <h6 class="element-header">Tableau des livraisons</h6>
                                    <div class="element-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label"> Produits à livrer </div>
                                                    <div class="value"><?php if(isset($total_produit_maxshop_a_livrer)) echo $total_produit_maxshop_a_livrer; ?></div>
                                                    <div class="trending trending-up-basic">
                                                       
                                                        <i class="os-icon os-icon-arrow-up2"></i></div>
                                                </a>

                                                

                                            </div>
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Produits livrer</div>
                                                    <div class="value"><?php if(isset($total_produit_maxshop_livrer)) echo $total_produit_maxshop_livrer; ?> </div>
                                                    <div class="trending trending-down-basic">
                                                        
                                                        <i class="os-icon os-icon-arrow-down"></i></div>
                                                        

                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Livraisons annulées</div>
                                                    <div class="value"><?php if(isset($total_livraison_annuler_maxshop)) echo $total_livraison_annuler_maxshop; ?></div>
                                                    <div class="trending trending-down-basic">
                                                        
                                                        <i class="os-icon os-icon-arrow-down"></i></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Les 7 dernières commandes</h6>
                                    <div class="element-box">
                                        <div class="table-responsive">
                                            <table class="table table-lightborder">
                                                <thead>
                                                    <tr>
                                                        <th>N° commande</th>
                                                       
                                                        <th class="text-center">Status</th>
                                                        <th class="text-right">Total</th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    <?php 

                                                    if(isset($liste_commande_7)){

                                                        foreach ($liste_commande_7 as $info) { ?>

                                                            <tr>
                                                        <td class="nowrap"><?php echo $info->id_commande; ?></td>
                                                        
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="text-right"><?php echo $info->montant_commande; ?> Fcfa</td>
                                                    </tr>

                                                    <?php
                                                            
                                                        }
 
                                                    }
                                                     ?>
                                                     
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Stats ventes du jour</h6>
                                    <div class="element-box">
                                        <div class="el-chart-w">
                                            <canvas height="120" id="donutChart" width="120"></canvas>
                                            <div class="inside-donut-chart-label"><strong>0</strong><span>Total commandes</span></div>
                                        </div>
                                        <div class="el-legend">
                                            <div class="legend-value-w">
                                                <div class="legend-pin" style="background-color: #6896f9;"></div>
                                                <div class="legend-value">Executées</div>
                                            </div>
                                            <div class="legend-value-w">
                                                <div class="legend-pin" style="background-color: #85c751;"></div>
                                                <div class="legend-value">Annulées</div>
                                            </div>
                                            <div class="legend-value-w">
                                                <div class="legend-pin" style="background-color: #d97b70;"></div>
                                                <div class="legend-value">En attente</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                                       
                                     


                    </div>

                    <!--------------------
START - Sidebar
-------------------->
                    <div class="content-panel">
                        <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
                        <div class="element-wrapper">
                            <h6 class="element-header">Lien rapide</h6>
                            <div class="element-box-tp">
                                <div class="el-buttons-list full-width"><a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-delivery-box-2"></i><span>Ajouter un nouveau vendeur</span></a><a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-window-content"></i><span>Ajouter un nouvel produit</span></a><a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-wallet-loaded"></i><span>Voir les commandes</span></a></div>
                            </div>
                        </div>
                        <!--------------------
START - Support Agents
-------------------->
                        <div class="element-wrapper">
                            <h6 class="element-header">Agents du support</h6>
                            <div class="element-box-tp">
                                <div class="profile-tile">
                                    <a class="profile-tile-box" href="users_profile_small.html">
                                        <div class="pt-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="pt-user-name">John Mayers</div>
                                    </a>
                                    <div class="profile-tile-meta">
                                        <ul>
                                            <li>Last Login:<strong>Online Now</strong></li>
                                            <li>Tickets:<strong><a href="apps_support_index.html">12</a></strong></li>
                                            <li>Response Time:<strong>2 hours</strong></li>
                                        </ul>
                                        <div class="pt-btn"><a class="btn btn-success btn-sm" href="apps_full_chat.html">Send Message</a></div>
                                    </div>
                                </div>
                                <div class="profile-tile">
                                    <a class="profile-tile-box" href="users_profile_small.html">
                                        <div class="pt-avatar-w"><img alt="" src="img/avatar3.jpg"></div>
                                        <div class="pt-user-name">Ben Gossman</div>
                                    </a>
                                    <div class="profile-tile-meta">
                                        <ul>
                                            <li>Last Login:<strong>Offline</strong></li>
                                            <li>Tickets:<strong><a href="apps_support_index.html">9</a></strong></li>
                                            <li>Response Time:<strong>3 hours</strong></li>
                                        </ul>
                                        <div class="pt-btn"><a class="btn btn-secondary btn-sm" href="apps_full_chat.html">Send Message</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--------------------
END - Support Agents
-------------------->
                       
                        <!--------------------
START - Team Members
-------------------->
                        <div class="element-wrapper">
                            <h6 class="element-header">Equipes</h6>
                            <div class="element-box-tp">
                                <div class="input-search-w">
                                    <input class="form-control rounded bright" placeholder="Search team members..." type="search">
                                </div>
                                <div class="users-list-w">
                                    <div class="user-w with-status status-green">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">John Mayers</h6>
                                            <div class="user-role">Account Manager</div>
                                        </div>
                                        <a class="user-action" href="users_profile_small.html">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </a>
                                    </div>
                                    <div class="user-w with-status status-green">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar2.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">Ben Gossman</h6>
                                            <div class="user-role">Administrator</div>
                                        </div>
                                        <a class="user-action" href="users_profile_small.html">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </a>
                                    </div>
                                    <div class="user-w with-status status-red">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar3.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">Phil Nokorin</h6>
                                            <div class="user-role">HR Manger</div>
                                        </div>
                                        <a class="user-action" href="users_profile_small.html">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </a>
                                    </div>
                                    <div class="user-w with-status status-green">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar4.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">Jenny Miksa</h6>
                                            <div class="user-role">Lead Developer</div>
                                        </div>
                                        <a class="user-action" href="users_profile_small.html">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--------------------
END - Team Members
-------------------->
                    </div>
                    <!--------------------
END - Sidebar
-------------------->
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="bower_components/bootstrap/js/dist/util.js"></script>
    <script src="bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="bower_components/bootstrap/js/dist/button.js"></script>
    <script src="bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="js/demo_customizer4a76.js?version=4.3.0"></script>
    <script src="js/main4a76.js?version=4.3.0"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42863888-9', 'auto');
        ga('send', 'pageview');
    </script>
</body>


</html>