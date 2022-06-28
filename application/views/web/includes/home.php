
<div class="body-wrapper">
<?php
    $this->load->view('web/includes/navbar.php');
?>
  <div class="slider-with-banner">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                  <div class="slider-area">
                      <div class="slider-active owl-carousel">
                          <?php foreach($t_slider as $i=> $event): ?>
                          <div class="single-slide align-center-left  animation-style-01 bg-1" style="background-image: url('<?php echo base_url();?><?php echo$event['Image'];?>">
                              <div class="slider-progress"></div>
                              <div class="slider-content">
                                  <!-- <h5><?php echo $event['Name'];?></h5> -->
                                  <h2><?php echo $event['Name'];?></h2>
                                  <h3><?php echo $event['Desicription'];?></h3>
                                  <div class="default-btn slide-btn">
                                      <a class="links" href="<?php echo $event['URL'];?>">Read More</a>
                                  </div>
                              </div>
                          </div>
                          <?php endforeach;?>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <?php foreach($t_sidedisplay as $i=> $event): ?>
                  <div class="li-banner">
                      <a href="#">
                          <img src="<?php echo$event['Image'];?>" alt="">
                      </a>
                  </div>
                <?php endforeach;?>
              </div>
          </div>
      </div>
  </div>
  <div class="product-area pt-60 pb-50">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="li-product-tab">
                      <ul class="nav li-product-menu">
                          <li><a class="active" data-toggle="tab" href="#li-new-product"><span>New Arrival</span></a></li>
                          <li><a data-toggle="tab" href="#li-bestseller-product"><span>Featured Products</span></a></li>
                          <li><a data-toggle="tab" href="#li-featured-product"><span>News & Announcement</span></a></li>
                      </ul>               
                  </div>
              </div>
          </div>
          <div class="tab-content">
              <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                  <div class="row">
                      <div class="product-active owl-carousel">
                             <?php foreach($t_newproduct as $i=> $event): ?>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo$event['Image'];?>" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Bhutan Telecom Ltd</a>
                                              </h5>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html"><?php echo$event['Name'];?></a></h4>
                                          <div class="price-box">
                                              <span class="new-price">Nu.<?php echo$event['Price'];?></span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link m-md-5" >
                                              <li class="add-cart active"><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')">View Details</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <?php endforeach;?>
                      </div>
                  </div>
              </div>
              <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                  <div class="row">
                      <div class="product-active owl-carousel">
                          <?php foreach($t_featuredproduct as $i=> $event): ?>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo$event['Image'];?>" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Bhutan Telecom Ltd</a>
                                              </h5>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html"><?php echo$event['Name'];?></a></h4>
                                          <div class="price-box">
                                              <span class="new-price">Nu.<?php echo$event['Price'];?></span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link m-md-5" >
                                              <li class="add-cart active"><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')">View Details</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                               <?php endforeach;?>
                      </div>
                  </div>
              </div>
              <div id="li-featured-product" class="tab-pane" role="tabpanel">
                  <div class="row">
                      <div class="product-active owl-carousel">
                          <?php foreach($t_news as $i=> $event): ?>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo$event['Image'];?>" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Bhutan Telecom Ltd</a>
                                              </h5>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html"><?php echo$event['Name'];?></a></h4>
                                          <div class="price-box">
                                              <span class="new-price"><?=  substr(strip_tags($event['Description']), 0, 700).'............';?></span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link m-md-5" >
                                              <li class="add-cart active"><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')">Read More</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <?php endforeach;?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="li-static-banner">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-4 text-center">
                  <div class="single-banner">
                      <a href="#">
                          <img src="<?php echo base_url();?>/assest/web/images/banner/1_3.jpg" alt="Li's Static Banner">
                      </a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                  <div class="single-banner">
                      <a href="#">
                          <img src="<?php echo base_url();?>/assest/web/images/banner/1_4.jpg" alt="Li's Static Banner">
                      </a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                  <div class="single-banner">
                      <a href="#">
                          <img src="<?php echo base_url();?>/assest/web/images/banner/1_5.jpg" alt="Li's Static Banner">
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <br><br>
  <!-- 
  
  <section class="product-area li-laptop-product pt-60 pb-45">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="li-section-title">
                      <h2>
                          <span>Laptop</span>
                      </h2>
                      <ul class="li-sub-category-list">
                          <li class="active"><a href="shop-left-sidebar.html">Prime Video</a></li>
                          <li><a href="shop-left-sidebar.html">Computers</a></li>
                          <li><a href="shop-left-sidebar.html">Electronics</a></li>
                      </ul>
                  </div>
                  <div class="row">
                      <div class="product-active owl-carousel">
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo base_url();?>/assest/web/images/product/large-size/1.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Graphic Corner</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                          <div class="price-box">
                                              <span class="new-price">$46.80</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo base_url();?>/assest/web/images/product/large-size/2.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Studio Design</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                          <div class="price-box">
                                              <span class="new-price new-price-2">$71.80</span>
                                              <span class="old-price">$77.22</span>
                                              <span class="discount-percentage">-7%</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo base_url();?>/assest/web/images/product/large-size/3.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Graphic Corner</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                          <div class="price-box">
                                              <span class="new-price">$46.80</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo base_url();?>/assest/web/images/product/large-size/4.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Studio Design</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                          <div class="price-box">
                                              <span class="new-price new-price-2">$71.80</span>
                                              <span class="old-price">$77.22</span>
                                              <span class="discount-percentage">-7%</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo base_url();?>/assest/web/images/product/large-size/5.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Graphic Corner</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                          <div class="price-box">
                                              <span class="new-price">$46.80</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo base_url();?>/assest/web/images/product/large-size/6.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Studio Design</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                          <div class="price-box">
                                              <span class="new-price new-price-2">$71.80</span>
                                              <span class="old-price">$77.22</span>
                                              <span class="discount-percentage">-7%</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="product-area li-laptop-product li-tv-audio-product pb-45">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="li-section-title">
                      <h2>
                          <span>TV & Audio</span>
                      </h2>
                      <ul class="li-sub-category-list">
                          <li class="active"><a href="shop-left-sidebar.html">Chamcham</a></li>
                          <li><a href="shop-left-sidebar.html">Sanai</a></li>
                          <li><a href="shop-left-sidebar.html">Meito</a></li>
                      </ul>
                  </div>
                  <div class="row">
                      <div class="product-active owl-carousel">
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo base_url();?>/assest/web/images/product/large-size/3.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Graphic Corner</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                          <div class="price-box">
                                              <span class="new-price">$46.80</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo base_url();?>/assest/web/images/product/large-size/5.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Studio Design</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                          <div class="price-box">
                                              <span class="new-price new-price-2">$71.80</span>
                                              <span class="old-price">$77.22</span>
                                              <span class="discount-percentage">-7%</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo base_url();?>/assest/web/images/product/large-size/7.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Graphic Corner</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                          <div class="price-box">
                                              <span class="new-price">$46.80</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo base_url();?>/assest/web/images/product/large-size/9.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Studio Design</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                          <div class="price-box">
                                              <span class="new-price new-price-2">$71.80</span>
                                              <span class="old-price">$77.22</span>
                                              <span class="discount-percentage">-7%</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="<?php echo base_url();?>/assest/web/images/product/large-size/11.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Graphic Corner</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                          <div class="price-box">
                                              <span class="new-price">$46.80</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="single-product.html">
                                          <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                      </a>
                                      <span class="sticker">New</span>
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                          <div class="product-review">
                                              <h5 class="manufacturer">
                                                  <a href="shop-left-sidebar.html">Studio Design</a>
                                              </h5>
                                              <div class="rating-box">
                                                  <ul class="rating">
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                          <div class="price-box">
                                              <span class="new-price new-price-2">$71.80</span>
                                              <span class="old-price">$77.22</span>
                                              <span class="discount-percentage">-7%</span>
                                          </div>
                                      </div>
                                      <div class="add-actions">
                                          <ul class="add-actions-link">
                                              <li class="add-cart active"><a href="#">Add to cart</a></li>
                                              <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                              <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> -->
  <div class="li-static-home">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <!-- Begin Li's Static Home Image Area -->
                  <div class="li-static-home-image"></div>
                  <!-- Li's Static Home Image Area End Here -->
                  <!-- Begin Li's Static Home Content Area -->
                  <div class="li-static-home-content">
                      <p>Sale Offer<span>-20% Off</span>This Week</p>
                      <h2>Featured Product</h2>
                      <h2>Meito Accessories 2018</h2>
                      <p class="schedule">
                          Starting at
                          <span> $1209.00</span>
                      </p>
                      <div class="default-btn">
                          <a href="shop-left-sidebar.html" class="links">Shopping Now</a>
                      </div>
                  </div>
                  <!-- Li's Static Home Content Area End Here -->
              </div>
          </div>
      </div>
  </div>
