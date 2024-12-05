// progress
const circles = document.querySelectorAll(".progress-circle");

if (circles.length > 0) {
  circles.forEach((circle) => {
    const progress = circle.getAttribute("data-progress");
    if (progress !== null) {
      circle.style.background = `conic-gradient(var(--dark-green) 0% ${progress}%, var(--gray) ${progress}% 100%)`;
    }
  });
}

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

function isReviewsSwiperPresent() {
  return document.querySelector(".reviews_swiper") !== null;
}

// Usage example
if (isReviewsSwiperPresent()) {
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
}

// progress bar

// const progressSlider = document.getElementById("progress-slider");
// const progressSelectorValue = document.getElementById(
//   "progress-selector-value"
// );
// const progressBar = document.getElementById("progress-bar");
// if (progressSlider) {
//   progressSelectorValue.innerHTML = progressSlider.value + "%";
//   progressSlider.oninput = function () {
//     progressSelectorValue.innerHTML = this.value + "%";
//     //const left = (((value - minValue) / (valueMax - valueMin)) * ((totalInputWidth - thumbHalfWidth) - thumbHalfWidth)) + thumbHalfWidth;
//     const currentThumbPosition =
//       (this.value / 100) * (this.clientWidth - 22 - 22);
//     progressSelectorValue.style.left = currentThumbPosition + "px";
//     progressBar.style.width = currentThumbPosition + 8 + "px";
//   };
// }

// Select all buttons of type 'button' within the '.listening-german__list'
const germanListButtons = document.querySelectorAll(
  '.listening-german__list [type="button"]'
);

// Add a click event listener to each button
germanListButtons.forEach((button) => {
  button.addEventListener("click", function () {
    // Check if the screen width is less than or equal to 768px (mobile version)
    if (window.innerWidth <= 768) {
      // Select the '.dropdown-menu' element
      const mobMenu = document.querySelector(
        "section.deutsch-b1-horen .dropdown-menu"
      );

      // Toggle the 'open' class on the '.dropdown-menu' element
      mobMenu.classList.toggle("open");
    }
  });
});

// Select all radio buttons with the class 'input_radio'
const radioButtons = document.querySelectorAll(".input_radio");

// Add a click event listener to each radio button
radioButtons.forEach((radioButton) => {
  radioButton.addEventListener("click", function () {
    // Find the closest .list__ parent element
    const listParent = this.closest(".list__");

    // Remove the 'orange' class from all .input__box.border__box elements within the .list__ parent
    listParent.querySelectorAll(".input__box.border__box").forEach((box) => {
      box.classList.remove("orange");
    });

    // Add the 'orange' class to the parent element of the clicked radio button
    this.closest(".input__box").classList.add("orange");
  });
});

// Select all elements with the class 'input__box border__box'
const inputBoxes = document.querySelectorAll(".input__box.border__box");

// Add a click event listener to each input box
inputBoxes.forEach((inputBox) => {
  inputBox.addEventListener("click", function () {
    // Find the radio button within the clicked input box and check it
    const radioButton = this.querySelector(".input_radio");
    radioButton.checked = true;

    // Add the 'checked' attribute to the radio button
    radioButton.setAttribute("checked", "checked");

    // Trigger the click event on the radio button to apply the 'orange' class
    radioButton.dispatchEvent(new Event("click"));
  });
});

const progressSlider = document.getElementById("progress-slider");
const progressSelectorValue = document.getElementById(
  "progress-selector-value"
);
const progressBar = document.getElementById("progress-bar");

// Set initial value to 6%
progressSlider.value = 6;

function updateProgress() {
  progressSelectorValue.innerHTML = progressSlider.value + "%";
  const currentThumbPosition = (progressSlider.value / 100) * 100; // Calculate percentage
  progressSelectorValue.style.left = currentThumbPosition + "%";
  progressBar.style.width = progressSlider.value + "%";
}

// Initial update
updateProgress();

progressSlider.oninput = function () {
  updateProgress();
};

progressBar.parentElement.addEventListener("click", function (event) {
  const rect = progressBar.parentElement.getBoundingClientRect();
  const offsetX = event.clientX - rect.left;
  const newValue = (offsetX / rect.width) * 100;
  progressSlider.value = newValue;
  updateProgress();
});
