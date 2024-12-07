// header

const headerLevelDropdownMenuItems = document.querySelectorAll(
  ".header-second-nav-dropdown-menu .dropdown-menu-item"
);
headerLevelDropdownMenuItems.forEach(function (item, index, arr) {
  item.addEventListener("click", function () {
    arr.forEach(function (i) {
      if (i.classList.contains("selected")) {
        i.classList.remove("selected");
      }
    });
    this.classList.add("selected");
  });
});

function toggleMenu(
  mobileBtn,
  mobileMenu,
  additionalHeight = 0,
  isInnerDropdownMenu = false,
  innerDropdownMenuHeight = 0
) {
  function setMobileMenuHeight(
    mobileMenuElement,
    additionalHeightValue,
    innerDropdownMenuHeightValue
  ) {
    const mobileMenuHeight = [...mobileMenuElement.children].reduce(function (
      total,
      item
    ) {
      return total + item.scrollHeight;
    },
    0);
    mobileMenuElement.setAttribute(
      "style",
      "height: " +
        (mobileMenuHeight +
          additionalHeightValue +
          innerDropdownMenuHeightValue) +
        "px;"
    );
  }
  let isInnerDropdownButtonActive = false;
  if (isInnerDropdownMenu) {
    if (!mobileBtn.classList.contains("open")) {
      isInnerDropdownButtonActive = false;
    } else {
      isInnerDropdownButtonActive = true;
    }
  }
  if (!mobileBtn.classList.contains("open")) {
    setMobileMenuHeight(mobileMenu, additionalHeight, innerDropdownMenuHeight);
    mobileBtn.classList.add("open");
  } else {
    if (isInnerDropdownButtonActive) {
      setMobileMenuHeight(
        mobileMenu,
        additionalHeight,
        innerDropdownMenuHeight
      );
      mobileBtn.classList.remove("open");
    } else {
      mobileMenu.removeAttribute("style");
      mobileBtn.classList.remove("open");
    }
  }
}

const header = document.querySelector("header");
const burgerBtn = document.getElementById("burger-menu");
const headerFirstSection = document.getElementById("header-first");
const headerSecondSectionContent = document.getElementById(
  "header-second-content"
);

const headerFirstSectionPaddingTopAndBottom = 18;
const headerSecondSectionContentPaddingTopAndBottom = 20 + 36;
const headerSecondSectionContentGap = 20;

function toggleHeaderMenu(
  button,
  isInnerDropdownMenu = false,
  innerDropdownMenuHeight = 0
) {
  let innerFirstSectionDropdownMenuHeight = 0;
  let innerSecondSectionContentDropdownMenuHeight = 0;
  if (
    button.classList.contains("language-content") ||
    button.classList.contains("header-first-dropdown-item-1-content")
  ) {
    innerFirstSectionDropdownMenuHeight = innerDropdownMenuHeight;
  } else if (button.classList.contains("header-second-nav-item")) {
    innerSecondSectionContentDropdownMenuHeight = innerDropdownMenuHeight;
  }
  toggleMenu(
    button,
    headerSecondSectionContent,
    headerSecondSectionContentPaddingTopAndBottom +
      headerSecondSectionContentGap,
    isInnerDropdownMenu,
    innerSecondSectionContentDropdownMenuHeight
  );
  button.classList.toggle("open");
  if (headerSecondSectionContent.getAttribute("style")) {
    headerSecondSectionContent.style.padding = "20px 16px 36px";
    document.body.style.overflow = "hidden";
    document.body.style.maxHeight = "100vh";
    header.classList.add("open");
  } else {
    document.body.removeAttribute("style");
    header.classList.remove("open");
  }
  toggleMenu(
    button,
    headerFirstSection,
    headerFirstSectionPaddingTopAndBottom,
    isInnerDropdownMenu,
    innerFirstSectionDropdownMenuHeight
  );
  if (headerFirstSection.getAttribute("style")) {
    headerFirstSection.style.padding = "9px 0px";
    headerFirstSection.style.overflow = "visible";
  }
}

