// faq

const faqItems = document.querySelectorAll(".faq-main_item");

faqItems.forEach((faqItem) => {
  faqItem.addEventListener("click", function () {
    this.classList.toggle("active");
  });
});

// Select all radio buttons with the class 'input_radio'
const radioButtons = document.querySelectorAll('.input_radio');

// Add a click event listener to each radio button
radioButtons.forEach((radioButton) => {
  radioButton.addEventListener('click', function () {
    // Find the closest .list__ parent element
    const listParent = this.closest('.list__');
    
    // Remove the 'orange' class from all .input__box.border__box elements within the .list__ parent
    listParent.querySelectorAll('.input__box.border__box').forEach((box) => {
      box.classList.remove('orange');
    });
    
    // Add the 'orange' class to the parent element of the clicked radio button
    this.closest('.input__box').classList.add('orange');
  });
});

function isReviewsSwiperPresent() {
  return document.querySelector('.reviews_swiper') !== null;
}

// Usage example
if (isReviewsSwiperPresent()) {

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