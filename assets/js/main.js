document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1280: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });

  var btn_menu = document.querySelector("#btn_menu");
  var btn_close_menu = document.querySelector("#btn_close_menu");
  var header_navigation = document.querySelector(".header_navigation");

  btn_menu.addEventListener("click", function () {
    header_navigation.style.left = "0";
    document.querySelector("body").style.overflow = "hidden";
    btn_close_menu.style.display = "block";
  });

  btn_close_menu.addEventListener("click", function () {
    header_navigation.style.left = "-100vw";
    document.querySelector("body").style.overflow = "";
    btn_close_menu.style.display = "none";
  });

  let sticky = document.querySelector(".header_bottom").offsetTop;
  window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    if (window.scrollY > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  });
});
