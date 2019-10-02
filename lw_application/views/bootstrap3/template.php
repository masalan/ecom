<?php defined('BASEPATH') OR exit('No direct script access allowed');

$this->output->set_content_type('text/html', 'utf-8');
$store_settings = storeConfigItem();
$settings = ($store_settings['settings']);
$categories = ($store_settings['categories']);
$page_data['settings'] = $settings;
$page_data['categories'] = $categories;

$current_store_lang = $this->session->userdata('current_store_lang');
$current_store_lang = isset($current_store_lang) ? $current_store_lang : config_item('default_language');

$glo_total = $this->cart->total();
$glo_total_items = $this->cart->total_items();

$topButtomArray = array(
  '%total_items%' => $glo_total_items,
  '%item_select%' => ($glo_total_items == 1) ? __('item') : __('items'),
  '%glo_total%' => priceFormat($glo_total, true),
  );
$cartBtnMarkup = __('<strong> %total_items%</strong> ').' <i class="glyphicon glyphicon-shopping-cart"></i>';
//$cartBtnMarkup = __('<strong>%total_items%</strong> %item_select% of <strong>%glo_total%</strong> in your').' <i class="glyphicon glyphicon-shopping-cart"></i>';
$cartBtnMarkup =  strtr($cartBtnMarkup, $topButtomArray);
$currentThemeName = 'bootstrap3/'
?>
<!DOCTYPE html>
<html lang="<?php echo substr($current_store_lang, 0, 2); ?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo $settings['store_name']; ?> <?php if(isset($page_title)) echo ' - '. $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo latestFile('assets/'.$currentThemeName.'js/html5shiv.min.js'); ?>"></script>
      <script src="<?php echo latestFile('assets/'.$currentThemeName.'js/respond.min.js'); ?>"></script>
    <![endif]-->

   <!-- CSS -->

      <!-- CSS -->
      <link rel="stylesheet" href="<?php //echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/css/bootstrap.min.css'); ?>" type="text/css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'css/custom.css'); ?>" type="text/css">
      <link rel="stylesheet" href="<?php //echo latestFile('assets/css/footable.core.min.css'); ?>" type="text/css">
      <?php 	if(isset($insertCSS)):
          $insertCSS = array_filter($insertCSS);
          foreach($insertCSS as $eachCSS): ?>
              <link href="<?php echo latestFile('assets/css/'.$eachCSS.'.css'); ?>" rel="stylesheet">
          <?php 	endforeach;	endif; ?>



      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>css/linearicons.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>css/themify-icons.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>css/owl.carousel.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>css/nice-select.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>css/nouislider.min.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>css/ion.rangeSlider.css" />
      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>css/ion.rangeSlider.skinFlat.css" />
      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>css/magnific-popup.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>css/main.css">


    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo latestFile('assets/ico/favicon.png'); ?>">
    <style type="text/css" id="modalModifiedStyle"></style>
     <script src="<?php echo latestFile('assets/js/jquery-1.11.1.min.js'); ?>" type="text/javascript" charset="utf-8"></script>


      <style type="text/css">
          body {
              background-color: white;
          }
          #Parcourir {
              background-color:#5d9cd3;
              padding-top: 20px;
              height:55px;
              text-align: center;
              -webkit-border-radius: 5px;
              -moz-border-radius: 5px;
              border-radius: 5px;
          }
          #Parcourir h4,h3,h2,h1,h5,h6 {
              color: white;
          }
      </style>

  </head>

<body>

<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="<?php echo site_url(); ?>">
                    <img src="<?php echo latestFile('uploads/logo/'.$settings['logo']); ?>" alt="<?php echo $this->config->item('store_name'); ?>" width="50">
                </a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php.html">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="categories.php.html">Catégories</a></li>
                        <li class="nav-item"><a class="nav-link" href="categories.php.html#">HTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php.html">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a href="<?php echo site_url('shopping_cart'); ?>" class="cart"><span class="ti-bag"><?php echo $cartBtnMarkup; ?></span></a>
                        </li>
                        <?php if(!$this->tank_auth->is_logged_in()): ?>
                        <li class="nav-item">
                            <a   class="cart"  href="<?php echo site_url('auth/login'); ?>"><span class="ti-unlock"></span></a></li>
                        <?php endIf; ?>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>

                        <div class="sorting mr-auto">
                            <?php
                            $availableLanguages = config_item('availableLanguages');
                            if($this->tank_auth->is_logged_in() OR (isset($availableLanguages) AND count($availableLanguages) > 1)): ?>
                                <ul class="nav navbar-nav navbar-right">

                                    <?php if(isset($availableLanguages) AND count($availableLanguages) > 1): ?>
                                        <li class="dropdown">
                                            <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown"><?php echo $availableLanguages[$current_store_lang]; ?> <b class="caret"></b></a>

                                            <ul class="dropdown-menu">
                                                <?php foreach($availableLanguages as $langRow => $langValue):
                                                    if($langValue == $availableLanguages[$current_store_lang]) continue;
                                                    ?>
                                                    <li><a href="<?php echo site_url($this->uri->uri_string().'?lang='.$langRow); ?>"><?php echo $langValue; ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                    <?php endIf; ?>
                                </ul>
                            <?php endIf; ?>
                        </div>



                    </ul>
                </div>

            </div>
        </nav>
    </div>


