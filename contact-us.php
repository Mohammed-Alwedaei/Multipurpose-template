<?php include "./include/header.php" ?>

<!--Main Content Start-->
<main id="contact">
  <!--Hero Content Start-->
  <section class="hero-bg-vh-50">
    <div class="hero-content">
      <div class="hero-text-100">
        <h1>Feel free to Contact Us</h1>
      </div>
    </div>
  </section>
  <!--Hero Content End-->

  <!--Section One : Form Content Start-->
  <section class="container-sm">
    <div class="section-desc slide mt-3">
      <h1 class="primary-heading">Send us a message</h1>
      <h1 class="secondary-heading">We are always here..</h1>
    </div>
    <!--Form Start-->

    <!--Don't change anything else unless you're experienced-->
    <div class="contact-form">
      <form id="contactForm" class="contact-page-form slide will-change-dark-theme-lighter" method="POST" action="form-submit.php">
        <div class="reveal-section will-change-dark-theme"></div>
        <div class="name-field">
          <label for="name-field">First Name</label>
          <input name="name" id="name" type="text" placeholder="First Name" class="will-change-dark-theme-lighter" />
        </div>
        <div class="email-field">
          <label for="email-field">E-mail</label>
          <input name="email" id="email-field" type="text" placeholder="mercy-tracer@domain.com" class="will-change-dark-theme-lighter" />
        </div>
        <div class="select-field">
          <label for="user-select">I want to</label>
          <select name="subject" id="userSelecttion" class="will-change-dark-theme-lighter">
            <option value="Report">report</option>
            <option value="Collaborate">Collaborate</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="textarea-field">
          <label for="user-message">Message</label>
          <textarea name="message" id="userMessageText" placeholder="Please type your Message..." class="will-change-dark-theme-lighter"></textarea>
        </div>
        <div class="form-buttons">
          <button type="submit" name="submit" id="formSubmitButton" class="primary-btn">
            Send
          </button>
          <button type="reset" class="secondary-btn">Clear</button>
        </div>
      </form>
      <!--Php Logic Start-->
      <?php

      $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if (strpos($fullUrl, "form=empty") == true) {
        echo "<div class='alert-danger'>You Must Fill the form!</div>";
      } else if (strpos($fullUrl, "form=char") == true) {
        echo "<div class='alert-danger'>Please Enter A valid Characters</div>";
      } else if (strpos($fullUrl, "form=email") == true) {
        echo "<div class='alert-danger'>Please Enter A valid E-mail</div>";
      }
      ?>
      <!--Form End-->

      <div class="form-sessions slide">
        <div class="reveal-section will-change-dark-theme"></div>
        <div class="form-phone will-change-dark-theme-lighter">
          <div class="img-container">
            <div class="reveal-img will-change-dark-theme-lighter"></div>
            <img src="Images/ICONS/support.svg" alt="Support" />
          </div>
          <h1 class="primary-heading">Phone us</h1>
          <p>
            We can help you via our phone service without any delays or
            loss connections
          </p>
        </div>
        <div class="form-email will-change-dark-theme-lighter">
          <div class="img-container">
            <div class="reveal-img will-change-dark-theme-lighter"></div>
            <img src="Images/ICONS/mail.svg" alt="Letter Paper" />
          </div>
          <h1 class="primary-heading">Mail Us</h1>
          <p>
            We can help you via our Mail service without any delays or
            loss connections
          </p>
        </div>
      </div>
    </div>
  </section>
  <!--Section One : Form Content End-->

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