<?php include "icons.php" ?>

<header class="header">
   <div id="header-first" class="header-first">
      <div class="container">
         <div class="refresh">
            <?php echo $refresh; ?>
            <p class="text p4">Letzte Aktualisierung: vor 4 Stunden</p>
         </div>
         <div class="header-first-content">
            <div>
               <p class="text p4">Deutschkursanbieter</p>
               <div class="arrow-dropdown-icon"><?php echo $arrow_caret_down_MD_black; ?></div>
            </div>
            <div class="language">
               <div class="language-content">
                  <div class="language-icon"><?php echo $flag_germany; ?></div>
                  <p class="text p4">Deutsch</p>
                  <div class="arrow-dropdown-icon"><?php echo $arrow_caret_down_MD_black; ?></div>
               </div>
               <div class="header-first-dropdown-menu">
                  <div class="dropdown-menu">
                     <?php
                     $item_index = 1;
                     $language_dropdown = ['Englisch' => $flag_english, 'Türkisch' => $flag_turkish, 'Russisch' => $flag_russian];
                     foreach ($language_dropdown as $language_dropdown_item_text => $language_dropdown_item_flag) { ?>
                        <div class="dropdown-menu-item" id="dropdown-menu-item-<?php echo $item_index; ?>">
                           <a class="dropdown-menu-item-link" href="#">
                              <div class="flag-icon"><?php echo $language_dropdown_item_flag; ?></div>
                              <span class="text p2 p2_semibold"><?php echo $language_dropdown_item_text; ?></span>
                              <div class="check-icon"><?php echo $check_big; ?></div>
                           </a>
                        </div>
                     <?php
                        $item_index += 1;
                     }
                     ?>
                  </div>
               </div>
            </div>
            <div class="social">
               <div class="tik-tok">
                  <a href="#" style="display: flex; width: inherit; height: inherit;">
                     <?php echo $header_tik_tok; ?>
                  </a>
               </div>
               <div class="instagram">
                  <a href="#" style="display: flex; width: inherit; height: inherit;">
                     <?php echo $header_instagram; ?>
                  </a>
               </div>
               <div class="youtube">
                  <a href="#" style="display: flex; width: inherit; height: inherit;">
                     <?php echo $header_youtube; ?>
                  </a>
               </div>
               <div class="facebook">
                  <a href="#" style="display: flex; width: inherit; height: inherit;">
                     <?php echo $header_facebook; ?>
                  </a>
               </div>
               <div class="telegram">
                  <a href="#" style="display: flex; width: inherit; height: inherit;">
                     <?php echo $header_telegram; ?>
                  </a>
               </div>
               <div class="whatsapp">
                  <a href="#" style="display: flex; width: inherit; height: inherit;">
                     <?php echo $header_whatsapp; ?>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="header-second">
      <div class="container">
         <div>
            <div class="logo">
               <img src="./images/logo.svg" alt="logo">
            </div>
            <div id="burger-menu" class="burger-menu">
               <div></div>
               <div></div>
               <div></div>
            </div>
         </div>
         <div id="header-second-content" class="header-second-content">
            <div class="header-second-nav">
               <?php
               $level_array = [
                  'A1' => ['A1 Hören' => '', 'A1 Lesen' => '', 'A1 Schreiben' => 'selected', 'A1 Sprechen' => '', 'Wortschatz A1' => '', 'Verben mit Prapositionen' => ''],
                  'A2' => ['A2 Hören' => '', 'A2 Lesen' => '', 'A2 Schreiben' => '', 'A2 Sprechen' => '', 'Wortschatz A2' => '', 'Verben mit Prapositionen' => ''],
                  'B1' => ['B1 Hören' => '', 'B1 Lesen' => '', 'B1 Schreiben' => '', 'B1 Sprechen' => '', 'Wortschatz B1' => '', 'Verben mit Prapositionen' => ''],
                  'B2' => ['B2 Hören' => '', 'B2 Lesen' => '', 'B2 Schreiben' => '', 'B2 Sprechen' => '', 'Wortschatz B2' => '', 'Verben mit Prapositionen' => '']
                  /* 'C1' => ['C1 Hören' => '', 'C1 Lesen' => '', 'C1 Schreiben' => '', 'C1 Sprechen' => '', 'Wortschatz C1' => '', 'Verben mit Prapositionen' => ''],
                     'C2' => ['C2 Hören' => '', 'C2 Lesen' => '', 'C2 Schreiben' => '', 'C2 Sprechen' => '', 'Wortschatz C2' => '', 'Verben mit Prapositionen' => ''] */
               ];
               foreach ($level_array as $level_text => $level_dropdown) { ?>
                  <div id="header-<?php echo $level_text; ?>">
                     <div class="header-second-nav-item">
                        <span class="text p3 p3_medium"><?php echo $level_text; ?></span>
                        <div class="arrow-dropdown-icon"><?php echo $arrow_caret_down_MD_white; ?></div>
                     </div>
                     <div class="header-second-nav-dropdown-menu">
                        <div class="dropdown-menu">
                           <?php
                           $item_index = 1;
                           foreach ($level_dropdown as $level_dropdown_item_text => $level_dropdown_item_class) { ?>
                              <div class="dropdown-menu-item <?php echo $level_dropdown_item_class; ?>" id="dropdown-menu-item-<?php echo $item_index; ?>">
                                 <a class="dropdown-menu-item-link" href="#">
                                    <span class="text p2 p2_semibold"><?php echo $level_dropdown_item_text; ?></span>
                                    <div class="check-icon"><?php echo $check_big; ?></div>
                                 </a>
                              </div>
                           <?php
                              $item_index += 1;
                           }
                           ?>
                        </div>
                     </div>
                  </div>
               <?php }
               ?>
               <div id="header-modeltest">
                  <a href="#"><span class="text p3 p3_medium">Modelltest</span></a>
               </div>
            </div>
            <div class="header-second-content-buttons">
               <button class="primary-button border small bg-transparent" type="button">
                  <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M19.5 21C19.5 17.134 16.366 14 12.5 14C8.63401 14 5.5 17.134 5.5 21M12.5 11C10.2909 11 8.5 9.20914 8.5 7C8.5 4.79086 10.2909 3 12.5 3C14.7091 3 16.5 4.79086 16.5 7C16.5 9.20914 14.7091 11 12.5 11Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  Mein account
               </button>
               <div></div>
               <button class="primary-button" type="button">
                  ist kostenlos?
               </button>
            </div>
         </div>
      </div>
   </div>
