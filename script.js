// faq
const faqItems = document.querySelectorAll(".faq-main_item");

faqItems.forEach((faqItem) => {
  faqItem.addEventListener("click", function () {
    this.classList.toggle("active");
  });
});

  // home feedback slider
  const arrowReviewsLeft = document.querySelector(".arrow-left-reviews");
  const arrowReviewsRight = document.querySelector(".arrow-right-reviews");

var swiper = new Swiper(".reviews_swiper", {
  spaceBetween: 16,
  slidesPerView: 1,
  breakpoints: {
    768: {
      slidesPerView: 1,
      spaceBetween: 16,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 16,
    },
  },
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: arrowReviewsRight,
    prevEl: arrowReviewsLeft,
  },
});

}