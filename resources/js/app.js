document.addEventListener("DOMContentLoaded", function () {
  var header = document.querySelector("header");

  // Add 'header-transparent' class initially
  header.classList.add("header-transparent");

  // Check scroll position on scroll event
  window.addEventListener("scroll", function () {
    // When the scroll position is at the top, make the header transparent
    if (window.scrollY === 0) {
      header.classList.add("header-transparent");
    } else {
      // Otherwise, remove the transparent class to make the header sticky
      header.classList.remove("header-transparent");
    }
  });
});
