<?php include "./include/header.php" ?>

<!--Main Content Start-->
<main id="projects">
  <!--Hero Section Start-->
  <section class="hero-bg-vh-100">
    <!--Hero Content Start-->
    <div class="hero-content">
      <div class="hero-text">
        <h1>Project Name</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
          quos ab placeat eveniet. Eaque dolor harum in! Optio, quos
          excepturi!
        </p>
      </div>
      <!--Parallax Scene Start-->
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
    </div>
    <!--Hero Content End-->
  </section>
  <!--Hero Section End-->

  <main class="container-sm">
    <!--Section One : Project Breifing Start-->
    <section>
      <div class="slide">
        <h1 class="primary-color w-100 text-center biggest-font my-5">
          Case Studies
        </h1>
      </div>
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
          <div id="statistics" class="statistics text-left waypoint w-100">
            <h4>
              <span class="timer" data-from="0" data-to="47">20</span>
              <span>%</span>
              <br />
              <span class="small-grey-text">Income increase</span>
            </h4>
            <h4>
              <span class="timer" data-from="0" data-to="90">0</span>
              <span>%</span>
              <br />
              <span class="small-grey-text">Customer Satisfication</span>
            </h4>
          </div>
        </div>
      </div>
    </section>
    <!--Section One : Project Breifing End-->

    <!--Section Two : Workflow Steps Start-->
    <section>
      <div class="slide">
        <h1 class="biggest-font text-center w-100 secondary-color my-5">
          The Workflow...
        </h1>
      </div>
      <div class="step-container slide">
        <div class="step-img">
          <div class="reveal-img will-change-dark-theme"></div>
          <img class="w-75" src="Images/Ideas.svg" alt="Ideas" data-tilt="1" />
        </div>
        <div class="step-desc">
          <div class="reveal-text will-change-dark-theme"></div>
          <h1>
            It started <br />
            with an <br />idea in <br />the <br />
            mind
          </h1>
          <p>
            So We refiend it over and over <br />
            until I was Happy with it.
          </p>
        </div>
      </div>
      <div class="step-container slide">
        <div class="step-desc text-right">
          <div class="reveal-text will-change-dark-theme"></div>
          <h1>
            Then We <br />
            started <br />
            Implementing <br />
            the idea
          </h1>
          <p>
            It was kinda hard but we managed <br />
            to break our way to end it with a succes
          </p>
        </div>
        <div class="step-img">
          <div class="reveal-img will-change-dark-theme"></div>
          <img class="w-75 ml-auto d-block" src="Images/developer production.svg" alt="Production" data-tilt="1" />
        </div>
      </div>
      <div class="step-container slide">
        <div class="step-img">
          <div class="reveal-img will-change-dark-theme"></div>
          <img class="w-75" src="Images/Presentation.svg" alt="Presentation" data-tilt="1" />
        </div>
        <div class="step-desc">
          <div class="reveal-text will-change-dark-theme"></div>
          <h1>
            Finally we <br />
            make a <br />
            full <br />
            presentation
          </h1>
          <p>And then we published the project to the public</p>
        </div>
      </div>
      <div class="slide my-5">
        <button class="morning-btn d-block mx-auto">View Project</button>
      </div>
    </section>
    <!--Section Two : Workflow Steps Start-->
  </main>
</main>
<!--Main Content End-->

<?php include "./include/footer.php" ?>