<footer class="footer">
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-wrapper_info">
                <a href="/" aria-label="logo" class="footer-info_logo">
                    <?php echo $logo; ?>
                </a>
                <div class="footer-info_menu">
                    <div class="footer-info_block">
                        <p class="text p2">Unsere Level</p>
                        <div class="footer-block_list">
                            <a href="#" class="text p3">A1</a>
                            <a href="#" class="text p3">A2</a>
                            <a href="#" class="text p3">B1</a>
                            <a href="#" class="text p3">B2</a>
                            <a href="#" class="text p3">Modelltest</a>
                        </div>
                    </div>
                    <div class="footer-info_block">
                        <p class="text p2">Rechtliche Information</p>
                        <div class="footer-block_list">
                            <a href="#" class="text p3">Kontact</a>
                            <p class="text p3"><a href="#" class="text p3">Impressum</a> und <a href="#" class="text p3">AGB</a></p>
                            <a href="#" class="text p3">Datenschutzerklarung</a>
                            <a href="#" class="text p3">Cookie-Richtlinie</a>
                        </div>
                    </div>
                </div>
                <div class="footer-info_actions">
                    <div class="footer-actions_button">
                        <div class="footer-first-dropdown-item-1">
                            <div class="footer-first-dropdown-item-1-content">
                                <p class="text p4">Deutschkursanbieter</p>
                                <div class="arrow-dropdown-icon"><?php echo $arrow_caret_down_MD_white; ?></div>
                            </div>
                            <div class="footer-first-dropdown-menu">
                                <div class="dropdown-menu">
                                    <?php
                                    $item_index = 1;
                                    $language_dropdown = ['item 1', 'item 2', 'item 3'];
                                    foreach ($language_dropdown as $language_dropdown_item_text) { ?>
                                        <div class="dropdown-menu-item" id="dropdown-menu-item-<?php echo $item_index; ?>">
                                            <a class="dropdown-menu-item-link" href="#">
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
                    </div>
                    <div class="footer-actions_button">
                        <div class="language">
                            <div class="footer-language-content language-content">
                                <div class="language-icon"><?php echo $flag_germany; ?></div>
                                <p class="text p4">Deutsch</p>
                                <div class="arrow-dropdown-icon"><?php echo $arrow_caret_down_MD_black; ?></div>
                            </div>
                            <div class="footer-language-dropdown-menu">
                                <div class="dropdown-menu">
                                    <?php
                                    $item_index = 1;
                                    $language_dropdown = ['Englisch' => $flag_english, 'Türkisch' => $flag_turkish, 'Russisch' => $flag_russian, 'Ukrainische' => $flag_ukrainian, 'Deutsch' => $flag_germany_2];
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
                    </div>
                </div>
            </div>
            <div class="footer-wrapper_inner">
                <p class="text p4">Copyright © 2024 All rights reserved</p>
                <div class="footer-inner_socials">
                    <a href="https://www.tiktok.com/@vorbereitung.mit.bo" target="_blank" class="footer-socials_item" aria-label="TikTok" title="TikTok">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.625 0C2.51841 0 0 2.5184 0 5.625V30.375C0 33.4816 2.51841 36 5.625 36H30.375C33.4816 36 36 33.4816 36 30.375V5.625C36 2.5184 33.4816 0 30.375 0H5.625ZM21.508 9C21.508 9.26747 21.533 9.53089 21.579 9.78582C21.8004 10.9643 22.4978 11.9757 23.4666 12.6067C24.1431 13.0497 24.9448 13.3046 25.8092 13.3046L25.809 13.9942V16.3972C24.2055 16.3972 22.719 15.8832 21.5079 15.0139V21.3037C21.5079 24.4423 18.9524 27 15.8165 27C14.6055 27 13.478 26.6154 12.5552 25.9676C11.0854 24.9354 10.125 23.2302 10.125 21.3037C10.125 18.1609 12.6764 15.6074 15.8123 15.6115C16.0754 15.6115 16.3301 15.6324 16.5807 15.6659V16.3972L16.5715 16.4016L16.5806 16.4014V18.8254C16.3385 18.7501 16.0796 18.7042 15.8123 18.7042C14.38 18.7042 13.215 19.8702 13.215 21.3037C13.215 22.3025 13.7829 23.1676 14.6097 23.6064C14.6219 23.6232 14.6344 23.6398 14.647 23.6563C14.6375 23.6379 14.6265 23.6199 14.6139 23.6023C14.9772 23.7945 15.3864 23.9032 15.8207 23.9032C17.2195 23.9032 18.3637 22.7873 18.4138 21.3998L18.418 9H21.508Z" fill="#F2F2F2" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/vorbereitung_mit_bo" target="_blank" class="footer-socials_item" aria-label="Instagram" title="Instagram">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 21.15C16.3125 21.15 14.85 19.8 14.85 18C14.85 16.3125 16.2 14.85 18 14.85C19.6875 14.85 21.15 16.2 21.15 18C21.15 19.6875 19.6875 21.15 18 21.15Z" fill="#F2F2F2" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.825 10.35H14.175C13.275 10.4625 12.825 10.575 12.4875 10.6875C12.0375 10.8 11.7 11.025 11.3625 11.3625C11.0954 11.6296 10.9693 11.8966 10.8167 12.2194C10.7766 12.3045 10.7344 12.3937 10.6875 12.4875C10.6701 12.5397 10.65 12.5946 10.6285 12.6535C10.5108 12.975 10.35 13.4142 10.35 14.175V21.825C10.4625 22.725 10.575 23.175 10.6875 23.5125C10.8 23.9625 11.025 24.3 11.3625 24.6375C11.6296 24.9046 11.8966 25.0307 12.2194 25.1833C12.3046 25.2235 12.3936 25.2655 12.4875 25.3125C12.5397 25.3299 12.5946 25.35 12.6535 25.3715C12.975 25.4892 13.4142 25.65 14.175 25.65H21.825C22.725 25.5375 23.175 25.425 23.5125 25.3125C23.9625 25.2 24.3 24.975 24.6375 24.6375C24.9046 24.3704 25.0307 24.1034 25.1833 23.7806C25.2235 23.6955 25.2656 23.6064 25.3125 23.5125C25.3299 23.4603 25.35 23.4054 25.3715 23.3465C25.4892 23.025 25.65 22.5858 25.65 21.825V14.175C25.5375 13.275 25.425 12.825 25.3125 12.4875C25.2 12.0375 24.975 11.7 24.6375 11.3625C24.3704 11.0954 24.1034 10.9693 23.7806 10.8167C23.6956 10.7766 23.6063 10.7344 23.5125 10.6875C23.4603 10.6701 23.4054 10.65 23.3465 10.6285C23.025 10.5108 22.5858 10.35 21.825 10.35ZM18 13.1625C15.3 13.1625 13.1625 15.3 13.1625 18C13.1625 20.7 15.3 22.8375 18 22.8375C20.7 22.8375 22.8375 20.7 22.8375 18C22.8375 15.3 20.7 13.1625 18 13.1625ZM24.075 13.05C24.075 13.6713 23.5713 14.175 22.95 14.175C22.3287 14.175 21.825 13.6713 21.825 13.05C21.825 12.4287 22.3287 11.925 22.95 11.925C23.5713 11.925 24.075 12.4287 24.075 13.05Z" fill="#F2F2F2" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.625C0 2.5184 2.5184 0 5.625 0H30.375C33.4816 0 36 2.5184 36 5.625V30.375C36 33.4816 33.4816 36 30.375 36H5.625C2.5184 36 0 33.4816 0 30.375V5.625ZM14.175 8.6625H21.825C22.8375 8.775 23.5125 8.8875 24.075 9.1125C24.75 9.45 25.2 9.675 25.7625 10.2375C26.325 10.8 26.6625 11.3625 26.8875 11.925C27.1125 12.4875 27.3375 13.1625 27.3375 14.175V21.825C27.225 22.8375 27.1125 23.5125 26.8875 24.075C26.55 24.75 26.325 25.2 25.7625 25.7625C25.2 26.325 24.6375 26.6625 24.075 26.8875C23.5125 27.1125 22.8375 27.3375 21.825 27.3375H14.175C13.1625 27.225 12.4875 27.1125 11.925 26.8875C11.25 26.55 10.8 26.325 10.2375 25.7625C9.675 25.2 9.3375 24.6375 9.1125 24.075C8.8875 23.5125 8.6625 22.8375 8.6625 21.825V14.175C8.775 13.1625 8.8875 12.4875 9.1125 11.925C9.45 11.25 9.675 10.8 10.2375 10.2375C10.8 9.675 11.3625 9.3375 11.925 9.1125C12.4875 8.8875 13.1625 8.6625 14.175 8.6625Z" fill="#F2F2F2" />
                        </svg>
                    </a>
                    <a href="https://youtube.com/@vorbereitungbo" target="_blank" class="footer-socials_item" aria-label="YouTube" title="YouTube">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.925 18L16.2 15.3V20.7L20.925 18Z" fill="#F2F2F2" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.625C0 2.5184 2.5184 0 5.625 0H30.375C33.4816 0 36 2.5184 36 5.625V30.375C36 33.4816 33.4816 36 30.375 36H5.625C2.5184 36 0 33.4816 0 30.375V5.625ZM24.975 12.0375C25.7625 12.2625 26.325 12.825 26.55 13.6125C27 15.075 27 18 27 18C27 18 27 20.925 26.6625 22.3875C26.4375 23.175 25.875 23.7375 25.0875 23.9625C23.625 24.3 18 24.3 18 24.3C18 24.3 12.2625 24.3 10.9125 23.9625C10.125 23.7375 9.5625 23.175 9.3375 22.3875C9 20.925 9 18 9 18C9 18 9 15.075 9.225 13.6125C9.45 12.825 10.0125 12.2625 10.8 12.0375C12.2625 11.7 17.8875 11.7 17.8875 11.7C17.8875 11.7 23.625 11.7 24.975 12.0375Z" fill="#F2F2F2" />
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61554970806530" target="_blank" class="footer-socials_item" aria-label="Facebook" title="Facebook">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.625C0 2.5184 2.5184 0 5.625 0H30.375C33.4816 0 36 2.5184 36 5.625V30.375C36 33.4816 33.4816 36 30.375 36H5.625C2.5184 36 0 33.4816 0 30.375V5.625ZM18 9C22.95 9 27 13.05 27 18C27 22.5 23.7375 26.325 19.2375 27V20.5875H21.375L21.825 18H19.35V16.3125C19.35 15.6375 19.6875 14.9625 20.8125 14.9625H21.9375V12.7125C21.9375 12.7125 20.925 12.4875 19.9125 12.4875C17.8875 12.4875 16.5375 13.725 16.5375 15.975V18H14.2875V20.5875H16.5375V26.8875C12.2625 26.2125 9 22.5 9 18C9 13.05 13.05 9 18 9Z" fill="#F2F2F2" />
                        </svg>
                    </a>
                    <a href="https://t.me/deutsch_vorbereitung" target="_blank" class="footer-socials_item" aria-label="Telegram" title="Telegram">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.625 0H30.375C33.4816 0 36 2.5184 36 5.625V30.375C36 33.4816 33.4816 36 30.375 36H5.625C2.5184 36 0 33.4816 0 30.375V5.625C0 2.5184 2.5184 0 5.625 0ZM18.7783 13.5083C17.1662 14.1788 13.9442 15.5667 9.11241 17.6718C8.32779 17.9838 7.91678 18.2891 7.87936 18.5876C7.81613 19.092 8.44779 19.2906 9.30795 19.5611C9.42496 19.5979 9.54619 19.636 9.67048 19.6764C10.5167 19.9515 11.6551 20.2733 12.2469 20.2861C12.7837 20.2977 13.3829 20.0764 14.0444 19.6221C18.5589 16.5747 20.8893 15.0344 21.0356 15.0012C21.1388 14.9777 21.2819 14.9483 21.3788 15.0344C21.4757 15.1206 21.4662 15.2837 21.4559 15.3275C21.3933 15.5942 18.9138 17.8994 17.6307 19.0923C17.2307 19.4642 16.9469 19.728 16.8889 19.7883C16.759 19.9232 16.6265 20.0509 16.4993 20.1736C15.7131 20.9315 15.1235 21.4999 16.5319 22.428C17.2087 22.874 17.7503 23.2429 18.2907 23.6108C18.8807 24.0127 19.4693 24.4135 20.2308 24.9126C20.4248 25.0398 20.6101 25.1719 20.7906 25.3006C21.4773 25.7901 22.0942 26.23 22.8565 26.1598C23.2994 26.1191 23.7568 25.7026 23.9892 24.4606C24.5383 21.5252 25.6176 15.1651 25.867 12.5443C25.8889 12.3147 25.8614 12.0208 25.8393 11.8918C25.8172 11.7628 25.7711 11.579 25.6034 11.4429C25.4048 11.2818 25.0982 11.2478 24.9611 11.2501C24.3377 11.2612 23.3813 11.5938 18.7783 13.5083Z" fill="#F2F2F2" />
                        </svg>
                    </a>
                    <a href="https://whatsapp.com/channel/0029VaRxVlz5Ui2ZwdrgVe12" target="_blank" class="footer-socials_item" aria-label="WhatsApp" title="WhatsApp">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.175 24.4125C15.3 25.0875 16.65 25.425 18 25.425C22.1625 25.425 25.425 22.05 25.425 18.1125C25.425 16.0875 24.75 14.2875 23.2875 12.825C21.825 11.475 20.025 10.6875 18 10.6875C13.95 10.6875 10.575 14.0625 10.575 18.1125C10.575 19.4625 10.9125 20.8125 11.7 22.05L11.925 22.3875L11.1375 25.0875L13.95 24.3L14.175 24.4125ZM20.475 19.125C20.7 19.125 21.825 19.6875 22.05 19.8C22.085 19.8175 22.1201 19.8323 22.1547 19.8469C22.3423 19.9261 22.5175 20.0001 22.6125 20.475C22.725 20.475 22.725 20.925 22.5 21.4875C22.3875 21.9375 21.4875 22.5 21.0375 22.5C20.9613 22.5 20.8883 22.5065 20.8103 22.5134C20.4279 22.5472 19.926 22.5916 18.3375 21.9375C16.366 21.1489 14.9991 19.2374 14.6152 18.7006C14.561 18.6248 14.5264 18.5764 14.5125 18.5625C14.4933 18.5242 14.4546 18.4631 14.4035 18.3824C14.1547 17.9895 13.6125 17.1335 13.6125 16.2C13.6125 15.075 14.175 14.5125 14.4 14.2875C14.625 14.0625 14.85 14.0625 14.9625 14.0625H15.4125C15.525 14.0625 15.75 14.0625 15.8625 14.4C16.0875 14.85 16.5375 15.975 16.5375 16.0875C16.5375 16.125 16.55 16.1625 16.5625 16.2C16.5875 16.275 16.6125 16.35 16.5375 16.425C16.4813 16.4812 16.4531 16.5375 16.425 16.5938C16.3969 16.65 16.3688 16.7063 16.3125 16.7625L15.975 17.1C15.8625 17.2125 15.75 17.325 15.8625 17.55C15.975 17.775 16.425 18.5625 17.1 19.125C17.8595 19.7896 18.4588 20.0535 18.7626 20.1874C18.8188 20.2121 18.8649 20.2324 18.9 20.25C19.125 20.25 19.2375 20.25 19.35 20.1375C19.4063 20.025 19.5469 19.8563 19.6875 19.6875C19.8281 19.5187 19.9687 19.35 20.025 19.2375C20.1375 19.0125 20.25 19.0125 20.475 19.125Z" fill="#F2F2F2" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.625C0 2.5184 2.5184 0 5.625 0H30.375C33.4816 0 36 2.5184 36 5.625V30.375C36 33.4816 33.4816 36 30.375 36H5.625C2.5184 36 0 33.4816 0 30.375V5.625ZM18 9C20.3625 9 22.6125 9.9 24.3 11.5875C25.9875 13.275 27 15.525 27 17.8875C27 22.8375 22.95 26.8875 18 26.8875C16.5375 26.8875 15.075 26.4375 13.725 25.7625L9 27L10.2375 22.5C9.45001 21.15 9 19.575 9 18C9 13.05 13.05 9 18 9Z" fill="#F2F2F2" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>