<!DOCTYPE html>
<html>


<head>
    <?php include("templates/tpl_head_form.php"); ?>
</head>

<body class="menu-position-side menu-side-left full-screen">
    <div class="all-wrapper solid-bg-all">
      
        <div class="layout-w">

            <div class="content-w">
                <!--------------------
START - Top Bar
-------------------->
                <div class="top-bar color-scheme-transparent">
                 
  
                <div class="content-i">
                    <div class="content-box">
                        <div class="element-wrapper">
                            <div class="invoice-w">
                                <div class="infos">
                                    <div class="info-1">
                                        <div class="invoice-logo-w"><img alt="" src="img/logo2.png"></div>
                                        <div class="company-name">Nour Distribution</div>
                                        <div class="company-address"> Riviera,
                                            <br/>Carrefour Rose Marie Guyro
                                            <br/>Côte-d'ivoire</div>
                                        <div class="company-extra">tel. 00000000</div>
                                    </div>
                                    
                                </div>
                                <div class="invoice-heading">
                                    <h3>Facture</h3>
                                    <div class="invoice-date"><?php echo date("d-m-Y"); ?></div>
                                </div>
                                <div class="invoice-body">
                                    <div class="invoice-desc">
                                        <div class="desc-label">Facture Numero #</div>
                                        <div class="desc-value">HSFB 342823</div>
                                    </div>
                                    <div class="invoice-table">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Qty</th>
                                                    <th class="text-right">PU</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                

                                                <?php

                                                  $list_cart=$this->cart->contents();
                                                  $somme=0;
                                                  foreach($list_cart as $item){ 

                                                  
                                                  $mtu=$item["price"]* $item["qty"];
                                                  $somme=$somme+$mtu;

                                                  ?>

                                                  <tr>
                                                    <td><?php echo $item["name"];?></td>
                                                    <td><?php echo $item["qty"];?></td>
                                                    <td class="text-right"><?php echo $item["price"];?></td>
                                                     <td class="text-right"><?php echo $mtu;?></td>
                                                </tr>


                                                 <?php }

                                                 ?>
                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td>Total</td>
                                                    <td class="text-right" colspan="3"><?php echo $somme;?></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="terms">
                                            <div class="terms-header">Terms and Conditions</div>
                                            <div class="terms-content">Paiement en cash</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-footer">
                                    <div class="invoice-logo"><img alt="" src="img/logo.png"><span>Nour Distribution</span></div>
                                    <div class="invoice-info"><span>hello@nourdistribution.inc</span><span>858.757.4455</span></div>
                                </div>
                            </div>
                        </div>

  
                    </div>
                </div>
            </div>
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
<!-- Mirrored from light.pinsupreme.com/misc_invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 13:28:33 GMT -->

</html>