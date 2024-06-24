<header class="w-100 position-fixed border-bottom-1 bg-white navbar-outer">
   <nav class="container d-flex justify-content-between align-items-center navbar-container">
      <div class="ms-2"> 
         <a href="?page=index">
         <img src="assets/images/system/logo.svg" alt="Apsiyon Logo">
         </a>
      </div>
      <div id="navbar-mid-container" class="d-flex justify-content-start align-items-center navbar-mid-container">
         <div class="me-3 sidebar-menu-tab-button" onclick="sidebarTab(0)">Kimler İçin? <i class="fa-solid fa-chevron-down"></i></div>
         <div class="me-3 sidebar-menu-tab-button" onclick="sidebarTab(1)">Ürünler <i class="fa-solid fa-chevron-down"></i></div>
         <div class="me-3 sidebar-menu-tab-button" onclick="sidebarTab(2)">Çözümler <i class="fa-solid fa-chevron-down"></i></div>
         <div class="me-3 sidebar-menu-tab-button" onclick="sidebarTab(3)">Akademi <i class="fa-solid fa-chevron-down"></i></div>
         <div class="me-3">Kampanyalar</div>
         <div class="me-3">Blog</div>
         <div class="me-3">ADA</div>
      </div>
      <div class="d-flex justify-content-end align-items-center gap-3 navbar-right-container">
         <button class="btn btn-outline-dark text-uppercase navbar-right-login-button">Giriş Yap</button>
         <div class="dropdown">
            <button class="btn btn-light border-0 bg-white dropdown-toggle navbar-right-language-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            TR
            </button>
            <ul class="dropdown-menu border-0 py-0 navbar-right-language-dropdown-menu">
               <li><a class="dropdown-item" href="#">Türkçe</a></li>
               <li><a class="dropdown-item" href="#">English</a></li>
            </ul>
         </div>
         <div class="navbar-mobile-menu-buttons-container">
            <button class="btn btn-outline-dark align-items-center d-block navbar-mobile-menu-button" onclick="navbarMobileToggle()">
               <div class="d-flex justify-content-center align-items-center gap-1">
                  <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="21" height="13" viewBox="0 0 21 13">
                     <g class="icon" fill="none" fill-rule="evenodd" stroke="#161637" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2">
                        <path d="M0 0L19.333 0M2 6L19.333 6M6.667 11.333L19.333 11.333" transform="translate(1 1)"></path>
                     </g>
                  </svg>
                  <span>Menü</span>
               </div>
            </button>
            <div class="d-none navbar-mobile-menu-button" onclick="navbarMobileToggle()">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 26 26">
                  <g fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                     <g stroke="#161637" stroke-width="1.461">
                        <g>
                           <g>
                              <path d="M0 0L24 24M0 24L24 0" transform="translate(-987 -399) translate(396 358) translate(592 42)"></path>
                           </g>
                        </g>
                     </g>
                  </g>
               </svg>
            </div>
         </div>
      </div>
   </nav>
