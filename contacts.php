<?php
  $title = "Contact OKI";
  $contact = "active";

  require_once("includes/header.inc.php");

?>
      <!-- Breadcrumbs-->
      <!-- <section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-6.jpg);">
        <div class="shell">
          <h2 class="breadcrumbs-custom__title">Contacts</h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contacts</li>
          </ul>
        </div>
      </section> -->
      <hr style="margin:0px">

      <!-- Get in Touch-->
      <section class="section section-lg bg-white">
        <div class="shell">
          <div class="layout-bordered">
            <div class="layout-bordered__main text-center">
              <div class="layout-bordered__main-inner">
                <h3>Get in Touch</h3>
                <p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services and projects.</p>
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
                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                        <label class="form-label" for="contact-phone">Phone</label>
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
            <div class="layout-bordered__aside">
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Get social </p>
                <ul class="list-inline-xs">
                  <li><a class="icon icon-sm icon-default fa fa-facebook" href="https://web.facebook.com/Okisokariari-Sons-Nig-Limited-345780822571400/" target="_blank"></a></li>
                  <li><a class="icon icon-sm icon-default fa fa-twitter" href="https://www.instagram.com/okisokariari/" target="_blank"></a></li>
                </ul>
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Phone</p>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-local_phone"></span></div>
                  <div class="unit__body"><a href="callto:#">+2348086666010 | +2348086666060</a></div>
                </div>
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">E-mail</p>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit__left"><span class="icon icon-sm icon-primary fa fa-envelope"></span></div>
                  <div class="unit__body"><a href="mailto:#">info@okisokariari.com</a></div>
                </div>
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Address</p>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-location_on"></span></div>
                  <div class="unit__body"><a href="#">Head Office: <br>Plot 83, Tran Amadi Industrial Layout, <br> Port Harcourt, Rivers State, Nigeria.</a></div>
                </div>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-location_on"></span></div>
                  <div class="unit__body"><a href="#">Port Harcourt Branch Office: <br>8, Ikwere Road, <br> Port Harcourt, Rivers State, Nigeria.</a></div>
                </div>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-location_on"></span></div>
                  <div class="unit__body"><a href="#">Lagos Liaison Office: <br>99, Awolowo Road, <br> Ikoyi South, Ikoyi, Lagos State, Nigeria.</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- RD Google Map-->
      <section class="section">
        <div class="rd-google-map rd-google-map__model" data-zoom="6" data-x="2.810487" data-y="10.038382">
          <ul class="map_locations">
            <li data-y="4.810487" data-x="7.038382">
              <p>Plot 83, Trans Amadi Industrial Layout, Port Harcourt, Rivers State, Nigeria.</p>
            </li>
            <li data-y="4.8259538" data-x="6.9588741">
              <p>8, Ikwere Road, Port Harcourt, Rivers State, Nigeria.</p>
            </li>
            <li data-y="6.444387" data-x="3.4248166">
              <p>99, Awolowo Road, Ikoyi South, Ikoyi, Lagos State, Nigeria.</p>
            </li>

          </ul>
        </div>
      </section>
<?php
  require_once("includes/footer.inc.php")
?>
