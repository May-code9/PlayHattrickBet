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
            <img class="thumb-zoe__image" src="images/Dumper.png" alt="" width="226" height="284"/>
          </a>
        </div>
      </div>
      <div class="layout-horizontal__main">
        <article class="single-product">
          <div class="single-product__header">
            <h3 class="single-product__title">Dumpers</h3>
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
                    A dumper is a vehicle designed for carrying bulk material, often on building sites. Dumpers are distinguished from dump trucks by configuration: a dumper is usually an open 4-wheeled vehicle with the load skip in front of the driver, while a dump truck has its cab in front of the load. The skip can tip to dump the load; this is where the name "dumper" comes from. They are normally diesel powered. A towing eye is fitted for secondary use as a site tractor. Dumpers with rubber tracks are used in special circumstances and provide a more even distribution of weight compared to tires. Continuous tracks allow the operator to carry heavier payload on slick, snowy, or muddy surfaces, and are popular in some countries
                  </p>
                </div>
                <!-- <div class="tab-pane fade" id="tabs-product-2">
                  <p>Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment .</p>
                </div> -->
              </div>
            </div>
            <div class="group group-buttons group-middle"><a class="button button-darker" href="https://en.wikipedia.org/wiki/Dumper" target="_blank">Learn More</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<?php require_once("includes/footer.inc.php") ?>