</header>


<script type="text/javascript">
   const headerLevelDropdownMenuItems = document.querySelectorAll('.header-second-nav-dropdown-menu .dropdown-menu-item');
   headerLevelDropdownMenuItems.forEach(function(item, index, arr) {
      item.addEventListener('click', function() {
         arr.forEach(function(i) {
            if (i.classList.contains('selected')) {
               i.classList.remove('selected');
            }
         });
         this.classList.add('selected');
      });
   });

   const toggleMenu = (mobileBtn, mobileMenu, additionalHeight = 0, isInnerMobileMenu = false) => {
      let isInnerMobileButtonActive = false;
      if (isInnerMobileMenu) {
         if (!mobileBtn.classList.contains('open')) {
            isInnerMobileButtonActive = false;
         } else {
            isInnerMobileButtonActive = true;
         }
      }
      if (!mobileBtn.classList.contains('open')) {
         const mobileMenuHeight = [...mobileMenu.children].reduce(function(total, item) {
            return total + item.scrollHeight;
         }, 0);
         mobileMenu.setAttribute('style', 'height: ' + (mobileMenuHeight + additionalHeight) + 'px;');
         mobileBtn.classList.add('open');
      } else {
         if (isInnerMobileButtonActive) {
            const mobileMenuHeight = [...mobileMenu.children].reduce(function(total, item) {
               return total + item.scrollHeight;
            }, 0);
            mobileMenu.setAttribute('style', 'height: ' + (mobileMenuHeight + additionalHeight) + 'px;');
            mobileBtn.classList.remove('open');
         } else {
            mobileMenu.removeAttribute('style');
            mobileBtn.classList.remove('open');
         }
      }
   };

   const burgerBtn = document.getElementById('burger-menu');
   const headerFirstSection = document.getElementById('header-first');
   const headerSecondSectionContent = document.getElementById('header-second-content');

   const headerFirstSectionPaddingTopAndBottom = 18;
   const headerSecondSectionContentPaddingTopAndBottom = 20 + 36;
   const headerSecondSectionContentGap = 20;

   function toggleHeaderMenu(button, isInnerMobileMenu = false) {
      toggleMenu(button, headerSecondSectionContent, (headerSecondSectionContentPaddingTopAndBottom + headerSecondSectionContentGap), isInnerMobileMenu);
      button.classList.toggle('open');
      if (headerSecondSectionContent.getAttribute('style')) {
         headerSecondSectionContent.style.padding = "20px 16px 36px";
      }
      toggleMenu(button, headerFirstSection, headerFirstSectionPaddingTopAndBottom, isInnerMobileMenu);
      if (headerFirstSection.getAttribute('style')) {
         headerFirstSection.style.padding = "9px 0px";
      }
   }

   burgerBtn.addEventListener('click', function() {
      if (window.innerWidth < 1199.99) {
         toggleHeaderMenu(this);
      }
   });

   const headerLanguageContent = document.querySelectorAll('.language-content');
   const headerSecondNavItem = document.querySelectorAll('.header-second-nav-item');
   headerLanguageContent.forEach(function(button) {
      button.addEventListener('click', function() {
         this.parentElement.children[1] && this.parentElement.children[1].classList.toggle('show');
         toggleHeaderMenu(this, true);
         //toggleMenu(this, searchCatalogNav, searchCatalogAllAdditionalIndents, true);
      });
   });
   headerSecondNavItem.forEach(function(button) {
      button.addEventListener('click', function(e) {
         this.parentElement.children[1] && this.parentElement.children[1].classList.toggle('show');
         toggleHeaderMenu(this, true);
         //toggleMenu(this, searchCatalogNav, searchCatalogAllAdditionalIndents, true);
      });
   });
</script>