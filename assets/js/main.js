document.addEventListener("DOMContentLoaded", function () {
// sticky header related funtionality
stickystickyHeader();

// dropdown functionalities
dropdownController();

// tab related funtioanlities
tabsController();

// mobile menu related funtionality
mobileMenu();

// accorfion related funtionality
accordions();

// project filter related funtionality
filter();

//hover effect parallex
VanillaTilt.init(document.querySelectorAll(".tilt"), {
  perspective: 2000,
});

// counter up
const counters = document.querySelectorAll(".counter");
counters.forEach((counter) => {
  new countUp(counter);
});
// quick view modal
modalProductDetails();

// video modal
videoModal();

// theme mode controller
theme();

//preloader
preloader();

// scroll up
scrollUp();

// swiper slider
slider();
// AOS Scroll Animation

AOS.init({
  offset:  0,
  duration: 1000,
  once: true,
  easing: "ease",
});

// images popup
popup();

// count down
countDown();

// charts
lineChart();
pieChart();

// click count
count();

// // smooth scroll
smoothScroll();


})

function uploadImage(event) {
  const file = event.target.files[0]; // Get the selected file
  const preview = document.getElementById("imagePreview");

  if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
          preview.src = e.target.result; // Set the image source to the file's data URL
          preview.style.display = "block"; // Display the image
      };
      reader.readAsDataURL(file); // Read the file as a data URL
  } else {
      preview.src = "#";
      preview.style.display = "none";
  }
}


