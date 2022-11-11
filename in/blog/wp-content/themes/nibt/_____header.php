

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    
	<link rel="alternate" href="https://blog.nibt.education/" hreflang="en-in" />

    <link rel="icon" href="images/favicon.png">
    
    <title><?php bloginfo('title'); ?></title>
    
	<meta property="fb:pages" content="1640353259591474" />
    
    <!-- Bootstrap core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/starter-template.css" rel="stylesheet">
    <!-- Custom styles for FONT-AWESOME -->
<?php /*?>    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css" rel="stylesheet"><?php */?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for SOCIAL ICONS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap-social.css" type="text/css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-88646971-3', 'auto');
  ga('send', 'pageview');
</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php /* wp_head(); 
 $script_data = get_field('structure_data_json_code'); 
 echo $script_data; */ ?>
    
    
    
<!-- Global site tag (gtag.js) - Google AdWords: 859988497 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-859988497"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-859988497');
</script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nibt' ); ?></a>
<nav class="navbar ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://nibt.education/">
                <?php /*?><img src="<?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    echo $image[0];  
                ?>" /><?php */?>
                  <img src="http://nibt.education/images/logo1.svg" style="height: 64px; margin-top:-5px;"/>
            </a>
        </div>

            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
    </div>
</nav>

<div class="topheader">
<div class="container-fluid">
<div class="row">
      <div class="col-md-9 letContent">
        <h4> Grand Launching of NIBT eLearning with <span>50%</span> Slash Down on Course &amp; Package Fee *Limited Time Offer 
        <a href="https://nibt.education/elearning/packages">Grab Discount!</a></h4>
      </div>
      <div class="col-md-3 rightContent text-right">
      <div class="sociconTop">
          <a href="https://www.facebook.com/nibtindia" target="_blank"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
          <a href="https://twitter.com/NIBTEducation" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/nibt-education/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="https://plus.google.com/101177820191650646500" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/nibteducation_/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      
    </div>
</div> 
</div>
</div>

