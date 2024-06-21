// General Start

const generalToggle = (param) => {
  const toggleItem = document.querySelector(`.${param}`);

  toggleItem.classList.toggle("d-none");
  toggleItem.classList.toggle("d-block");
};

// General End
// Navbar Start

const navbarMobileToggle = () => {
  const navbarMobileButtons = document.querySelectorAll(
    ".navbar-mobile-menu-button"
  );
  const navbarMobileMenuContent = document.querySelector(
    ".navbar-mobile-menu-content-container"
  );

  const navbarMobileMenuContentItemInner = document.querySelector(
    ".navbar-mobile-menu-content-item-inner"
  );

  navbarMobileButtons.forEach((item) => {
    item.classList.toggle("d-none");
    item.classList.toggle("d-block");
  });

  navbarMobileMenuContent.classList.toggle("d-none");
  navbarMobileMenuContent.classList.toggle("d-block");
  navbarMobileMenuContentItemInner.classList.remove("d-block");
  navbarMobileMenuContentItemInner.classList.add("d-none");
};

const navbarMobileMenuToggle = () => {};

// Navbar Start

// Sidebar Start

const sidebarTab = (param) => {
  const sidebarMenuTabMenuButtons = document.querySelectorAll(
    ".sidebar-menu-tab-button"
  );
  const sidebarMenuTabMenuButtonIcons = document.querySelectorAll(
    ".sidebar-menu-tab-button i"
  );
  const sidebarMenuContents = document.querySelectorAll(
    ".sidebar-menu-content"
  );
  const sidebarMenuOuter = document.querySelector(".sidebar-menu-outer");

  if (
    sidebarMenuTabMenuButtons[param].classList.contains("side-bar-menu-open")
  ) {
    sidebarMenuOuter.classList.add("d-none");
    sidebarMenuOuter.classList.remove("d-block");
    sidebarMenuTabMenuButtons[param].classList.remove("side-bar-menu-open");
    sidebarMenuTabMenuButtonIcons[param].classList.add("fa-chevron-down");
    sidebarMenuTabMenuButtonIcons[param].classList.remove("fa-chevron-up");
    return null;
  } else {
    sidebarMenuOuter.classList.remove("d-none");
    sidebarMenuOuter.classList.add("d-block");
  }
  sidebarMenuTabMenuButtonIcons.forEach((item) => {
    if (item.classList.contains("fa-chevron-up")) {
      item.classList.remove("fa-chevron-up");
      item.classList.add("fa-chevron-down");
    }
  });

  sidebarMenuTabMenuButtons.forEach((item) => {
    item.classList.remove("side-bar-menu-open");
  });

  sidebarMenuContents.forEach((item) => {
    item.classList.remove("d-none");
  });

  sidebarMenuTabMenuButtonIcons[param].classList.remove("fa-chevron-down");
  sidebarMenuTabMenuButtonIcons[param].classList.add("fa-chevron-up");
  sidebarMenuTabMenuButtons[param].classList.add("side-bar-menu-open");

  if (param % 2 === 1) {
    sidebarMenuContents[0].classList.add("d-none");
  } else {
    sidebarMenuContents[1].classList.add("d-none");
  }
};

// Sidebar End