burgerBtn.addEventListener("click", function () {
  if (window.innerWidth < 1199.99) {
    toggleHeaderMenu(this);
  }
});

const headerFirstDropdownItem1Content = document.querySelectorAll(
  ".header-first-dropdown-item-1-content"
);
const headerLanguageContent = document.querySelectorAll(".language-content");
const headerSecondNavItem = document.querySelectorAll(
  ".header-second-nav-item"
);

headerFirstDropdownItem1Content.forEach(function (button) {
  button.addEventListener("click", function () {
    if (window.innerWidth < 1199.99) {
      let innerDropdownMenuHeight = 0;
      if (this.parentElement.children[1].getAttribute("style")) {
        this.parentElement.children[1].removeAttribute("style");
        innerDropdownMenuHeight -= this.parentElement.children[1].scrollHeight;
      } else {
        this.parentElement.children[1].style.height = `${this.parentElement.children[1].scrollHeight}px`;
        innerDropdownMenuHeight = this.parentElement.children[1].scrollHeight;
      }
      toggleHeaderMenu(this, true, innerDropdownMenuHeight);
    }
  });
});

headerLanguageContent.forEach(function (button) {
  button.addEventListener("click", function () {
    if (window.innerWidth < 1199.99) {
      let innerDropdownMenuHeight = 0;
      if (this.parentElement.children[1].getAttribute("style")) {
        this.parentElement.children[1].removeAttribute("style");
        innerDropdownMenuHeight -= this.parentElement.children[1].scrollHeight;
      } else {
        this.parentElement.children[1].style.height = `${this.parentElement.children[1].scrollHeight}px`;
        innerDropdownMenuHeight = this.parentElement.children[1].scrollHeight;
      }
      toggleHeaderMenu(this, true, innerDropdownMenuHeight);
    }
  });
});

headerSecondNavItem.forEach(function (button) {
  button.addEventListener("click", function (e) {
    if (window.innerWidth < 1199.99) {
      let innerDropdownMenuHeight = 0;
      if (this.parentElement.children[1].getAttribute("style")) {
        this.parentElement.children[1].removeAttribute("style");
        innerDropdownMenuHeight -= this.parentElement.children[1].scrollHeight;
      } else {
        this.parentElement.children[1].style.height = `${this.parentElement.children[1].scrollHeight}px`;
        innerDropdownMenuHeight = this.parentElement.children[1].scrollHeight;
      }
      toggleHeaderMenu(this, true, innerDropdownMenuHeight);
    }
  });
});

function windowResize() {
  function removeClassOpen(element) {
    if (element.classList.contains("open")) {
      element.classList.remove("open");
    }
  }

  function removeAttributeStyle(element) {
    if (element.getAttribute("style")) {
      element.removeAttribute("style");
    }
  }
  if (window.innerWidth > 1199.98) {
    removeClassOpen(burgerBtn);
    removeAttributeStyle(headerFirstSection);
    removeAttributeStyle(headerSecondSectionContent);
    headerLanguageContent.forEach((button) => {
      removeClassOpen(button);
      removeAttributeStyle(button.parentElement.children[1]);
    });
    headerSecondNavItem.forEach((button) => {
      removeClassOpen(button);
      removeAttributeStyle(button.parentElement.children[1]);
    });
  }
}

window.addEventListener("resize", windowResize);
window.addEventListener("orientationchange", windowResize);

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

const schprechenButtons = document.querySelectorAll(
  '.schprechen-menu [type="button"]'
);

