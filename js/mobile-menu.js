window.addEventListener("load", e => {
<<<<<<< HEAD
    let isOpen = false;
    const mobileMenuButton = document.querySelector("#mobile-menu-button");
    const mobileMenu = document.querySelector("#mobile-menu-items");
    mobileMenu.style.display = "none";

    //handle click event on icon
    mobileMenuButton.addEventListener("click", function (e) {
        if (isOpen) {
            isOpen = false;
            mobileMenu.style.display = "none";
        } else {
            mobileMenu.style.display = "block";
            isOpen = true;
        }
    });

    window.addEventListener("resize", function (e) {
        console.log("WOHOHO");
        if (window.innerWidth >= 600) {
            mobileMenu.style.display = "none";
        }
    });
});
=======
  let isOpen = false;
  const mobileMenuButton = document.querySelector("#mobile-menu-button");
  const mobileMenu = document.querySelector("#mobile-menu-items");
  mobileMenu.style.display = "none";

  //handle click event on icon
  mobileMenuButton.addEventListener("click", function(e) {
    if (isOpen) {
      isOpen = false;
      mobileMenu.style.display = "none";
    } else {
      mobileMenu.style.display = "block";
      isOpen = true;
    }
  });

  window.addEventListener("resize", function(e) {
    if (window.innerWidth >= 600) {
      mobileMenu.style.display = "none";
    }
  });
});
>>>>>>> 8ac0e5531bd56dcb60f22bbd1b04c60a9537eb8a
