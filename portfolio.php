

<!doctype html>
<html lang="en">
<?php include 'header.php';?>
<body>
    <!-- ./Main Navigation -->

      <?php include 'nav.php';?>
          <main>
               <!-- ./Page header -->
        <header class="page header color-1 overlay alpha-8 image-background cover overlay gradient gradient-43" style="background-image: url('img/bg/waves.jpg')">
            <div class="divider-shape">
                <!-- waves divider -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shape-waves" style="left: 0; transform: rotate3d(0,1,0,180deg);">
                    <path class="shape-fill shape-fill-1" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z" />
                </svg>
            </div>
            <div class="container" style="">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="regular display-4 color-1 mb-4">Portfolio</h1>
                        <p class="lead color-1">Simple and affordable Portfolio. Try Dashcore with no obligation</p>
                    </div>
                </div>
            </div>
        </header>
<section class="screenshots coverflow">
            <div class="container">
                <div class="section-heading text-center">
                    <h2 class="bold display-4">App Screenshots</h2>
                    <p class="color-2 alpha-5">A picture is worth a thousand words</p>
                </div>
                <div class="swiper-container" data-sw-show-items="5" data-sw-space-between="20" data-sw-centered-slides="true" data-sw-autoplay="2500" data-sw-breakpoints='{"1200": {"slidesPerView": 5,"spaceBetween": 0},"992": {"slidesPerView": 3, "spaceBetween": 0},"576": {"slidesPerView": 2,"spaceBetween": 0}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img class="img-responsive" src="img/screens/app/1.png" alt="..."></div>
                        <div class="swiper-slide"><img class="img-responsive" src="img/screens/app/2.png" alt="..."></div>
                        <div class="swiper-slide"><img class="img-responsive" src="img/screens/app/3.png" alt="..."></div>
                        <div class="swiper-slide"><img class="img-responsive" src="img/screens/app/4.png" alt="..."></div>
                        <div class="swiper-slide"><img class="img-responsive" src="img/screens/app/5.png" alt="..."></div>
                        <div class="swiper-slide"><img class="img-responsive" src="img/screens/app/6.png" alt="..."></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        </main>
        <?php include 'footer.php';?>

   
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '');
    </script>