<?php include "./include/header.php" ?>

<!--Main Content Start-->
<main id="projects">
  <!--Hero Section Start-->
  <section class="hero-bg-vh-100">
    <!--Hero Content Start-->
    <div class="hero-content">
      <div class="hero-text">
        <h1>Product Name</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
          quos ab placeat eveniet. Eaque dolor harum in! Optio, quos
          excepturi!
        </p>
      </div>
      <!--Parallax Scene Start-->
      <div id="scene" class="hero-img-parallax">
        <div class="parallax-img-1 layer" data-depth="0.4">
          <img src="./Images/ICONS/monitor.svg" alt="Monitor" />
        </div>
        <div class="parallax-img-2 layer" data-depth="0.3">
          <img src="./Images/ICONS/pallete.svg" alt="Pallete" />
        </div>
        <div class="parallax-img-3 layer" data-depth="0.6">
          <img src="./Images/ICONS/think.svg" alt="Idea" />
        </div>
        <div class="parallax-img-4 layer" data-depth="0.2">
          <img src="./Images/ICONS/production.svg" alt="Production" />
        </div>
      </div>
      <!--Parallax Scene End-->
    </div>
    <!--Hero Content Start-->
  </section>
  <!--Hero Section End-->

  <main class="container-sm">
    <!--Section One : Product Breifing Start-->

    <!--Section One : Product Breifing End-->
    <section>
      <div class="case-study-container my-5">
        <div class="case-study-img">
          <img class="mx-auto d-block" src="Images/Business.svg" alt="Girls" data-tilt="1" />
        </div>
        <div class="case-study-text">
          <h1>Lorem ipsum.</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa
            aut nihil quia, recusandae excepturi, doloribus adipisci
            cupiditate quae incidunt consectetur magni asperiores,
            voluptatem porro quisquam repellendus beatae nisi in, temporibus
            qui id totam dolorem! Nesciunt illo, molestias ratione odit
            debitis.
          </p>
          <button class="primary-btn my-1">Case Study</button>
          <div id="statistics" class="container statistics text-left waypoint w-100">
            <h4>
              <span class="timer" data-from="0" data-to="47">20</span>
              <span>%</span>
              <br />
              <span class="small-grey-text">increase</span>
            </h4>
            <h4>
              <span class="timer" data-from="0" data-to="90">0</span>
              <span>%</span>
              <br />
              <span class="small-grey-text">Improvment</span>
            </h4>
          </div>
        </div>
      </div>
    </section>
    <!--Section Two : Product Pics Start-->
    <section id="scroll-to">
      <div class="section-desc slide">
        <h1 class="primary-heading">Products Images</h1>
        <p class="secondary-heading">See Your Product Pics...</p>
      </div>
      <div class="product-imgs slide">
        <a data-fancybox data-caption="Proudct Image One" class="product-img-item" href="Images/Coming Soon.jpg" title="Product Img">
          <div class="reveal-img will-change-dark-theme"></div>
          <img src="./Images/Coming Soon.jpg" alt="Product Image 01" />
        </a>
        <a data-fancybox data-caption="Proudct Image Two" class="product-img-item" href="Images/Coming Soon.jpg" title="Product Img">
          <div class="reveal-img will-change-dark-theme"></div>
          <img src="./Images/Coming Soon.jpg" alt="Product Image 02" />
        </a>
        <a data-fancybox data-caption="Proudct Image Three" class="product-img-item" href="Images/Coming Soon.jpg" title="Product Img">
          <div class="reveal-img will-change-dark-theme"></div>
          <img src="./Images/Coming Soon.jpg" alt="Product Image 03" />
        </a>
        <a data-fancybox data-caption="Proudct Image Four" class="product-img-item" href="Images/Coming Soon.jpg" title="Product Img">
          <div class="reveal-img will-change-dark-theme"></div>
          <img src="./Images/Coming Soon.jpg" alt="Product Image 04" />
        </a>
      </div>
    </section>
    <!--Section Two : Product Pics End-->

    <!--Section Three : Product Description Start-->
    <section class="mt-5">
      <div class="section-desc slide mb-3">
        <h1 class="primary-heading text-center w-100">Product Specs</h1>
      </div>
      <div class="product-showcase slide">
        <div class="product-showcase-img">
          <div class="reveal-img will-change-dark-theme"></div>
          <img class="w-75" src="Images/work time.svg" alt="Work Time" data-tilt="1" />
        </div>
        <div class="product-showcase-desc">
          <div class="reveal-text will-change-dark-theme"></div>
          <h1>
            Made With
            <br />
            love and <br />
            experience
          </h1>
          <p>Lorem ipsum dolor.</p>
        </div>
      </div>
      <div class="my-5 slide">
        <h1 class="primary-color biggest-font text-center w-100">
          We Offer Two Styles
        </h1>
        <p class="secondary-heading text-center w-100">
          What you see is what you get. No extra payments at all. <br />
          So make your customer happy and get this pack.
        </p>
      </div>
      <div class="product-showcase slide">
        <div class="product-showcase-desc text-right">
          <div class="reveal-text will-change-dark-theme"></div>
          <h1>
            A Good <br />
            Looking <br />
            Colour <br />
            Pallete
          </h1>
          <p>
            We took our time choosing <br />
            those colours.
          </p>
        </div>
        <div class="product-showcase-img">
          <div class="reveal-img will-change-dark-theme"></div>
          <img class="w-75 d-block ml-auto" src="Images/color pallete.svg" alt="Colour Pallete" data-tilt="1" />
        </div>
      </div>
    </section>
    <!--Section Three : Product Description End-->

    <section class="slide my-5">
      <h1 class="primary-color biggest-font text-center w-100">
        So what do you waiting for?
      </h1>
      <p class="secondary-heading text-center w-100">
        A limited time offer. Get it now or never.
      </p>
    </section>

    <!--Section Five : Purchase Button Start-->
    <section class="w-100 my-3">
      <button class="morning-btn d-block mx-auto">Purchase</button>
    </section>
    <!--Section Five : Purchase Button End-->
  </main>

  <?php include "./include/footer.php" ?>