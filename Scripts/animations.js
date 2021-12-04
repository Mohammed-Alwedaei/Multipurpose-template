//GSAP Configuration
gsap.config({ nullTargetWarn: false });

let slides = document.querySelectorAll(".slide");

//Slide Scene

let slideScene;

//Controller

let controller;

//Splitting the text
function animateSlides() {
  //Inistantiating the Controller

  let controller = new ScrollMagic.Controller();

  //For Each loop : Looping over each slide in the page

  slides.forEach((slide) => {
    //Query Selectors: Selecting the elements inside the Slide class

    const revealPara = slide.querySelectorAll("p");
    const revealSection = slide.querySelectorAll(".reveal-section");
    const revealHeading = slide.querySelectorAll("h1");
    const revealCardIcon = slide.querySelectorAll(".card-icon-animation");
    const revealImg = slide.querySelectorAll(".reveal-img");
    const revealText = slide.querySelectorAll(".reveal-text");
    const revealImgPink = slide.querySelectorAll(".reveal-img-pink");
    const revealTextPink = slide.querySelectorAll(".reveal-text-pink");
    const reavealLi = slide.querySelectorAll("li");

    slidetl = gsap.timeline({
      defaults: { duration: 0.9, ease: "power3.out" },
    });
    slidetl.fromTo(
      revealSection,
      { y: "0", opacity: 1 },
      { y: "100%", opacity: 0 },
      "-=0.50"
    );
    slidetl.fromTo(
      revealImg,
      { y: "0", opacity: 1 },
      { y: "100%", opacity: 0, stagger: 0.1 }
    );
    slidetl.fromTo(
      revealText,
      { y: "0", opacity: 1 },
      { y: "100%", opacity: 0 }
    );
    slidetl.fromTo(
      revealImgPink,
      { y: "0", opacity: 1 },
      { y: "100%", opacity: 0 },
      "-=1"
    );
    slidetl.fromTo(revealCardIcon, { opacity: 0 }, { opacity: 1 }, "-=1");
    slidetl.fromTo(
      revealHeading,
      { y: "10%", opacity: 0 },
      { y: "0%", opacity: 1 },
      "-=1.75"
    );
    slidetl.fromTo(
      revealTextPink,
      { y: "0", opacity: 1 },
      { y: "100%", opacity: 0 },
      "-=1.50"
    );
    slidetl.fromTo(
      revealPara,
      { y: "10%", opacity: 0 },
      { y: "0%", opacity: 1 },
      "-=1.50"
    );
    slidetl.fromTo(
      reavealLi,
      { y: "10%", opacity: 0 },
      { y: "0", opacity: 1, stagger: 0.5 },
      "-=1.75"
    );
    slideScene = new ScrollMagic.Scene({
      triggerElement: slide,
      triggerHook: 0.6,
      reverse: false,
    })
      .setTween(slidetl)

      //For Debug Purposes only

      /*.addIndicators({
        colorStart: "white",
        colorTrigger: "white",
        name: "slide",
      })*/

      //For Debug Purposes only

      .addTo(controller);
  });
}

animateSlides();

//Selcting The burger button

const burger = document.querySelector(".burger");
const header = document.querySelector("header");

//Line inside the burger

const line1 = document.querySelector(".line1");
const line2 = document.querySelector(".line2");
const line3 = document.querySelector(".line3");

