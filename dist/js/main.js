//Adjusts menu location based on wpAdminBar
// Adjusts menu location based on wpAdminBar
window.addEventListener("load", function () {
    var wpAdminBar = document.getElementById("wpadminbar");
    var navbar = document.querySelector(".navbar");
    var body = document.body;

    function updateNavbarPosition() {
        if (wpAdminBar && navbar) {
            var topOffset = window.innerWidth <= 575 ? 0 : (window.innerWidth <= 782 ? 45 : 32);
            var bodyOffset = window.innerWidth <= 782 ? 52 : 54;
            navbar.style.top = topOffset + "px";
            body.style.paddingTop = bodyOffset + "px";
        }
    }

    // Function to switch navbar to fixed and adjust body padding after scrolling 46px on small screens
    function handleScroll() {
        if (window.innerWidth <= 575) {
            if (window.scrollY > 46) {
                navbar.style.position = "fixed";
                navbar.style.top = "0"; 
                body.style.paddingTop = "62px"; // Apply padding after scrolling
            } else {
                navbar.style.position = "sticky";
                navbar.style.top = "0";
                body.style.paddingTop = "0"; // Remove padding before scrolling 46px
            }
        } else {
            // Reset to original position and padding for larger screens
            navbar.style.position = "fixed"; 
            body.style.paddingTop = "54px"; // Default padding for larger screens
        }
    }

    // Initial setup
    updateNavbarPosition();
    handleScroll();

    // Update on window resize and scroll
    window.addEventListener("resize", function() {
        updateNavbarPosition();
        handleScroll(); 
    });

    window.addEventListener("scroll", handleScroll);
});



//Mobile Nav Sub Menu
document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.querySelector(".nav-item.dropdown");
    const arrow = dropdown.querySelector(".dropdown-arrow");
    const menu = dropdown.querySelector(".dropdown-menu");

    arrow.addEventListener("click", function (e) {
        e.preventDefault(); // Prevent default navigation
        e.stopPropagation(); // Prevent event bubbling

        // Toggle dropdown
        if (menu.style.display === "block") {
            menu.style.display = "none";
        } else {
            menu.style.display = "block";
        }
    });

    // Close dropdown when clicking anywhere else
    document.addEventListener("click", function (event) {
        if (!dropdown.contains(event.target)) {
            menu.style.display = "none";
        }
    });
});