</header>
<sidebar id="sidebar-menu-outer" class="vw-100 vh-100  position-fixed  sidebar-menu-outer d-none">
   <div class="w-100 bg-white sidebar-menu-inner">
      <div class="container d-flex  sidebar-menu-content">
         <div class="p-4 ps-0 sidebar-menu-content-item">
            <h6 class="text-secondary mb-4">Apsiyon Kimler İçin?</h6>
            <div class="rounded p-3 mb-3 border text-center">
               <img src="assets/images/system/sidebar1.svg" alt="">
               <h6 class="py-3 fw-bold">Site / Apartman Yöneticisi</h6>
               <p class="pb-4 sidebar-card-paragraph">Yaşam alanı yönetimindeki süreçlerinizi Apsiyon ile kolaylaştırın.</p>
               <a href="#/" class="text-decoration-none position-relative sidebar-card-link">Yöneticiyim <i class="fa-solid fa-chevron-right"></i></a>
            </div>
         </div>
         <div class="p-4 ps-0 sidebar-menu-content-item">
            <h6 class="mb-4">a</h6>
            <div class="rounded p-3 mb-3 border text-center">
               <img src="assets/images/system/sidebar2.svg" alt="">
               <h6 class="py-3 fw-bold">Yönetim Firması</h6>
               <p class="pb-4 sidebar-card-paragraph">Apsiyon ile aynı anda birçok apartman ve siteyi kolayca yönetin.</p>
               <a href="#/" class="text-decoration-none position-relative sidebar-card-link">Yönetim Firmasıyım <i class="fa-solid fa-chevron-right"></i></a>
            </div>
         </div>
         <div class="p-4 ps-0 sidebar-menu-content-item">
            <h6 class="mb-4">a</h6>
            <div class="rounded p-3 mb-3 border text-center">
               <img src="assets/images/system/sidebar3.svg" alt="">
               <h6 class="py-3 fw-bold">Konut Sakini</h6>
               <p class="pb-4 sidebar-card-paragraph">Yönetiminiz Apsiyon kullansın, siz avantajlardan yararlanın.</p>
               <a href="#/" class="text-decoration-none position-relative sidebar-card-link">Konut Sakiniyim <i class="fa-solid fa-chevron-right"></i></a>
            </div>
         </div>
      </div>
      <div class="container d-flex  sidebar-menu-content d-none">
         <div class="p-4 ps-0 sidebar-menu-content-item">
            <h6 class="text-secondary mb-4">Hayatınızı Kolaylaştıran Ürünler</h6>
            <div class="rounded mb-3 text-start">
               <div class="d-flex gap-3 sidebar-menu-content-tab2">
                  <img src="assets/images/system/sidebar1.svg" alt="">
                  <div class="flex-1">
                     <h6 class="text-dark">Apsiyon</h6>
                     <p class="sidebar-card-paragraph">Site ve rezidans yönetiminde sunduğumuz uçtan uca çözümlerle yönetici olmak artık çok keyifli.</p>
                  </div>
               </div>
               <div class="d-flex gap-3 sidebar-menu-content-tab2">
                  <img src="assets/images/system/sidebar1.svg" alt="">
                  <div class="flex-1">
                     <h6 class="text-dark">Apsis</h6>
                     <p class="sidebar-card-paragraph">Site ve rezidans yönetiminde sunduğumuz uçtan uca çözümlerle yönetici olmak artık çok keyifli.</p>
                  </div>
               </div>
               <div class="d-flex gap-3 sidebar-menu-content-tab2">
                  <img src="assets/images/system/sidebar1.svg" alt="">
                  <div class="flex-1">
                     <h6 class="text-dark">AVM Yönetim Yazılımı</h6>
                     <p class="sidebar-card-paragraph">Site ve rezidans yönetiminde sunduğumuz uçtan uca çözümlerle yönetici olmak artık çok keyifli.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="p-4 ps-0 sidebar-menu-content-item">
            <h6 class="mb-4 opacity-0">a</h6>
            <div class="rounded mb-3 text-start">
               <div class="d-flex align-items-center gap-3 mb-3 sidebar-menu-content-tab2">
                  <img src="assets/images/system/sidebar1.svg" alt="">
                  <div class="flex-1">
                     <h6 class="text-dark">Sayaç Okuma ve Faturalandırma</h6>
                  </div>
               </div>
               <div class="d-flex align-items-center gap-3 mb-3 sidebar-menu-content-tab2">
                  <img src="assets/images/system/sidebar1.svg" alt="">
                  <div class="flex-1">
                     <h6 class="text-dark">Elektronik Güvenlik Sistemleri</h6>
                  </div>
               </div>
               <div class="d-flex align-items-center gap-3 mb-3 sidebar-menu-content-tab2">
                  <img src="assets/images/system/sidebar1.svg" alt="">
                  <div class="flex-1">
                     <h6 class="text-dark">Mobil Aidat Tahsilat Cihazı</h6>
                  </div>
               </div>
            </div>
         </div>
         <div class="p-4 ps-0 sidebar-menu-content-item">
            <h6 class="mb-4 opacity-0">a</h6>
            <div class="rounded mb-3 text-start">
               <div class="d-flex align-items-center gap-3 mb-3 sidebar-menu-content-tab2">
                  <img src="assets/images/system/sidebar1.svg" alt="">
                  <div class="flex-1">
                     <h6 class="text-dark">Sanal Santral Sistemi</h6>
                  </div>
               </div>
               <div class="d-flex align-items-center gap-3 mb-3 sidebar-menu-content-tab2">
                  <img src="assets/images/system/sidebar1.svg" alt="">
                  <div class="flex-1">
                     <h6 class="text-dark">Sayaç Muayene Hizmeti</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</sidebar>
