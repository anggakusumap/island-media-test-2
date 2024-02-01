import sal from "sal.js";

document.addEventListener("DOMContentLoaded", function () {
  sal();
  var header = document.querySelector("header");
  header.classList.add("header-transparent");

  window.addEventListener("scroll", function () {
    if (window.scrollY === 0) {
      header.classList.add("header-transparent");
    } else {
      header.classList.remove("header-transparent");
    }
  });
});
