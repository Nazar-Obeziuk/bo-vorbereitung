

// progress
const circles = document.querySelectorAll('.progress-circle');

if (circles.length > 0) {
  circles.forEach(circle => {
    const progress = circle.getAttribute('data-progress');
    if (progress !== null) {
      circle.style.background = `conic-gradient(var(--dark-green) 0% ${progress}%, var(--gray) ${progress}% 100%)`;
    }
  });
}



// faq
const faqItems = document.querySelectorAll(".faq-main_item");

if (faqItems) {
  faqItems.forEach((faqItem) => {
    faqItem.addEventListener("click", function () {
      this.classList.toggle("active");
    });
  });
}

// home feedback slider
const arrowReviewsLeft = document.querySelector(".arrow-left-reviews");
const arrowReviewsRight = document.querySelector(".arrow-right-reviews");

if (arrowReviewsLeft || arrowReviewsRight) {
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


// progress bar

const progressSlider = document.getElementById("progress-slider");
const progressSelectorValue = document.getElementById(
  "progress-selector-value"
);
const progressBar = document.getElementById("progress-bar");
if (progressSlider) {
  progressSelectorValue.innerHTML = progressSlider.value + "%";
  progressSlider.oninput = function () {
    progressSelectorValue.innerHTML = this.value + "%";
    //const left = (((value - minValue) / (valueMax - valueMin)) * ((totalInputWidth - thumbHalfWidth) - thumbHalfWidth)) + thumbHalfWidth;
    const currentThumbPosition =
      (this.value / 100) * (this.clientWidth - 22 - 22);
    progressSelectorValue.style.left = currentThumbPosition + "px";
    progressBar.style.width = currentThumbPosition + 8 + "px";
  };
}