</header>
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1 style="color: #000;">Page catégorie</h1>
                <nav style="color: #000;" class="d-flex align-items-center">
                    <a style="color: #000;" href="index.php.html">Accueil<span class="lnr lnr-arrow-right"></span></a>
                    <a style="color: #000;" href="categories.php.html#">boutique<span class="lnr lnr-arrow-right"></span></a>
                    <a style="color: #000;" href="category.php.html">Produit</a>
                </nav>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">

        <?php $this->load->view($apply_theme.'/'.'template/sidebar', $page_data); ?>



        <div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">


                <div class="sorting">
                    <select>
                        <option value="1">Tri par défaut</option>
                        <option value="1">Tri par défaut</option>
                        <option value="1">Tri par défaut</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Afficher 12</option>
                        <option value="1">Afficher 12</option>
                        <option value="1">Afficher 12</option>
                    </select>
                </div>

                <div class="pagination">
                    <?php //echo $this->pagination->create_links(); ?>
                </div>
            </div>
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">



                        <?php if(isset($page)): ?>
                            <?php $this->load->view($apply_theme.'/'.$page, $page_data); ?>
                        <?php endif; ?>





                </div>
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <!---
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Afficher 12</option>
                        <option value="1">Afficher 12</option>
                        <option value="1">Afficher 12</option>
                    </select>
                </div>
                --->
                <div class="pagination">
                    <?php //echo $this->pagination->create_links(); ?>
            </div>
            <!-- End Filter Bar -->
        </div>
    </div>
</div>

    <section class="related-product-area mt-5 section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1 style="color: black;">Vente de la semaine</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <?php if(isset($best_seller)):  foreach ($best_seller as $best): ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="<?php echo site_url('product/details/'.$best->id); ?>/<?php echo url_title($best->name, '-', true); ?>"><img src="<?php echo latestFile('uploads/thumb/'.$best->thumbnail); ?>" height="80" width="80" class="img-rounded" alt="<?php echo $best->name; ?>"></a>
                                    <div class="desc">
                                        <a href="<?php echo site_url('product/details/'.$best->id); ?>/<?php echo url_title($best->name, '-', true); ?>" style="font-size: 11px" class="title"><?php echo $best->name; ?></a>
                                        <div class="price">
                                            <h6 style="color: black;"><?php echo priceFormat($best->price); ?></h6>
                                            <h6 class="l-through"><?php echo priceFormat($best->price); ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; else: ?>
                            <div class="alert alert-info"><?php echo __('There are no products to show!!'); ?></div>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ctg-right">
                        <a href="categories.php.html#" target="_blank">
                            <img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php // $this->load->view($apply_theme.'/'.'store/best_seller.php',$page_data); ?>

    <?php //$this->load->view($apply_theme.'/'.$pages, $page_data); ?>
    <?php $this->load->view($apply_theme.'/'.'template/footer.php'); ?>






    <script src="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="<?php //echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>js/jquery.nice-select.min.js"></script>
    <script src="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>js/jquery.sticky.js"></script>
    <script src="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>js/nouislider.min.js"></script>
    <script src="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>js/countdown.js"></script>
    <script src="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php //echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>js/gmaps.min.js"></script>
    <script src="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/'); ?>js/main.js"></script>
    <script type="text/javascript">
        $('#owl-carousel').owlCarousel({
            items:1,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:1500,
            autoplayHoverPause:true
        });
    </script>

    <script src="<?php echo latestFile('assets/js/footable.min.js'); ?>" type="text/javascript"></script>
    <?php $this->load->view($apply_theme.'/'.'template/js_scripts');  ?>




    <script src="<?php echo latestFile('assets/js/footable.min.js'); ?>" type="text/javascript"></script>
    <?php $this->load->view($apply_theme.'/'.'template/js_scripts');  ?>
    <script type="text/javascript">
        $(document).ready(function($) {
            $(window).on('resize', onResizeWindow);

            $('.warning-msg .alert').addClass('alert-warning');

            function onResizeWindow(){
                var modalModifiedStyle = '.modal-body{max-height:'+($(window).height() * 0.35)+'px;}';
                $('#modalModifiedStyle').html(modalModifiedStyle);
            }

            onResizeWindow();

            $('#shopping-cart-btn, .shopping-cart-btn').on('click', function(e){
                e.preventDefault();

                $('#cartModal').modal('show');

                var $this = $(this),
                    $cartModal = $('#cartContent'),
                    requestURL = $this.attr('href');
                $cartModal.html('<div style="padding:10%; text-align:center;">  <img src="<?php echo base_url("assets/img/ajax-loader.gif"); ?>"></br> <?php echo __("Loading..."); ?></div>');
                $.post(requestURL, function(data){
                    $cartModal.html(data.page_data);
                },'JSON');
            });

        });
    </script>

  </body>
</html>