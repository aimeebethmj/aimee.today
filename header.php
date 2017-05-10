<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="author" content="">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">


  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!-- <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css"> -->

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php theActiveThemeDirectory(); ?>css/normalize.css">
  <link rel="stylesheet" href="<?php theActiveThemeDirectory(); ?>css/skeleton.css">
  <link rel="stylesheet" href="<?php theActiveThemeDirectory(); ?>css/main.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

 <!-- MYFONTS trial
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=293494(font-family=Frontage+Condensed+Bold)&sid=293547(font-family=Frontage+Condensed+3D)&sid=293554(font-family=Frontage+Condensed+Regular)&key=lkZQ9Jrp7i',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>

</head>
<body <?php body_class(); ?> >
  <?php include_once("analyticstracking.php") ?>

  <header class="nav-bar">
      <div class="container">
        <div class="row">
          <div class="three columns">
            <!-- <div class="logo">
              <a href="<?php echo site_url(); ?>" id="logo-link"></a>
            </div>-->
            <!-- <div id="home-link">
              <a href="<?php echo site_url(); ?>">Home</a>
            </div> --> 
          </div>
          <nav class="nine columns">
            <input class="trigger" type="checkbox" id="nav-button">
            <label class="hamburger" for="nav-button" onclick>+</label>
            <ul class="u-pull-right">
              <?php
                // get all the pages from 'main' category
                $main_pages = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'main', 'posts_per_page' => 200 ) );

                foreach($main_pages as $main_page) // for each school within schools
                {

                  $main_URL = get_page_link($main_page->ID);
                  $main_name = $main_page->post_title;
                  // showMeTheGoods($school_name);
                  echo '<li><a href="' . $main_URL . '">' . $main_name . '</a></li>';
                }
              ?>
              <li><a href="https://www.etsy.com/uk/shop/AimeeToday">Printable Shop</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div class="LogoHeader">
        <div id="logo">
          <a href="<?php echo site_url(); ?>"><img src="<?php theActiveThemeDirectory(); ?>images/AimeeTodayLogo_2.1blue.svg"></a>
        </div>
        <!-- <div id="headerImage">
            <img alt="Aimee Today. You can do it! Friendly reminders to help you be brave and take your next step! Plus printables and other tools to make every day amazing." src="<?php theActiveThemeDirectory(); ?>images/AimeeToday_Header_4.jpg">
        </div> -->
    </div>