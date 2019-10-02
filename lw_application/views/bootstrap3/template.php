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
$cartBtnMarkup = __('<strong>%total_items%</strong> %item_select% of <strong>%glo_total%</strong> in your').' <i class="glyphicon glyphicon-shopping-cart"></i>';
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
      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/main.css"  type="text/css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/font-awesome.min.css"  type="text/css">


      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/linearicons.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/themify-icons.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/owl.carousel.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/nice-select.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/nouislider.min.css">
      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/ion.rangeSlider.css" />
      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/ion.rangeSlider.skinFlat.css" />
      <link rel="stylesheet" href="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/magnific-popup.css">
      <link rel="stylesheet" href="<?php  echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>css/main.css">


      <script src="<?php echo latestFile('assets/bootstrap3/bootstrap-3.4.1/'); ?>js/main.js"></script>

      <link rel="stylesheet" href="<?php echo latestFile('assets/'.$currentThemeName.'bootstrap-3.4.1/css/bootstrap.min.css'); ?>" type="text/css">
   <link rel="stylesheet" href="<?php //echo latestFile('assets/'.$currentThemeName.'css/custom.css'); ?>" type="text/css">
   <link rel="stylesheet" href="<?php //echo latestFile('assets/css/footable.core.min.css'); ?>" type="text/css">
	<?php 	if(isset($insertCSS)):
  $insertCSS = array_filter($insertCSS);
  foreach($insertCSS as $eachCSS): ?>
	<link href="<?php //echo latestFile('assets/css/'.$eachCSS.'.css'); ?>" rel="stylesheet">
	<?php 	endforeach;	endif; ?>
   
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo latestFile('assets/ico/favicon.png'); ?>">
    <style type="text/css" id="modalModifiedStyle"></style>
     <script src="<?php echo latestFile('assets/js/jquery-1.11.1.min.js'); ?>" type="text/javascript" charset="utf-8"></script>

      <style type="text/css">
          .footers {
              position: fixed;
              left: 0;
              bottom:0;
              width: 100%;
              background-color: blue;
              color: lightslategrey;
          }

      </style>
  </head>

<body class="relative" >

<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.jpg" alt="" width="50"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="categories.php">Catégories</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">HTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
    <!-- Wrap all page content here -->
<main  role="main"  class="container ">
        <div class="store-header"> 
        <a class="brand" href="<?php echo site_url(); ?>"><img src="<?php echo latestFile('uploads/logo/'.$settings['logo']); ?>" alt="<?php echo $this->config->item('store_name'); ?>" class="logo-image"></a>
        <a href="<?php echo site_url('shopping_cart'); ?>" class="shopping-cart-btn btn btn-default btn-sm navbar-right hidden-xs hidden-sm"><?php echo $cartBtnMarkup; ?></a>
      </div>

   <!-- Modal -->
<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
      <div class="modal-content" id="cartContent">
        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
        <div class="navbar-header">
        
        <a href="<?php echo site_url('shopping_cart'); ?>" class="shopping-cart-btn btn btn-default btn-sm visible-xs visible-sm pull-left"><?php echo $cartBtnMarkup; ?></a>

          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse bs-js-navbar-collapse">
          <ul class="nav navbar-nav">
           <li class="active"><a href="<?php echo base_url(); ?>"><?php echo __('Home'); ?></a></li>
      <?php if(!$this->tank_auth->is_logged_in()): ?>
            <li><a href="<?php echo site_url('auth/login'); ?>"><i class="glyphicon glyphicon-log-in"></i> <?php echo __('Login'); ?></a></li>
        <?php endIf; ?>
          </ul>

           <?php 
               $availableLanguages = config_item('availableLanguages');
               if($this->tank_auth->is_logged_in() OR (isset($availableLanguages) AND count($availableLanguages) > 1)): ?>
          <ul class="nav navbar-nav navbar-right">
            <?php if($this->tank_auth->is_logged_in()): ?>
            <li id="fat-menu" class="dropdown">
              <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Howdy'); ?> <?php echo $this->tank_auth->get_username(); ?> <b class="caret"></b></a>

                <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                <li><a href="<?php echo site_url('auth/change_password'); ?>"><i class="glyphicon glyphicon-lock"></i> <?php echo __('Change Password'); ?></a></li>
                    <li><a href="<?php echo site_url('auth/change_email'); ?>"><i class="glyphicon glyphicon-envelope"></i> <?php echo __('Change Email'); ?></a></li>
                    <li class="divider"></li>
                    <li><a title="logout" href="<?php echo site_url('auth/logout'); ?>"> <i class="glyphicon glyphicon-log-out"></i> <?php echo __('Logout'); ?></a></li>
              </ul>
            </li>
            <?php endIf; ?>
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
        </div><!-- /.nav-collapse -->
      </nav>
     
<div class="custom-container main-container col-lg-12 col-md-12 col-sm-12">
    <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <?php $this->load->view($apply_theme.'/'.'template/sidebar', $page_data); ?>
    </div>
    <div class="col-md-8 col-lg-9 col-sm-8 page-container col-xs-12">
        <?php if (IS_STORE_DEMO): ?>
        <div class="alert alert-info" style="text-align:center;"><?php echo __('Demo purposes only. Nothing will save!!'); ?></div>
      <?php endif ?>
<?php if(isset($page_title)) echo '<h3>'.$page_title.'</h3> <hr>'; ?>
      <?php if(isset($temp_msg)) echo '<div class="alert alert-warning">'.$temp_msg.'</div>'; ?>
      <?php if (showFlashMsg()): ?>      
      <div class="warning-msg">
        <?php echo showFlashMsg(); ?>
      </div>
        <?php endif ?>
      <?php if(isset($page)): ?>
        <?php $this->load->view($apply_theme.'/'.$page, $page_data); ?>
      <?php endif; ?>
    </div>
    </div>
</div>
     </main>
    <?php 
      $footerTextArray = array(
        '%year%'        => date('Y'), 
        '%store_name%'  => __($settings['store_name']), 
      );

      $footerHeadingMarkup = __('&copy; %year% %store_name%');
      $footerHeadingMarkup =  strtr($footerHeadingMarkup, $footerTextArray);

    ?>


<footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>




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