<div id="navbar-mobile-menu-content-container" class="w-100 position-fixed bg-white d-none navbar-mobile-menu-content-container">
   <div class="position-relative navbar-mobile-menu-content-inner">
  
         <div class="w-100 fw-bold  border-bottom p-3 d-flex align-items-center navbar-mobile-menu-content-item">Menü</div>
         <div class="w-100  border-bottom p-3 d-flex justify-content-between align-items-center navbar-mobile-menu-content-item" onclick="generalToggle('navbar-mobile-menu-content-item-inner')">Kimler İçin? <i class="fa-solid fa-chevron-down"></i></div>
         <div class="p-3 pt-0 bg-white d-none navbar-mobile-menu-content-item-inner">
            <div class="w-100  border-bottom p-3 d-flex justify-content-start align-items-center  gap-3 navbar-mobile-menu-content-item">
               <img src="assets/images/system/sidebar1.svg" alt="">
               <div class="flex-1">
                  <h6 class="text-dark mb-0">Apsiyon</h6>
                  <p class="sidebar-card-paragraph mb-0">Site ve rezidans yönetiminde sunduğumuz uçtan uca çözümlerle yönetici olmak artık çok keyifli.</p>
               </div>
            </div>
            <div class="w-100  border-bottom p-3 d-flex justify-content-start align-items-center  gap-3 navbar-mobile-menu-content-item">
               <img src="assets/images/system/sidebar1.svg" alt="">
               <div class="flex-1">
                  <h6 class="text-dark mb-0">Apsiyon</h6>
                  <p class="sidebar-card-paragraph mb-0">Site ve rezidans yönetiminde sunduğumuz uçtan uca çözümlerle yönetici olmak artık çok keyifli.</p>
               </div>
            </div>
            <div class="w-100  border-bottom-0 p-3 pb-0 d-flex justify-content-start align-items-center  gap-3 navbar-mobile-menu-content-item">
               <img src="assets/images/system/sidebar1.svg" alt="">
               <div class="flex-1">
                  <h6 class="text-dark mb-0">Apsiyon</h6>
                  <p class="sidebar-card-paragraph mb-0">Site ve rezidans yönetiminde sunduğumuz uçtan uca çözümlerle yönetici olmak artık çok keyifli.</p>
               </div>
            </div>
         </div>
         <div class="w-100  border-bottom p-3 d-flex justify-content-between align-items-center navbar-mobile-menu-content-item">Ürünler</div>
         <div class="w-100  border-bottom p-3 d-flex justify-content-between align-items-center navbar-mobile-menu-content-item">Çözümler</div>
         <div class="w-100  border-bottom p-3 d-flex justify-content-between align-items-center navbar-mobile-menu-content-item">Akademi</div>
         <div class="w-100  border-bottom p-3 d-flex justify-content-between align-items-center navbar-mobile-menu-content-item">Kampanyalar</div>
         <div class="w-100  border-bottom p-3 d-flex justify-content-between align-items-center navbar-mobile-menu-content-item">Blog</div>
         <div class="w-100  border-bottom p-3 d-flex justify-content-between align-items-center navbar-mobile-menu-content-item">ADA</div>
   
   </div>
   <div class="w-100 d-flex justify-content-center align-items-center py-4 bottom-0  bg-white navbar-mobile-menu-content-login-button-container">
      <button class="btn btn-outline-dark mx-auto navbar-mobile-menu-content-login-button">Giriş Yap</button>
   </div>
</div>