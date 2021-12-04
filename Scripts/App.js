//When the page is fully loaded This will execute
jQuery(document).ready(function () {
  //Preloader Animation when the dom is fully loaded

  $(window).on("load", function () {
    $(".preloader").addClass("preloader-end");
    gsap.to(".preloader-progress-bar", 4, { width: "100%" });
  });

  $(window).on("scroll", function () {
    if ($(window).scrollTop()) {
      $("header").addClass("sticky-navbar");
      $(".header-content").addClass("header-skew-fix");
      $(".dropdown").addClass("hide-popup");
    } else {
      $("header").removeClass("sticky-navbar");
      $(".header-content").removeClass("header-skew-fix");
      $(".dropdown").removeClass("hide-popup");
    }
  });

  //Scrolling back to the top

  $(window).scroll(function () {
    if ($(this).scrollTop()) {
      $("#backToTop").addClass("back-to-top-reveal");
    } else {
      $("#backToTop").removeClass("back-to-top-reveal");
    }
  });

  $("#backToTop").on("click", function () {
    window.scrollTo(0, 0);
  });

  //Adding Darkmode classes

  if (+window.localStorage.getItem("dark-theme")) {
    $("body").addClass("dark-theme");
    $("*").addClass("will-change-dark-theme-shadows");
    $(".will-change-dark-theme").addClass("dark-theme");
    $(".will-change-dark-theme-lighter").addClass("dark-theme-lighter");
    $(".will-change-dark-theme-parallax-img").addClass("parallax-inner-img-dark-theme");
    $("footer").addClass("dark-theme");
  }

  //Checking if the user has came before or not

  //Removing Darkmode classes
  else {
    $("body").removeClass("dark-theme");
    $("*").removeClass("will-change-dark-theme-shadows");
    $(".will-change-dark-theme").removeClass("dark-theme");
    $(".will-change-dark-theme-lighter").removeClass("dark-theme-lighter");
    $(".will-change-dark-theme-parallax-img").removeClass("parallax-inner-img-dark-theme");
    $("footer").removeClass("dark-theme");
  }

  //dark theme handling
  $(".theme-toggle").click(function () {
    //Checking last choice of the user
    if (+window.localStorage.getItem("dark-theme")) {
      window.localStorage.setItem("dark-theme", 0);
    } else {
      window.localStorage.setItem("dark-theme", 1);
    }
    //Toggling dark theme
    $("body").toggleClass("dark-theme");
    $("*").toggleClass("will-change-dark-theme-shadows");
    $(".will-change-dark-theme").toggleClass("dark-theme");
    $(".will-change-dark-theme-lighter").toggleClass("dark-theme-lighter");
    $(".will-change-dark-theme-parallax-img").toggleClass("parallax-inner-img-dark-theme");
    $("footer").toggleClass("dark-theme");
  });

  //Calculating the time to make a coming soon time
  var $comingSoonTag = $(".coming-soon-time");
  var $domTime = Date.parse($comingSoonTag.attr("data-date"));
  var $comingDate = new Date($domTime).getTime();
  var x = setInterval(function () {
    var $now = new Date().getTime();
    var $distance = $comingDate - $now;
    var $days = Math.floor($distance / (1000 * 60 * 60 * 24));
    //Counting the hours
    var $hours = Math.floor(($distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //Counting the Minutes
    var $minutes = Math.floor(($distance % (1000 * 60 * 60)) / (1000 * 60));
    //Counting the Seconds
    var $seconds = Math.floor(($distance % (1000 * 60)) / 1000);
    //Displaying the output on the Tag
    $comingSoonTag.text($days + "D " + $hours + "H " + $minutes + "M " + $seconds + "S ");
  });

  //Waypoints to increase the value of the statistics
  var $waypoint = $(".statistics").waypoint({
    handler: function () {
      $(".timer").countTo({});
    },
    offset: "75%",
  });

  //Blog Aside Animations
  var $blogAside = $("#aside-info").waypoint({
    handler: function () {
      if ($(window).width() >= 767.98) {
        console.log("Aside Has been called");
        $("#aside-info").css("position", "sticky");
      } else if ($(window).width() < 767.98) {
        $("#aside-info").css("position", "relative");
      }
    },
    offset: "0%",
  });

  //FAQ
  $(".collapse")
    .parent()
    .on("click", function () {
      $(this).children().toggleClass("show");
      $(this).children().children("i").toggleClass("question-btn-animation");
    });

  //Popups Animation

  //Check whether the User has Entered the website before or not

  if (+window.localStorage.getItem("popup-show")) {
    $(".popup-container").addClass("hide-popup");
  } else {
    $(".popup-container").remove("hide-popup");
  }

  //On click event to hide the Welcome Popup
  $(".popup-btn").on("click", function () {
    //Adding to local storage to save data and check next time if he has enetered or not
    if (+window.localStorage.getItem("popup-show")) {
      window.localStorage.setItem("popup-show", 0);
    } else {
      window.localStorage.setItem("popup-show", 1);
    }
    //Hiding the Popup
    $(this).closest(".popup-container").addClass("hide-popup");
    $(this).closest(".popup-container").removeClass("show-popup");
  });

  //Filtering
  if ($("#filterGroup").length) {
    var $grid = $("#filter-items").isotope({
      // options
    });
    $(".filter-button-group").on("click", "button", function () {
      var filterValue = $(this).attr("data-filter");
      $grid.isotope({ filter: filterValue });
    });
  }

  //Add class checked

  $(".filter-button-group").each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    //Seach for classes has check
    $buttonGroup.on("click", "button", function () {
      $(".filter-button-group").find(".is-checked").removeClass("is-checked");
      $(this).addClass("is-checked");
    });
  });

  //Initializing the parallax scene
  if ($("#scene").length) {
    var $scene = $("#scene");
    //Creating an instance of the parallax
    var sceneInstance = new Parallax(scene);
  }

  //Creating masonry loayout Masonry layout
  if ($("#masonry-grid").length) {
    $(".masonry-grid-showcase").masonry({
      // options
      itemSelector: ".masonry-grid-item",
      columnWidth: ".grid-sizer",
      percentPosition: true,
      originTop: true,
      originLeft: false,
    });
  }

  //Swiper Slider
  if ($(".swiper-container").length) {
    const swiper = new Swiper(".swiper-container", {
      speed: 400,
      spaceBetween: 100,
      loop: true,
      effect: "coverflow",
      navigation: {
        nextEl: ".swiper-btn-next-custom",
        prevEl: ".swiper-btn-prev-custom",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: false,
      keyboard: false,
    });
  }
});
