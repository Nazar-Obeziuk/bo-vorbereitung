<?php include "icons.php" ?>

<header class="header">
   <div class="header-first">
      <div class="container">
         <div class="refresh">
            <?php echo $refresh; ?>
            <p class="text p4">Letzte Aktualisierung: vor 4 Stunden</p>
         </div>
         <div class="header-first-content">
            <div>
               <p class="text p4">Deutschkursanbieter</p>
               <?php echo $arrow_caret_down_MD_black; ?>
            </div>
            <div class="language">
               <?php echo $flag_germany; ?>
               <p class="text p4">Deutsch</p>
               <?php echo $arrow_caret_down_MD_black; ?>
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
         <div class="logo">
            <img src="./images/logo.svg" alt="logo">
         </div>
         <div class="header-second-content">
            <div class="header-second-nav">
               <div id="header-A1">
                  <div>
                     <span class="text p3 p3_medium">A1</span>
                     <?php echo $arrow_caret_down_MD_white; ?>
                  </div>
                  <div class="dropdown-menu"></div>
               </div>
               <div id="header-A2">
                  <span class="text p3 p3_medium">A2</span>
                  <?php echo $arrow_caret_down_MD_white; ?>
               </div>
               <div id="header-B1">
                  <span class="text p3 p3_medium">B1</span>
                  <?php echo $arrow_caret_down_MD_white; ?>
               </div>
               <div id="header-B2">
                  <span class="text p3 p3_medium">B2</span>
                  <?php echo $arrow_caret_down_MD_white; ?>
               </div>
               <div id="header-C1">
                  <span class="text p3 p3_medium">C1</span>
                  <?php echo $arrow_caret_down_MD_white; ?>
               </div>
               <div id="header-C2">
                  <span class="text p3 p3_medium">C2</span>
                  <?php echo $arrow_caret_down_MD_white; ?>
               </div>
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