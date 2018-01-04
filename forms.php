<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Forms</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Mono:300,400,500,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
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
          <div class="brand__name"><img src="images/logo-141x65.png" alt="" width="141" height="65"/>
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
      <header class="page-header section">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="113px" data-lg-stick-up-offset="138px" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel -->
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.php">
                      <div class="brand__name"><img src="images/logo-141x65.png" alt="" width="141" height="65"/>
                      </div></a></div>
                </div>
                <!-- RD Navbar Content-->
                <div class="rd-navbar-content-outer">
                  <div class="rd-navbar-content__toggle rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
                  <div class="rd-navbar-content">
                    <ul class="rd-navbar-items-list">
                      <li>
                        <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                          <div class="unit__left"><span class="icon icon-md icon-primary fl-bigmug-line-trophy55"></span></div>
                          <div class="unit__body">
                            <p>Number #1 <br> Supplier in Europe </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                          <div class="unit__left"><span class="icon icon-md icon-primary fl-bigmug-line-circular220"></span></div>
                          <div class="unit__body">
                            <p>Certified <br> ISO 9001:2008</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="rd-navbar-content__item"><a class="button button-xs button-lighter" href="contacts.php">Get a quote</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Nav -->
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Search-->
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
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li><a href="about-us.php">About Us</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="top-management.php">Top management</a>
                        </li>
                        <li><a href="testimonials.php">Testimonials</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="production.php">Production</a>
                    </li>
                    <li><a href="products.php">Products</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="single-product.php">Single product</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="news.php">News</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="single-post.php">Single post</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="contacts.php">Contacts</a>
                    </li>
                    <li class="active"><a href="#">Pages</a>
                      <!-- RD Navbar Megamenu-->
                      <ul class="rd-navbar-megamenu">
                        <li>
                          <h5 class="rd-megamenu-header">Pages 1</h5>
                          <ul class="rd-megamenu-list">
                            <li><a href="careers.php">Careers</a></li>
                            <li><a href="top-management.php">Top management</a></li>
                            <li><a href="invest.php">Invest</a></li>
                            <li><a href="testimonials.php">Testimonials</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="single-post.php">Single post</a></li>
                          </ul>
                        </li>
                        <li>
                          <h5 class="rd-megamenu-header">Pages 2</h5>
                          <ul class="rd-megamenu-list">
                            <li><a href="404-page.php">404 page</a></li>
                            <li><a href="coming-soon.php">Coming soon</a></li>
                            <li><a href="maintenance.php">Maintenance</a></li>
                            <li><a href="sitemap.php">Sitemap</a></li>
                            <li><a href="search-results.php">Search results</a></li>
                            <li><a href="privacy-policy.php">Privacy policy</a></li>
                          </ul>
                        </li>
                        <li>
                          <h5 class="rd-megamenu-header">Elements</h5>
                          <ul class="rd-megamenu-list">
                            <li><a href="buttons.php">Buttons</a></li>
                            <li><a href="forms.php">Forms</a></li>
                            <li><a href="grid-system.php">Grid system</a></li>
                            <li><a href="progress-bars.php">Progress bars</a></li>
                            <li><a href="tables.php">Tables</a></li>
                            <li><a href="tabs-&amp;-accordions.php">Tabs &amp; accordions</a></li>
                            <li><a href="typography.php">Typography</a></li>
                          </ul>
                        </li>
                        <li>
                          <h5 class="rd-megamenu-header">Layouts</h5>
                          <ul class="rd-megamenu-list">
                            <li><a href="header-default.php">Header Default</a></li>
                            <li><a href="header-fullwidth.php">Header Fullwidth</a></li>
                            <li><a href="header-sidebar.php">Header Sidebar</a></li>
                            <li><a href="footer-modern.php">Footer Modern</a></li>
                            <li><a href="footer-corporate.php">Footer Corporate</a></li>
                            <li><a href="footer-classic.php">Footer Classic</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-1.jpg);">
        <div class="shell">
          <h2 class="breadcrumbs-custom__title">Forms</h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Forms</li>
          </ul>
        </div>
      </section>

      <!-- Page title -->
      <section class="section section-md bg-white text-center">
        <div class="shell">
          <div class="range range-50 range-sm-center">
            <div class="cell-sm-9 cell-md-8 cell-lg-6">
              <h3>Forms</h3>
              <p class="big">With forms you can get almost any kind of information from your visitors, who will definitely appreciate this attractive element.</p>
            </div>
          </div>
          <div class="range range-sm-center">
            <div class="cell-sm-10 cell-md-7 cell-lg-6">
              <h4>Login form</h4>
              <div class="group-sm group-sm-justify group-middle"><a class="button button-sm button-facebook button-icon button-icon-left" href="#"><span class="icon fa fa-facebook"></span>Facebook</a><a class="button button-sm button-twitter button-icon button-icon-left" href="#"><span class="icon fa fa-twitter"></span>Twitter</a><a class="button button-sm button-google button-icon button-icon-left" href="#"><span class="icon fa fa-google-plus"></span>Google+</a></div>
              <div class="text-decoration-lines"><span class="text-decoration-lines__content">or</span></div>
              <!-- RD Mailform-->
              <form class="rd-mailform rd-mailform_label-centered">
                <div class="form-wrap">
                  <label class="form-label-outside" for="login-email">E-mail</label>
                  <input class="form-input" id="login-email" type="email" name="email" data-constraints="@Email @Required">
                </div>
                <div class="form-wrap">
                  <label class="form-label-outside" for="login-password">Password</label>
                  <input class="form-input" id="login-password" type="password" name="pass" data-constraints="@Required">
                </div>
                <button class="button button-primary button-block" type="submit">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </section>


      <div class="divider"></div>
      <!-- Contact us-->
      <section class="section section-sm bg-white text-center">
        <div class="shell">
          <div class="range range-sm-center">
            <div class="cell-sm-10 cell-md-7 cell-lg-6">
              <h4>Contact us</h4>
              <!-- RD Mailform-->
              <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="range range-sm-bottom range-20">
                  <div class="cell-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-first-name" type="text" name="first-name" data-constraints="@Required">
                      <label class="form-label" for="contact-first-name">First name</label>
                    </div>
                  </div>
                  <div class="cell-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-last-name" type="text" name="last-name" data-constraints="@Required">
                      <label class="form-label" for="contact-last-name">Last name</label>
                    </div>
                  </div>
                  <div class="cell-xs-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Your Message</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="cell-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="cell-sm-6">
                    <button class="button button-block button-primary" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <div class="divider"></div>
      <!-- Contact Us-->
      <section class="section section-sm section-sm-mod-1 bg-white text-center">
        <div class="shell">
          <div class="range range-sm-center">
            <div class="cell-sm-10 cell-md-7 cell-lg-6">
              <h4>Contact Us (with reCAPTCHA)</h4>
              <!-- RD Mailform-->
              <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="range range-sm-bottom range-20">
                  <div class="cell-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact2-first-name" type="text" name="first-name" data-constraints="@Required">
                      <label class="form-label" for="contact2-first-name">First name</label>
                    </div>
                  </div>
                  <div class="cell-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact2-last-name" type="text" name="last-name" data-constraints="@Required">
                      <label class="form-label" for="contact2-last-name">Last name</label>
                    </div>
                  </div>
                  <div class="cell-xs-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact2-message">Your Message</label>
                      <textarea class="form-input" id="contact2-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="cell-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact2-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact2-email">E-mail</label>
                    </div>
                  </div>
                  <div class="cell-sm-7">
                    <div class="form-wrap form-wrap-recaptcha">
                      <!-- Google captcha-->
                      <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                    </div>
                  </div>
                  <div class="cell-sm-6">
                    <button class="button button-block button-primary" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Subscribe to Our Newsletter-->
      <section class="section section-md bg-gray-dark bg-image text-center" style="background-image: url(images/bg-image-2.jpg);">
        <div class="shell">
          <div class="range range-sm-center">
            <div class="cell-sm-9 cell-md-8 cell-lg-7">
              <h3>Subscribe to Our Newsletter</h3>
              <p class="big"><span class="reveal-inline-block" style="max-width: 580px;">Sign up to our newsletter and be the first to know about latest company news, special offers, events, and discounts.</span></p>
              <!-- RD Mailform-->
              <form class="rd-mailform rd-mailform_inline rd-mailform_inline-centered" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="subscribe-email">Enter your e-mail</label>
                </div>
                <button class="button button-primary" type="submit"> Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
      <footer class="section footer-modern parallax-container bg-gray-3">
        <div class="material-parallax"><img src="images/bg-image-3.jpg" alt=""></div>
        <div class="parallax-content">
          <div class="footer-modern__inner">
            <div class="shell">
              <div class="range range-xs-center range-90">
                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                  <!-- Box decorated-->
                  <article class="box-decorated">
                    <h4 class="box-decorated__title">Call Us Now</h4>
                    <dl class="list-terms-inline">
                      <dt>Phone #1</dt>
                      <dd><a href="callto:#">+1 (409) 987–5874  </a></dd>
                    </dl>
                    <dl class="list-terms-inline">
                      <dt>Phone #2</dt>
                      <dd><a href="callto:#">+1 (409) 123–3434</a></dd>
                    </dl>
                  </article>
                </div>
                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                  <!-- Box decorated-->
                  <article class="box-decorated">
                    <h4 class="box-decorated__title">Send a Message</h4>
                    <dl class="list-terms-inline">
                      <dt>Sales department</dt>
                      <dd><a href="mailto:#">info@demolink.org </a></dd>
                    </dl>
                    <dl class="list-terms-inline">
                      <dt>Support</dt>
                      <dd><a href="mailto:#">infosupport@demolink.org</a></dd>
                    </dl>
                  </article>
                </div>
                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                  <!-- Box decorated-->
                  <article class="box-decorated">
                    <h4 class="box-decorated__title">Main Office</h4>
                    <p>6036 Richmond hwy., Alexandria, VA, 2230</p>
                    <ul class="list-inline-0">
                      <li>
                        <dl class="list-terms-inline">
                          <dt>Weekdays</dt>
                          <dd>8:00–20:00</dd>
                        </dl>
                      </li>
                      <li>
                        <dl class="list-terms-inline">
                          <dt>Weekends</dt>
                          <dd>Closed</dd>
                        </dl>
                      </li>
                    </ul>
                  </article>
                </div>
                <div class="cell-xs-10 cell-sm-6 cell-md-4"><a class="brand" href="index.php">
                    <div class="brand__name"><img src="images/logo-inverse-141x65.png" alt="" width="141" height="65"/>
                    </div></a>
                  <p class="text-small">Creator is a diversified global manufacturing company that brings technology and engineering together.</p>
                </div>
                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                  <h4 class="heading-decorated">Useful Links</h4>
                  <ul class="list-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About us</a>
                    </li>
                    <li><a href="invest.php">Invest</a>
                    </li>
                    <li><a href="products.php">Products</a>
                    </li>
                    <li><a href="#">Media</a></li>
                    <li><a href="careers.php">Careers</a>
                    </li>
                  </ul>
                </div>
                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                  <h4 class="heading-decorated">Subscribe Now</h4>
                  <!-- RD Mailform-->
                  <form class="rd-mailform rd-mailform_sm rd-mailform_inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                    <div class="form-wrap">
                      <input class="form-input" id="footer-form-subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="footer-form-subscribe-email">Enter Your E-mail</label>
                    </div>
                    <button class="button button-secondary" type="submit">Send</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            <div class="shell text-center">
              <div class="range range-20">
                <div class="cell-sm-6 text-sm-left">
                  <!-- Rights-->
                  <p class="rights"><span>Creator</span><span>&nbsp;&copy;&nbsp;</span><span id="copyright-year"></span>.&nbsp;<br class="veil-xs"><a class="link-underline" href="privacy-policy.php">Privacy Policy</a>
                  </p>
                </div>
                <div class="cell-sm-6 text-sm-right">
                  <ul class="list-inline-xxs">
                    <li>
                      <p>Follow Us</p>
                    </li>
                    <li><a class="icon icon-xs icon-style-modern fa fa-twitter" href="#"></a></li>
                    <li><a class="icon icon-xs icon-style-modern fa fa-facebook" href="#"></a></li>
                    <li><a class="icon icon-xs icon-style-modern fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.php?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
