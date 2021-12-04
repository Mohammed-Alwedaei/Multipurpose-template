<?php include "./include/header.php" ?>

<!--Main Content Start-->
<main id="portfolio-showcase">
  <!--Hero Section Start-->
  <section class="hero-bg-vh-100">
    <!--Hero Content Start-->
    <div class="hero-content">
      <div class="hero-text">
        <h1>
          Image <br />
          Showcase
        </h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
          quos ab placeat eveniet. Eaque dolor harum in! Optio, quos
          excepturi!
        </p>
      </div>
      <!--Hero Content Start-->
      <div id="scene" class="hero-img-parallax">
        <div class="parallax-img-1 layer" data-depth="0.4">
          <img src="Images/ICONS/monitor.svg" alt="Personal Computer" />
        </div>
        <div class="parallax-img-2 layer" data-depth="0.3">
          <img src="Images/ICONS/sketch.svg" alt="Sketch" />
        </div>
        <div class="parallax-img-3 layer" data-depth="0.6">
          <img src="Images/ICONS/think.svg" alt="Idea" />
        </div>
        <div class="parallax-img-4 layer" data-depth="0.2">
          <img src="Images/ICONS/pallete.svg" alt="Colour Pallete" />
        </div>
      </div>
      <!--Parallax Scene End-->
      <!--Hero Content End-->
    </div>
    <!--Hero Content Start-->
  </section>
  <!--Hero Section End-->

  <!--Section One : Projects Grid Start-->
  <section>
    <div id="projects" class="section-desc container-sm">
      <h1 class="primary-heading my-3">Projects</h1>
      <p class="secondary-heading my-3">Our Lovely Projects...</p>
    </div>
    <main id="masonry-grid" class="masonry-grid-showcase">
      <div class="grid-sizer"></div>

      <a data-fancybox data-caption="She is starring!!!" class="masonry-grid-item masonry-grid-item-auto gradient-sunset p-3" href="Images/Showcase/Feed.svg">
        <img src="Images/Showcase/Feed.svg" alt="Image 04" />
      </a>
      <a data-fancybox data-caption="We are building a website" class="masonry-grid-item masonry-grid-item-auto gradient-jshine p-3" href="Images/Showcase/Building.svg">
        <img src="Images/Showcase/Building.svg" alt="Building" />
      </a>
      <a data-fancybox data-caption="Image 01" class="masonry-grid-item masonry-grid-item-auto gradient-sunset p-3" href="Images/Showcase/Meeages.svg">
        <img src="Images/Showcase/Meeages.svg" alt="Messages" />
      </a>
      <a data-fancybox data-caption="A gentle man is here.." class="masonry-grid-item masonry-grid-item-auto gradient-jshine p-3" href="Images/Showcase/Success.svg">
        <img src="Images/Showcase/Success.svg" alt="Gentle Man" />
      </a>
      <a data-fancybox data-caption="They are working. Silent please..." class="masonry-grid-item masonry-grid-item-auto gradient-sunset p-3" href="Images/Showcase/Team.svg">
        <img src="Images/Showcase/Team.svg" alt="Team" />
      </a>
      <a data-fancybox data-caption="She is uploading something" class="masonry-grid-item masonry-grid-item-auto gradient-jshine p-3" href="Images/Showcase/Uploading.svg">
        <img src="Images/Showcase/Uploading.svg" alt="Uploading" />
      </a>
      <a data-fancybox data-caption="Image 01" class="masonry-grid-item masonry-grid-item-auto" href="Images/Showcase/showcase-01.png">
        <img src="Images/Showcase/showcase-01.png" alt="Image 01" />
      </a>
    </main>
  </section>
  <!--Section One : Projects Grid End-->

  <!--Section Two : Show More Projects Start-->
  <section class="portflio-shop-show-more my-5">
    <button class="primary-btn">Show More</button>
  </section>
  <!--Section Two : Show More Projects End-->

  <!--A Free Quote Section Start-->
  <section id="quote-banner">
    <div class="quote-content">
      <h1>Get A Free Quote</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Consequatur, amet.
      </p>
      <button class="primary-btn">Quote</button>
    </div>
  </section>
  <!--A Free Quote Section End-->
</main>
<!--Main Content End-->

<?php include "./include/footer.php" ?>