function toggleNav(e) {
  let item = e.target;
  if (!item.classList.contains("active")) {
    //Ading Active Class

    item.classList.add("active");

    //Setting the opacity of back to top button to 0

    gsap.to("#backToTop", 1, { opacity: "0" });

    //Animating burger menu

    gsap.to(burger, 1, { rotate: "180deg" });

    //Animating the line in the burger menu

    line1.classList.add("show");
    line2.classList.add("show");
    line3.classList.add("show");

    if (+window.localStorage.getItem("dark-theme")) {
      header.classList.remove("will-change-dark-theme-shadows");
    }

    //Removing Darkmode classes
    else {
      header.classList.add("will-change-dark-theme-shadows");
    }

    // gsap.to(".fa-shopping-cart", 1, { color: "white" });
    // gsap.to("#logo-text", 1, { color: "white" });
    // gsap.to(".st0", 1, { fill: "white" });
    // gsap.to(".st1", 1, { fill: "white" });

    //Animating navigation and navigation elements

    gsap.to(".navigation", 1, { clipPath: "circle(2500px at 100% -50%)" });
    gsap.to(".navigation-effect-1", 0.7, {
      clipPath: "circle(2500px at 0% -20%)",
    });
    gsap.to(".navigation-effect-2", 0.7, {
      clipPath: "circle(2500px at 100% 110%)",
    });

    //navigation links animation

    gsap.to(".nav-links", 1, { x: "0%", stagger: 0.5 });

    //Contact section animation

    gsap.to(".nav-contact", 2, { x: "0%" });

    //Hiding the scroll bars

    document.body.classList.add("nav-hide");
  }

  //Clearing out the animation
  else {
    //Removing active class

    item.classList.remove("active");

    //Animating out the navigation links

    gsap.to(".nav-links", 1, { x: "-100%", stagger: 0.25 });

    //Returning the burger button to its default

    gsap.to(burger, 1, { rotate: "-180deg" });

    //Returning back the default colours

    // gsap.to(".fa-shopping-cart", 1, { color: "#725cff" });
    // gsap.to("#logo-text", 1, { color: "#725cff", delay: 0.75 });
    // gsap.to(".st0", 1, { fill: "#b96eff" });
    // gsap.to(".st1", 1, { fill: "#725cff" });

    //Revealing back navigation menu and navigation effects to the normal state

    gsap.to(".navigation", 1, { clipPath: "circle(50px at 100% -50%)" });
    gsap.to(".navigation-effect-1", 0.7, {
      clipPath: "circle(50px at 0% -20%)",
    });
    gsap.to(".navigation-effect-2", 0.7, {
      clipPath: "circle(50px at 100% 110%)",
    });
    //hiding navigation contact section

    gsap.to(".nav-contact", 2, { x: "100%" });

    //Returning burger lines to the default state

    line1.classList.remove("show");
    line2.classList.remove("show");
    line3.classList.remove("show");

    if (+window.localStorage.getItem("dark-theme")) {
      header.classList.add("will-change-dark-theme-shadows");
    }

    //Removing Darkmode classes
    else {
      header.classList.remove("will-change-dark-theme-shadows");
    }

    //setting the opacity back to 1

    gsap.to("#backToTop", 1, { opacity: "1" });

    //Showing the scroll bars

    document.body.classList.remove("nav-hide");
  }
}

//Cursor Animation
//Selecting the cursor

const cursor = document.querySelector("#cursor");

//Slecting Cursor Text

const cursorText = document.querySelector("#cursor-text");

//Attaching the custom Cursor to the mouse

function cursorAnimation(e) {
  cursor.style.top = e.pageY - scrollY + "px";
  cursor.style.left = e.pageX + "px";
}

//Cursor Animation
function cursorTextAnimation(e) {
  let item = e.target;
  //Logo Cursor Animation

  if (item.id === "logo-link" || item.id === "logo-text") {
    cursor.classList.add("cursor-active");
    cursorText.innerText = "Home";
    cursorText.style.transform = "translate(30%, 100%)";
  }

  //Burger Menu
  else if (
    item.classList.contains("burger") ||
    item.classList.contains("burger-line")
  ) {
    cursorText.style.transform = "translate(80%, 100%)";
    cursor.classList.add("cursor-active");
    cursorText.innerText = "nav";
  }

  //Shopping Cart
  else if (item.classList.contains("fa-shopping-cart")) {
    cursorText.style.transform = "translate(55%, 100%)";
    cursor.classList.add("cursor-active");
    cursorText.innerText = "Cart";
  }

  //Shopping Cart
  else if (item.classList.contains("purchase-interaction-btn")) {
    cursorText.style.transform = "translate(75%, 100%)";
    cursor.classList.add("cursor-active");
    cursorText.innerText = "Buy";
  }

  //Change The Theme
  else if (item.classList.contains("theme-toggle")) {
    cursorText.style.transform = "translate(20%, 95%)";
    cursor.classList.add("cursor-active");
    cursorText.innerText = "Theme";
  }

  /*A free space to add More Classes Start*/

  //Replace Me Please...

  /*A free space to add More Classes End*/

  //Clearing out the animation
  else {
    cursor.classList.remove("cursor-active");
    cursorText.innerText = "";
  }
}

//Event Listeners
document.addEventListener("mousemove", cursorAnimation);

window.addEventListener("mouseover", cursorTextAnimation);

burger.addEventListener("click", toggleNav);
