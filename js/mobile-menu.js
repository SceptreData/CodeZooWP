window.addEventListener("load", e => {
  let isOpen = false;
  const mobileMenuButton = document.querySelector("#mobile-menu-button");
  const mobileMenu = document.querySelector("#mobile-menu-items");
  // mobileMenu.style.display = "none";

  //handle click event on icon
  mobileMenuButton.addEventListener("click", function(e) {
    if (isOpen) {
      isOpen = false;
      mobileMenu.style.display = "block";
      mobileMenu.style.marginRight = "-100%";
    } else {
      // mobileMenu.style.display = "block";
      mobileMenu.style.marginRight = "0";
      isOpen = true;
    }
  });

  window.addEventListener("resize", function(e) {
    if (window.innerWidth >= 600) {
      mobileMenu.style.display = "none";
    }

    if (window.innerWidth < 600) {
      mobileMenu.style.display = "block";
    }
  });
});