schprechenButtons.forEach((button) => {
  button.addEventListener("click", function () {
    if (window.innerWidth <= 1199.98) {
      const mobMenu = document.querySelector("section .schprechen-navigation");

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




document.addEventListener('DOMContentLoaded', () => {
  const progressSlider = document.getElementById("progress-slider");
  const progressSelectorValue = document.getElementById("progress-selector-value");
  const progressBar = document.getElementById("progress-bar");

  if (progressSlider && progressSelectorValue && progressBar) {
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
  }
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

document.addEventListener("DOMContentLoaded", () => {
  // Track currently playing audio
  let currentlyPlaying = null;

  // Add CSS for components
  const style = document.createElement("style");
  style.textContent = `
   
    `;
  document.head.appendChild(style);

  document.querySelectorAll(".audio-player").forEach((player, index) => {
    // DOM elements
    const audio = document.querySelectorAll("audio")[index];
    const playButton = player.querySelector(".play-btn");
    const muteButton = player.querySelector(".mute-btn");
    const menuButton = player.querySelector(".menu-btn");
    const menu = player.querySelector(".menu");
    const speedButton = player.querySelector(".speed-options-btn");
    const speedOptions = player.querySelector(".speed-options");
    const progressBar = player.querySelector(".progress-bar_a");
    const progressBarContainer = player.querySelector(
      ".progress-bar-container_a"
    );
    const currentTimeEl = player.querySelector(".current-time");
    const durationEl = player.querySelector(".duration");

    // State
    let isMuted = false;
    let isDragging = false;
    let lastProgress = 0;
    let lastUpdateTime = 0;
    const UPDATE_INTERVAL = 50;

    // Update play button display
    function updatePlayButton(button, isPlaying) {
      if (button) {
        button.innerHTML = isPlaying
          ? '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 5.5V18.5C15 18.9647 15 19.197 15.0384 19.3902C15.1962 20.1836 15.816 20.8041 16.6094 20.9619C16.8026 21.0003 17.0349 21.0003 17.4996 21.0003C17.9642 21.0003 18.1974 21.0003 18.3906 20.9619C19.184 20.8041 19.8041 20.1836 19.9619 19.3902C20 19.1987 20 18.9687 20 18.5122V5.48777C20 5.03125 20 4.80087 19.9619 4.60938C19.8041 3.81599 19.1836 3.19624 18.3902 3.03843C18.197 3 17.9647 3 17.5 3C17.0353 3 16.8026 3 16.6094 3.03843C15.816 3.19624 15.1962 3.81599 15.0384 4.60938C15 4.80257 15 5.03534 15 5.5Z" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 5.5V18.5C4 18.9647 4 19.197 4.03843 19.3902C4.19624 20.1836 4.81599 20.8041 5.60938 20.9619C5.80257 21.0003 6.0349 21.0003 6.49956 21.0003C6.96421 21.0003 7.19743 21.0003 7.39062 20.9619C8.18401 20.8041 8.8041 20.1836 8.96191 19.3902C9 19.1987 9 18.9687 9 18.5122V5.48777C9 5.03125 9 4.80087 8.96191 4.60938C8.8041 3.81599 8.18356 3.19624 7.39018 3.03843C7.19698 3 6.96465 3 6.5 3C6.03535 3 5.80257 3 5.60938 3.03843C4.81599 3.19624 4.19624 3.81599 4.03843 4.60938C4 4.80257 4 5.03534 4 5.5Z" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
          : '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 17.3336V6.66698C5 5.78742 5 5.34715 5.18509 5.08691C5.34664 4.85977 5.59564 4.71064 5.87207 4.67499C6.18868 4.63415 6.57701 4.84126 7.35254 5.25487L17.3525 10.5882L17.3562 10.5898C18.2132 11.0469 18.642 11.2756 18.7826 11.5803C18.9053 11.8462 18.9053 12.1531 18.7826 12.4189C18.6418 12.7241 18.212 12.9537 17.3525 13.4121L7.35254 18.7454C6.57645 19.1593 6.1888 19.3657 5.87207 19.3248C5.59564 19.2891 5.34664 19.1401 5.18509 18.9129C5 18.6527 5 18.2132 5 17.3336Z" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
      }
    }

    // Format time utility
    function formatTime(seconds) {
      const minutes = Math.floor(seconds / 60);
      const secs = Math.floor(seconds % 60);
      return `${minutes}:${secs < 10 ? "0" : ""}${secs}`;
    }

    // Update progress from mouse position
    function updateProgressFromMouse(e) {
      const rect = progressBarContainer.getBoundingClientRect();
      const x = Math.max(0, Math.min(e.clientX - rect.left, rect.width));
      const percentage = (x / rect.width) * 100;

      progressBar.style.width = `${percentage}%`;

      if (audio.duration) {
        audio.currentTime = (percentage / 100) * audio.duration;
        if (currentTimeEl) {
          currentTimeEl.textContent = formatTime(audio.currentTime);
        }
      }
    }

    // Update progress bar and time display
    function updateProgress() {
      const now = Date.now();
      if (now - lastUpdateTime < UPDATE_INTERVAL) return;

      const progress = (audio.currentTime / audio.duration) * 100;
      if (progressBar && !isDragging) {
        progressBar.style.width = `${progress}%`;
        lastProgress = progress;
      }
      if (currentTimeEl) {
        currentTimeEl.textContent = formatTime(audio.currentTime);
      }
      lastUpdateTime = now;
    }

    // Event Listeners
    audio.addEventListener("play", () => {
      if (currentlyPlaying && currentlyPlaying !== audio) {
        currentlyPlaying.pause();
        const previousPlayer = currentlyPlaying.closest(".audio-player");
        const previousPlayButton = previousPlayer?.querySelector(".play-btn");
        updatePlayButton(previousPlayButton, false);
      }
      currentlyPlaying = audio;
      updatePlayButton(playButton, true);
    });

    audio.addEventListener("pause", () => {
      updatePlayButton(playButton, false);
    });

    if (playButton) {
      playButton.addEventListener("click", () => {
        if (audio.paused) {
          audio.play();
        } else {
          audio.pause();
        }
      });
    }

    if (muteButton) {
      muteButton.addEventListener("click", () => {
        isMuted = !isMuted;
        audio.muted = isMuted;
        muteButton.innerHTML = isMuted
          ? '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 9.18725H8.8125C8.0563 9.18725 7.6782 9.18725 7.37264 9.28819C6.77131 9.48684 6.2996 9.95855 6.10094 10.5599C6 10.8654 6 11.2435 6 11.9997C6 12.7559 6 13.134 6.10094 13.4396C6.2996 14.0409 6.77131 14.5127 7.37264 14.7113C7.6782 14.8122 8.0563 14.8122 8.8125 14.8122H10.2358C10.5165 14.8122 10.6569 14.8122 10.7866 14.8478C10.9015 14.8792 11.0098 14.931 11.1065 15.0006C11.2157 15.0791 11.3039 15.1883 11.4803 15.4066L13.1555 17.4797C14.0288 18.5604 14.4655 19.1008 14.848 19.1596C15.1792 19.2105 15.5138 19.0922 15.7394 18.8444C16 18.5583 16 17.8635 16 16.4741V14.9997M16 10.4997V6.97735C16 6.04105 16 5.57291 15.8776 5.3488C15.6329 4.90109 15.0905 4.70931 14.6188 4.90379C14.3827 5.00113 14.0885 5.36526 13.5 6.0935L12.875 6.86693M6 4.99975L20 18.9997" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
          : '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.82 4.68652C19.8191 5.61821 20.6167 6.74472 21.1636 7.99657C21.7105 9.24842 21.9952 10.5991 21.9999 11.9652C22.0047 13.3313 21.7295 14.6838 21.1914 15.9395C20.6532 17.1951 19.8635 18.3272 18.8709 19.2658M16.092 7.61194C16.6915 8.17095 17.17 8.84686 17.4982 9.59797C17.8263 10.3491 17.9971 11.1595 18 11.9791C18.0028 12.7988 17.8377 13.6103 17.5148 14.3637C17.1919 15.1171 16.7181 15.7963 16.1225 16.3595M7.4803 15.4069L9.15553 17.48C10.0288 18.5607 10.4655 19.1011 10.848 19.1599C11.1792 19.2108 11.5138 19.0925 11.7394 18.8448C12 18.5586 12 17.8638 12 16.4744V7.52572C12 6.13627 12 5.44155 11.7394 5.15536C11.5138 4.90761 11.1792 4.78929 10.848 4.84021C10.4655 4.89904 10.0288 5.43939 9.15553 6.52009L7.4803 8.59319C7.30388 8.81151 7.21567 8.92067 7.10652 8.99922C7.00982 9.06881 6.90147 9.12056 6.78656 9.15204C6.65687 9.18756 6.51652 9.18756 6.23583 9.18756H4.8125C4.0563 9.18756 3.6782 9.18756 3.37264 9.2885C2.77131 9.48716 2.2996 9.95887 2.10094 10.5602C2 10.8658 2 11.2439 2 12.0001C2 12.7563 2 13.1344 2.10094 13.4399C2.2996 14.0413 2.77131 14.513 3.37264 14.7116C3.6782 14.8126 4.0563 14.8126 4.8125 14.8126H6.23583C6.51652 14.8126 6.65687 14.8126 6.78656 14.8481C6.90147 14.8796 7.00982 14.9313 7.10652 15.0009C7.21567 15.0794 7.30388 15.1886 7.4803 15.4069Z" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
      });
    }

    if (menuButton && menu) {
      menuButton.addEventListener("click", (e) => {
        e.stopPropagation();
        menu.classList.toggle("show");
      });

      document.addEventListener("click", (e) => {
        if (!menu.contains(e.target) && !menuButton.contains(e.target)) {
          menu.classList.remove("show");
        }
      });
    }

    if (speedButton && speedOptions) {
      speedButton.addEventListener("click", (e) => {
        e.stopPropagation();
        speedOptions.classList.toggle("show");
      });

      speedOptions.querySelectorAll("li").forEach((option) => {
        option.addEventListener("click", () => {
          const speed = parseFloat(option.dataset.speed);
          audio.playbackRate = speed;
          speedOptions
            .querySelectorAll("li")
            .forEach((li) => li.classList.remove("active"));
          option.classList.add("active");
          speedOptions.classList.remove("show");
        });
      });
    }

    if (progressBarContainer) {
      progressBarContainer.addEventListener("mousedown", (e) => {
        isDragging = true;
        updateProgressFromMouse(e);
      });

      document.addEventListener("mousemove", (e) => {
        if (isDragging) {
          updateProgressFromMouse(e);
        }
      });

      document.addEventListener("mouseup", () => {
        isDragging = false;
      });

      progressBarContainer.addEventListener("click", updateProgressFromMouse);
    }

    // Progress updates with RAF
    let rafId = null;
    audio.addEventListener("timeupdate", () => {
      if (!rafId) {
        rafId = requestAnimationFrame(() => {
          updateProgress();
          rafId = null;
        });
      }
    });

    // Initial duration
    audio.addEventListener("loadedmetadata", () => {
      if (durationEl) {
        durationEl.textContent = formatTime(audio.duration);
      }
    });

    // Handle end of audio
    audio.addEventListener("ended", () => {
      updatePlayButton(playButton, false);
      progressBar.style.width = "0%";
      currentlyPlaying = null;
    });
  });
});

document.addEventListener('DOMContentLoaded', () => {
  // Add event listener to all buttons with the class 'primary-button'
  document.querySelectorAll('.input__box.border__box button.primary-button').forEach(button => {
      button.addEventListener('click', function() {
          // Get the value of the data-inputmodal attribute
          const modalClass = this.getAttribute('data-inputmodal');
          
          // Find the element with the corresponding class
          const modal = document.querySelector(`.${modalClass}`);
          
          // Toggle the 'open' class on the modal
          if (modal) {
              modal.classList.toggle('open');
          }
      });
  });

  // Add event listener to all elements with the class 'close-inputmodal'
  document.querySelectorAll('.close-inputmodal').forEach(closeButton => {
    closeButton.addEventListener('click', function() {
          // Remove the 'open' class from all elements with the class 'inputmodal'
          document.querySelectorAll('.inputmodal').forEach(modal => {
              modal.classList.remove('open');
          });
      });
  });
});