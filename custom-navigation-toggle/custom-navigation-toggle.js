    document.addEventListener("DOMContentLoaded", function() {
        // Select all submenu icons
        document.querySelectorAll(".wp-block-navigation__submenu-icon").forEach(button => {
            button.addEventListener("click", function(event) {
                event.preventDefault();
                event.stopPropagation();

                const parent = this.closest(".has-child");
                const submenu = parent.querySelector(".wp-block-navigation__submenu-container");

                // Toggle submenu visibility based on aria-expanded
                if (this.getAttribute("aria-expanded") === "true") {
                    // Submenu is open, so hide it
                    submenu.style.visibility = "hidden";
                    submenu.style.position = "absolute";
                    this.setAttribute("aria-expanded", "false");
                } else {
                    // Submenu is closed, so show it
                    submenu.style.visibility = "visible";
                    submenu.style.position = "relative";
                    this.setAttribute("aria-expanded", "true");
                }
            });
        });
    });
