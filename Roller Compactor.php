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
          <a class="zoom">
            <img class="thumb-zoe__image" src="images/Roller-Compactor.png" alt="" width="226" height="284"/>
          </a>
        </div>
      </div>
      <div class="layout-horizontal__main">
        <article class="single-product">
          <div class="single-product__header">
            <h3 class="single-product__title">Roller Compactor</h3>
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
                  <p class="just">
                    A road roller (sometimes called a roller-compactor, or just roller) is a compactor type engineering vehicle used to compact soil, gravel, concrete, or asphalt in the construction of roads and foundations. Similar rollers are used also at landfills or in agriculture.
In some parts of the world, road rollers are still known colloquially as steam rollers, regardless of their method of propulsion. This typically only applies to the largest examples (used for road-making).
                  </p>
                </div>
                <!-- <div class="tab-pane fade" id="tabs-product-2">
                  <p>Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment .</p>
                </div> -->
              </div>
            </div>
            <div class="group group-buttons group-middle"><a class="button button-darker" href="https://en.wikipedia.org/wiki/Road_roller" target="_blank">Learn More</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<?php require_once("includes/footer.inc.php") ?>
