<?php
$title = "Equipments | OKI Equipments";
$equipments = "active";

require_once("includes/header.inc.php");
?>

      <!-- Single product-->
      <section class="section section-md bg-white">
        <div class="shell">
          <div class="layout-horizontal layout-horizontal_1">
            <div class="layout-horizontal__aside">
              <div class="reveal-flex">
                <!-- Thumb Zoe-->
                <a class="">
                  <img class="thumb-zoe__image" src="../images/equipment2.png" alt="" width="226" height="284"/>
                </a>
              </div>
            </div>
            <div class="layout-horizontal__main">
              <article class="single-product">
                <div class="single-product__header">
                  <h3 class="single-product__title">Cat Dump Truck</h3>
                  <!-- <p class="single-product__price"><sup>$</sup><span>137</span><sup>00</sup></p> -->
                </div>
                <div class="single-product__main">
                  <!-- Tabs-->
                  <div class="tabs-custom tabs-horizontal tabs-line">
                    <!-- Nav tabs-->
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tabs-product-1" data-toggle="tab">Description</a></li>
                      <!-- <li><a href="#tabs-product-2" data-toggle="tab">Cost &amp; It's Uses</a></li> -->
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="tabs-product-1">
                        <p>
                          <span class="just">Model: </span><br>CAT 725, CAT D300D, CAT D250B	<br>
                          <span class="just">Number Owned: </span><br>4 <br>
                          <span class="just">Capacity: </span><br>PAYLOAD: 23600kg, 27200kg, 22680kg	<br>
                          <span class="just">Specification: </span><br>ARTICULATED
                        </p>
                      </div>
                      <!-- <div class="tab-pane fade" id="tabs-product-2">
                        <p>Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment .</p>
                      </div> -->
                    </div>
                  </div>
                  <div class="group group-buttons group-middle"><a class="button button-darker" href="../equipment.php">Go Back to Equipment</a>
                    <!-- <p>or</p><a class="button button-primary" href="#">get price list</a> -->
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

    <?php require_once("includes/footer.inc.php") ?>
