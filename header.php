<?php 

  ini_set('display_errors', 0);
  ini_set('display_startup_errors', 0);
  error_reporting(E_ALL);

?>
<?php 
  include("__functions.php"); 
  include("__vars.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  

  <title><?php echo htmlspecialchars($title);?></title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/logos/favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="preload" href="/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="/assets/main.css" as="style">
  <link rel="preload" href="/js/swiper.min.js" as="script">

  <link rel="stylesheet" type="text/css" href="/assets/main.css">

  <!-- Swiper Slider -->
  <script src="/js/swiper.min.js"></script>



  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="description" content="<?php echo $description; ?>">
  <link rel="canonical" href="<?php echo $url; ?>">

  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:url" content="<?php echo $url; ?>">
  <meta property="og:site_name" content="<?php echo $title; ?>">
  <meta property="og:image" content="<?php echo $image; ?>">
  <meta property="og:image:secure_url" content="<?php echo $image; ?>">
  <meta property="og:image:width" content="1024">
  <meta property="og:image:height" content="512">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:site" content="<?php echo $url; ?>">
  <meta name="twitter:image" content="<?php echo $image; ?>">
  <meta name="twitter:creator" content="<?php echo $url; ?>">

</head>

<body class="<?php echo htmlspecialchars($body_class);?>-page">

<!-- Preloader Start-->
<div id="preloader">
  <div class="row loader">
    <div class="loader-icon"></div>
  </div>
</div>
<!-- Preloader End -->

<!-- Navbar START -->
<header>
  <nav id="navigation4" class="container navigation">
    <div class="nav-header">
      <a class="nav-brand" href="/">
        <img src="/img/logos/logo.svg" class="main-logo" alt="logo" id="main_logo">
        <img src="/img/logos/logo-big.svg" class="big-logo">
      </a>
      <div class="nav-toggle"></div>
    </div>
    <div class="nav-menus-wrapper">
      <ul class="nav-menu align-to-right">
        
        <li><a href="https://kaisenlinux.org">Home</a></li>
        <li><a href="https://kaisenlinux.org/downloads">Downloads</a></li>
        <li><a href="https://kaisenlinux.org/blog/">Blog</a></li>
        <li><a href="https://kaisenlinux.org/documentation/">Documentation</a></li>
        <li><a href="https://kaisenlinux.org/manpages/">Manpages</a></li>
        <li><a href="#">Community</a>

        	<ul class="nav-dropdown">
          
          	<li><a href="https://forum.kaisenlinux.org" target="_blank">Forum</a></li>
          	<li><a href="https://gitlab.com/kaisenlinux" target="_blank">Gitlab</a></li>
          	<li><a href="https://github.com/kaisenlinux" target="_blank">Github (Gitlab mirror)</a></li>
          	<li><a href="https://linkedin.com/company/kaisenlinux" target="_blank">Linkedin</a></li>
          	<li><a href="https://twitter.com/kaisenlinux" target="_blank">Twitter</a></li>
        	
          </ul>

	      </li>

        <li>

          <a href="#">About</a>
          
          <ul class="nav-dropdown">

            <li><a href="https://kaisenlinux.org/team">Team</a></li>
            <li><a href="https://kaisenlinux.org/contributors">Contributors</a></li>
            <li><a href="https://kaisenlinux.org/partners">Partners</a></li>

          </ul>

        </li>

      </ul>

    </div>
  </nav>
</header>
