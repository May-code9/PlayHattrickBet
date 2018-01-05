<?php
  $title = "Equipments";
  $equipments = "active";

  require_once("includes/header.inc.php");
 ?>
      <!-- Breadcrumbs-->
      <!-- <section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-13.jpg);">
        <div class="shell">
          <h2 class="breadcrumbs-custom__title">Products</h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.php">Home</a></li>
            <li class="active">Products</li>
          </ul>
        </div>
      </section> -->
      <hr style="margin:0px">

      <!-- Our Products-->
      <section class="section section-md bg-white text-center">
        <div class="shell">
          <div class="isotope-wrap isotope-modern-wrap">
            <!-- Section Header-->
            <div class="section__header">
              <h4>Our Products</h4>
              <div class="section__header-element">
                <div class="navigation-custom">
                  <button class="button navigation-custom__toggle" data-custom-toggle=".navigation-custom__content" data-custom-toggle-hide-on-blur="true">Filter</button>
                  <div class="navigation-custom__content">
                    <div class="isotope-filters isotope-filters_modern">
                      <ul class="inline-list">
                        <li><a class="active" data-isotope-filter="*" data-isotope-group="products" href="#">All products</a></li>
                        <li><a data-isotope-filter="Category 1" data-isotope-group="products" href="#">Tools</a></li>
                        <li><a data-isotope-filter="Category 2" data-isotope-group="products" href="#">accessories</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Isotope-->
            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="products">
              <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-3 isotope-item" data-filter="Category 1">
                  <!-- Product-->
                  <article class="product"> <a class="product__image-wrap" href="single_equipments/equipment1.php"><img class="product__image" src="images/product-1-120x151.png" alt="" width="120" height="151"/></a>
                    <div class="product__main">
                      <p class="product__title"><a href="single_equipments/equipment1.php">Equipment Name</a></p>
                      <!-- <p class="product__price">from $137</p> -->
                    </div>
                    <div class="product__footer"><a class="button button-xs button-gray-2" href="single_equipments/equipment1.php">details</a></div>
                  </article>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 isotope-item" data-filter="Category 2">
                  <!-- Product-->
                  <article class="product"> <a class="product__image-wrap" href="single_equipments/equipment2.php"><img class="product__image" src="images/product-2-179x141.png" alt="" width="179" height="141"/></a>
                    <div class="product__main">
                      <p class="product__title"><a href="single_equipments/equipment2.php">Equipment Name</a></p>
                      <!-- <p class="product__price">from $456</p> -->
                    </div>
                    <div class="product__footer"><a class="button button-xs button-gray-2" href="single_equipments/equipment2.php">details</a></div>
                  </article>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 isotope-item" data-filter="Category 1">
                  <!-- Product-->
                  <article class="product"> <a class="product__image-wrap" href="single_equipments/equipment3.php"><img class="product__image" src="images/product-3-157x123.png" alt="" width="157" height="123"/></a>
                    <div class="product__main">
                      <p class="product__title"><a href="single_equipments/equipment3.php">Equipment Name</a></p>
                      <!-- <p class="product__price">from $256</p> -->
                    </div>
                    <div class="product__footer"><a class="button button-xs button-gray-2" href="single_equipments/equipment3.php">details</a></div>
                  </article>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 isotope-item" data-filter="Category 2">
                  <!-- Product-->
                  <article class="product"> <a class="product__image-wrap" href="single_equipments/equipment4.php"><img class="product__image" src="images/product-4-215x157.png" alt="" width="215" height="157"/></a>
                    <div class="product__main">
                      <p class="product__title"><a href="single_equipments/equipment4.php">Equipment Name</a></p>
                      <!-- <p class="product__price">from $590</p> -->
                    </div>
                    <div class="product__footer"><a class="button button-xs button-gray-2" href="single_equipments/equipment4.php">details</a></div>
                  </article>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 isotope-item" data-filter="Category 1">
                  <!-- Product-->
                  <article class="product"> <a class="product__image-wrap" href="single_equipments/equipment5.php"><img class="product__image" src="images/product-5-121x168.png" alt="" width="121" height="168"/></a>
                    <div class="product__main">
                      <p class="product__title"><a href="single_equipments/equipment5.php">Equipment Name</a></p>
                      <!-- <p class="product__price">from $344</p> -->
                    </div>
                    <div class="product__footer"><a class="button button-xs button-gray-2" href="single_equipments/equipment5.php">details</a></div>
                  </article>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 isotope-item" data-filter="Category 2">
                  <!-- Product-->
                  <article class="product"> <a class="product__image-wrap" href="single_equipments/equipment6.php"><img class="product__image" src="images/product-6-202x148.png" alt="" width="202" height="148"/></a>
                    <div class="product__main">
                      <p class="product__title"><a href="single_equipments/equipment6.php">Equipment Name</a></p>
                      <!-- <p class="product__price">from $457</p> -->
                    </div>
                    <div class="product__footer"><a class="button button-xs button-gray-2" href="single_equipments/equipment6.php">details</a></div>
                  </article>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 isotope-item" data-filter="Category 1">
                  <!-- Product-->
                  <article class="product"> <a class="product__image-wrap" href="single_equipments/equipment7.php"><img class="product__image" src="images/product-7-219x98.png" alt="" width="219" height="98"/></a>
                    <div class="product__main">
                      <p class="product__title"><a href="single_equipments/equipment7.php">Equipment Name</a></p>
                      <!-- <p class="product__price">from $565</p> -->
                    </div>
                    <div class="product__footer"><a class="button button-xs button-gray-2" href="single_equipments/equipment7.php">details</a></div>
                  </article>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 isotope-item" data-filter="Category 2">
                  <!-- Product-->
                  <article class="product"> <a class="product__image-wrap" href="single_equipments/equipment8.php"><img class="product__image" src="images/product-8-165x148.png" alt="" width="165" height="148"/></a>
                    <div class="product__main">
                      <p class="product__title"><a href="single_equipments/equipment8.php">Equipment Name</a></p>
                      <!-- <p class="product__price">from $678</p> -->
                    </div>
                    <div class="product__footer"><a class="button button-xs button-gray-2" href="single_equipments/equipment8.php">details</a></div>
                  </article>
                </div>
              </div>
            </div>
            <!-- Pagination-->
            <ul class="pagination-custom">
              <li class="pagination-control"><a href="#">Prev</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li class="active"><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li class="pagination-control"><a href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </section>
<?php require_once("includes/footer.inc.php") ?>
