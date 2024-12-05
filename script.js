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
const germanListButtons = document.querySelectorAll(
  '.listening-german__list [type="button"]'
);

germanListButtons.forEach((button) => {
  button.addEventListener("click", function () {
    if (window.innerWidth <= 1199.98) {
      const mobMenu = document.querySelector("section .dropdown-menu");

      mobMenu.classList.toggle("open");

      this.classList.toggle("click");
    }
  });
});

const radioButtons = document.querySelectorAll(".input_radio");

radioButtons.forEach((radioButton) => {
  radioButton.addEventListener("click", function () {
    const listParent = this.closest(".list__");

    listParent.querySelectorAll(".input__box.border__box").forEach((box) => {
      box.classList.remove("orange");
    });

    this.closest(".input__box").classList.add("orange");
  });
});

const inputBoxes = document.querySelectorAll(".input__box.border__box");

inputBoxes.forEach((inputBox) => {
  inputBox.addEventListener("click", function () {
    const radioButton = this.querySelector(".input_radio");
    radioButton.checked = true;

    radioButton.setAttribute("checked", "checked");

    radioButton.dispatchEvent(new Event("click"));
  });
});

const progressSlider = document.getElementById("progress-slider");
const progressSelectorValue = document.getElementById(
  "progress-selector-value"
);
const progressBar = document.getElementById("progress-bar");

progressSlider.value = 6;

function updateProgress() {
  progressSelectorValue.innerHTML = progressSlider.value + "%";
  const currentThumbPosition = (progressSlider.value / 100) * 100; // Calculate percentage
  progressSelectorValue.style.left = currentThumbPosition + "%";
  progressBar.style.width = progressSlider.value + "%";
}

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

// schreiben tabs

const writingTabs = document.querySelectorAll(".writing-tabs_item");
const infoBlock = document.querySelector(".writing-main_info");
const insertBlock = document.querySelector(".writing-main_insert");

writingTabs.forEach((writingTab) => {
  writingTab.addEventListener("click", function () {
    // Видаляємо клас active з усіх табів
    writingTabs.forEach((tab) => tab.classList.remove("active"));

    // Додаємо клас active до поточного таба
    this.classList.add("active");

    // Відображаємо відповідний блок
    const target = this.getAttribute("data-target");
    if (target === "info") {
      infoBlock.style.display = "flex";
      insertBlock.style.display = "none";
    } else if (target === "service") {
      insertBlock.style.display = "flex";
      infoBlock.style.display = "none";
    }
  });
});
