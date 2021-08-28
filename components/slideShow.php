<?php
	$base_url = '/Y4-ORM-Webservices/Final/';
?>

<link rel="stylesheet" href="./style/slideShow.css">

<main class="slide-show main-content">
  <section class="slideshow">
    <div class="slideshow-inner">
      <div class="slides">
        <div class="slide is-active ">
          <div class="slide-content">
            <div class="caption">
              <div class="title">MacBook</div>
              <div class="text">
                <p>MacBook Pro 16" 2021 Big Sur.Processor 2.3 GHz 8-Core Intel Core i9. Memory 16 GB 2667 MHz DDR4</p>
              </div>
              <a href="<?php echo $base_url."?link=apple"; ?>" class="btn">
                <span class="btn-inner">Read More</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="./asset/mac.jpeg" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">MSI</div>
              <div class="text">
                <p>
                  MSI GF75 Thin Gaming Laptop, 17.3" FHD 120Hz IPS Screen,Intel Core i5-10300H Processor 
                  Up to 4.50 GHz, NVIDIA GTX 1650 Graphics, 8GB RAM
                </p>
              </div>
              <a href="<?php echo $base_url."?link=msi"; ?>" class="btn">
                <span class="btn-inner">Read More</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="./asset/msi.jpeg" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Dell</div>
              <div class="text">
                <p>
                  2020 Newest Dell Inspiron 15 5000 Premium PC Laptop: 15.6 Inch FHD Anti-Glare NonTouch Display,10th Gen i5, 
                  16GB RAM, 256GB SSD, Intel UHD Graphics, WiFi, Bluetooth, HDMI, Webcam, Backlit-KB, Win10
                </p>
              </div>
              <a href="<?php echo $base_url."?link=dell"; ?>" class="btn">
                <span class="btn-inner">Read More</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="./asset/dell.jpeg" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">ASUS</div>
              <div class="text">
                <p>
                  ASUS ROG Strix SCAR II 17.3" Gaming Laptop Intel Core i7 16Gb Memory NVIDIA GeForce 
                  RTX 2070 512GB Solid State Drive at Best Buy. Find low everyday prices and buy online for 
                  delivery or in-store pick-up. Price Match Guarantee.
                </p>
              </div>
              <a href="<?php echo $base_url."?link=asus"; ?>" class="btn">
                <span class="btn-inner">Read More</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="./asset/asus.jpeg" alt="" class="image" />
          </div>
        </div>
      </div>
      <div class="arrows">
        <div class="arrow prev">
          <span class="svg svg-arrow-left">
            <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
              <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z" />
            </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
        <div class="arrow next">
          <span class="svg svg-arrow-right">
            <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
              <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" />
            </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
      </div>
    </div>
  </section>
</main>