<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
  <!-- Site Title-->
  <title><?php if(isset($title)) echo $title ?></title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Mono:300,400,500,700">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/may.css">
  <!--[if lt IE 10]>
  <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
  <script src="js/html5shiv.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- Page Loader-->
  <div id="page-loader">
    <div class="page-loader-logo">
      <div class="brand">
        <div class="brand__name"><img src="../images/logo-141x65_2.png" alt="" width="141" height="65"/>
        </div>
      </div>
    </div>
    <div class="page-loader-body">
      <div id="loadingProgressG">
        <div class="loadingProgressG" id="loadingProgressG_1"></div>
      </div>
    </div>
  </div>
  <!-- Page-->
  <div class="page">
    <!-- Page Header -->
    <header class="page-header section">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-fullwidth" data-stick-up-clone="false" data-md-stick-up-offset="150px" data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true">
          <div class="rd-navbar-aside-outer rd-navbar-content-outer">
            <div class="rd-navbar-content__toggle rd-navbar-fullwidth--hidden" data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
            <div class="rd-navbar-aside rd-navbar-content">
              <div class="rd-navbar-aside__item">
                <ul class="rd-navbar-items-list">
                  <li>
                    <div class="unit unit-spacing-xxs unit-horizontal">
                      <div class="unit__left"><span class="icon icon-sm icon-primary fl-bigmug-line-trophy55"></span></div>
                      <div class="unit__body">
                        <p>The Leading Engineering, Procurement and Construction Company</p>
                      </div>
                    </div>
                  </li>
                  <!-- <li>
                    <div class="unit unit-spacing-xxs unit-horizontal">
                      <div class="unit__left"><span class="icon icon-sm icon-primary fl-bigmug-line-circular220"></span></div>
                      <div class="unit__body">
                        <p>Certified ISO 9001:2008</p>
                      </div>
                    </div>
                  </li> -->
                </ul>
              </div>
              <div class="rd-navbar-aside__item">
                <ul class="rd-navbar-items-list">
                  <li>
                    <div class="unit unit-spacing-xxs unit-horizontal">
                      <div class="unit__left"><span class="text-primary">Phone:</span></div>
                      <div class="unit__body"><a href="callto:#">+2348086666010 | +2348086666060</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel -->
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="../index.php">
                  <div class="brand__name"><img src="../images/logo-141x65.png" alt="" width="141" height="65"/>
                  </div></a></div>
                </div>
                <!-- RD Navbar Nav -->
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-search rd-navbar-search-toggled">
                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"></button>
                    <form class="rd-search" action="search-results.php" data-search-live="rd-search-results-live" method="GET">
                      <div class="form-wrap">
                        <input class="form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                        <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                      </div>
                      <button class="rd-navbar-search-submit" type="submit"></button>
                      <div class="rd-search-results-live" id="rd-search-results-live"></div>
                    </form>
                  </div>
                  <div class="rd-navbar-main-item"><a class="button button-xs button-lighter" href="../contacts.php">Email</a></div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="<?php if(isset($home)) echo $home ?>"><a href="../index.php">Home</a>
                    </li>
                    <li class="<?php if(isset($about)) echo $about ?>"><a href="../about-us.php">About Us</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="../code.php">Code of Practice</a>
                        </li>
                      </ul>
                    </li>
                    <li class="<?php if(isset($projects)) echo $projects ?>"><a href="../projects.php">Projects</a>
                    </li>
                    <li class="<?php if(isset($equipments)) echo $equipments ?>"><a href="../equipments.php">Equipments</a>
                    </li>
                    <li class="<?php if(isset($career)) echo $career ?>"><a href="../careers.php">Career</a>
                    </li>
                    <li><a href="../contacts.php">Contacts</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
