console.log("JS Loaded!");


const profileImg = document.getElementById('profile-img');
        const profileOverlay = document.getElementById('profile-overlay');
        const dropdownMenu = document.getElementById('dropdown-menu');

        // Function to toggle dropdown visibility
        function toggleDropdown() {
            dropdownMenu.style.display = dropdownMenu.style.display === 'flex' ? 'none' : 'flex';
        }
        
        // Attach event listeners to both the profile image and the overlay div
        profileImg.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent event from bubbling up
            toggleDropdown();
        });

        profileOverlay.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent event from bubbling up
            toggleDropdown();
        });

        // Hide dropdown when clicking anywhere outside the profile container
        document.addEventListener('click', (event) => {
            if (!event.target.closest('.profile-container')) {
                dropdownMenu.style.display = 'none';
            }
        });


document.getElementById("purchaseid").addEventListener("click", function() {
    var overlay = document.getElementById("purchaseoverlay");
    overlay.style.display = (overlay.style.display === "flex") ? "none" : "flex";
});
// Close overlay when clicking on the close button
document.getElementById("closeOverlay").addEventListener("click", function() {
    var overlay = document.getElementById("purchaseoverlay");
    overlay.style.display = "none";
});



document.addEventListener("DOMContentLoaded", function() {
    // Check if elements exist
    var bookmarkButton = document.getElementById("bookmarkid");
    var bookmarkOverlay = document.getElementById("bookmarkoverlay");
    var closeButton = document.getElementById("closeOverlay1");

    if (bookmarkButton && bookmarkOverlay && closeButton) {
        // Show/hide the overlay when clicking on the bookmark button
        bookmarkButton.addEventListener("click", function() {
            bookmarkOverlay.style.display = (bookmarkOverlay.style.display === "flex") ? "none" : "flex";
        });

        // Close overlay when clicking on the close button
        closeButton.addEventListener("click", function() {
            bookmarkOverlay.style.display = "none";
        });
    } else {
        console.error("Elements not found: Check if bookmarkid, bookmarkoverlay, and closeOverlay1 exist in the DOM.");
    }
    
});





document.addEventListener('scroll', () => {
    const header = document.querySelector('header');
        if (window.scrollY > 0) { // Adjust scroll distance as needed
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
function showSidebar() {
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'flex'
    }
    function hideSidebar() {
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'none'
    }
    function toggleCheckbox() {
        var checkbox = document.getElementById("submenu");
        checkbox.checked = !checkbox.checked;  // Toggle the checked property
     }

document.querySelector('.homehover1').addEventListener('click', function () {
        const dropdown = document.querySelector('.homehover2 .dropdown');
        const arrow = document.querySelector('.homehover1 .down');

        // Toggle the dropdown visibility
        dropdown.classList.toggle('active');

        // Toggle the rotation of the arrow
        if (dropdown.classList.contains('active')) {
            arrow.classList.add('rotated'); // Rotate the arrow
        } else {
            arrow.classList.remove('rotated'); // Reset rotation
        }
    });

 // Select all elements with the 'animate' class
        const elements = document.querySelectorAll('.tagline, .logoicon, .title1, .training_divoffspring1, .label, .container, .text_trainingsection, .title, .training_divparent1 button, .page31, .page311');

        // Set up the Intersection Observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add 'active' class to start the animation
                    entry.target.classList.add('active');
                } else {
                    // Remove 'active' class to reset animation
                    entry.target.classList.remove('active');
                }
            });
        }, {
            threshold: 0.1 // Trigger when 20% of the div is visible
        });
            
        // Observe each element
        elements.forEach(el => observer.observe(el));
        document.addEventListener("DOMContentLoaded", () => {
            const element = document.querySelector(".page31");
            element.classList.add("animated");
        });


function copyToClipboard() {
    var text = document.getElementById("copyText").innerText;
    navigator.clipboard.writeText(text).then(() => {
        alert("Copied: " + text);
    });
}


// Ensure pr1 is visible first
document.getElementById("pr1").style.display = "block";  // Show pr1 by default
document.getElementById("pr2").style.display = "none";  // Hide pr2 initially

// Show pr1 when clicking on pl1, and hide pr2
document.getElementById("pl1").addEventListener("click", function() {
    document.getElementById("pr1").style.display = "block"; // Show pr1
    document.getElementById("pr2").style.display = "none"; // Hide pr2
});

// Show pr2 when clicking on pl2, and hide pr1
document.getElementById("pl2").addEventListener("click", function() {
    document.getElementById("pr2").style.display = "block"; // Show pr2
    document.getElementById("pr1").style.display = "none"; // Hide pr1
});


document.addEventListener("DOMContentLoaded", function () {
    const addAlert = document.getElementById("add");
    const removeAlert = document.getElementById("remove");
    const closeAddAlert = document.getElementById("closealert");
    const closeRemoveAlert = document.getElementById("closealert1");
    const showbm = document.getElementById("showbm");
    const showbm1 = document.getElementById("showbm1");
    const bookmarkOverlay = document.getElementById("bookmarkoverlay"); // Ensure this exists in your HTML

    function closeOverlay(alertBox) {
        if (alertBox) {
            alertBox.style.display = "none";
        }
    }

    // Close alerts when clicking "OKAY"
    closeAddAlert.addEventListener("click", () => closeOverlay(addAlert));
    closeRemoveAlert.addEventListener("click", () => closeOverlay(removeAlert));

    // Show bookmark overlay when clicking "See lists"
    function showBookmark() {
        bookmarkOverlay.style.display = "flex";
        closeOverlay(addAlert);
        closeOverlay(removeAlert);
    }

    showbm.addEventListener("click", showBookmark);
    showbm1.addEventListener("click", showBookmark);

    // Close alert when clicking outside of the alert box
    document.addEventListener("click", function (event) {
        if (
            addAlert.style.display === "block" &&
            !event.target.closest(".alert") &&
            !event.target.closest("a")
        ) {
            closeOverlay(addAlert);
        }
        if (
            removeAlert.style.display === "block" &&
            !event.target.closest(".alert") &&
            !event.target.closest("a")
        ) {
            closeOverlay(removeAlert);
        }
    });

    // ✅ Added: Close alerts when clicking the overlay itself
    addAlert.addEventListener("click", function (event) {
        if (event.target === addAlert) {
            closeOverlay(addAlert);
        }
    });

    removeAlert.addEventListener("click", function (event) {
        if (event.target === removeAlert) {
            closeOverlay(removeAlert);
        }
    });

    // Prevent clicks inside the alert from closing it
    addAlert.querySelector(".alert").addEventListener("click", (e) => e.stopPropagation());
    removeAlert.querySelector(".alert").addEventListener("click", (e) => e.stopPropagation());
});

document.querySelectorAll("button[data-link]").forEach(button => {
    button.addEventListener("click", function () {
        const link = this.getAttribute("data-link"); // Get the link from data-link attribute
        if (link) {
            window.open(link, "_blank"); // Open link in a new tab
        } else {
            alert("No link available!"); // Optional: Handle cases where ytlinks is empty
        }
    });
});