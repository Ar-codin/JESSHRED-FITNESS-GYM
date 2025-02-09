
document.addEventListener("DOMContentLoaded", function () {
            // Select all navigation items (divs representing each section)
            const navItems = document.querySelectorAll(".programsbox, .programsboxone, .programsbox1"); // Include both classes
            // Select all content sections (divs with class "container4")
            const sections = document.querySelectorAll(".container4");

            // Hide all sections initially
            function hideSections() {
                sections.forEach(function (section) {
                    section.style.display = "none"; // Hide all sections
                });
            }

            // Show the section corresponding to the target ID
            function showSection(targetId) {
                hideSections(); // Hide all sections before showing the target
                const targetSection = document.getElementById(targetId); // Get the section by ID
                if (targetSection) {
                    targetSection.style.display = "flex"; // Show the section
                }
            }

            // Function to set active state on the clicked navigation item
            function setActiveNavItem(targetNavItem) {
                navItems.forEach(function (navItem) {
                    navItem.classList.remove("active"); // Remove active class from all items
                });
                targetNavItem.classList.add("active"); // Add active class to the clicked item
            }

            // Add click event listener to each navigation item
            navItems.forEach(function (navItem) {
                navItem.addEventListener("click", function () {
                    // Get the target section from the data-target attribute
                    const targetSectionId = navItem.getAttribute("data-target");
                    showSection(targetSectionId); // Show the corresponding section
                    setActiveNavItem(navItem); // Set the clicked nav item as active
                });
            });

            // Show the first section (Chest) by default when the page loads
            showSection("sectionone"); // Show the section with ID 'section1' initially
            setActiveNavItem(navItems[0]); // Set the first item as active initially
        });



document.getElementById('search').addEventListener('input', function () {
            const searchValue = this.value.trim().toLowerCase(); // Input text
            const categories = document.querySelectorAll('.programsbox, .programsboxone, .programsbox1'); // Categories on the left

            categories.forEach(category => {
                const targetSectionId = category.getAttribute('data-target'); // Section ID
                const section = document.getElementById(targetSectionId); // Get section element
                const items = section.querySelectorAll('[data-name]'); // All items in the section
                let sectionHasMatch = false;

                items.forEach(item => {
                    const itemName = item.getAttribute('data-name').toLowerCase(); // Item name
                    if (itemName.includes(searchValue)) {
                        item.style.display = 'flex'; // Show matching item
                        sectionHasMatch = true; // Section has matches
                    } else {
                        item.style.display = 'none'; // Hide non-matching items
                    }
                });

                // Display or hide the "No results found" message for the category
                let noResultsMessage = section.querySelector('.no-results');
                if (!noResultsMessage) {
                    noResultsMessage = document.createElement('div');
                    noResultsMessage.className = 'no-results';
                    noResultsMessage.style.display = 'none';
                    section.appendChild(noResultsMessage);
                }

                // Add the category name to the "No results found" message
                const categoryName = category.textContent.trim(); // Get category name
                noResultsMessage.textContent = `No results found in ${categoryName}`;

                if (sectionHasMatch) {
                    noResultsMessage.style.display = 'none'; // Hide "No results found"
                } else {
                    noResultsMessage.style.display = 'block'; // Show "No results found"
                }
            });
        });

// Select all divs with the class 'clickable-div'
const clickableDivs = document.querySelectorAll('.workouts2');

// Loop through each div and add an event listener
clickableDivs.forEach(function(div) {
    div.addEventListener('click', function() {
        // Get the URL stored in the data-link attribute and open it in a new tab
        const link = div.getAttribute('data-link');
        window.open(link, '_blank');
    });
});



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

document.addEventListener("DOMContentLoaded", function() {
    const bookmarkDivs = document.querySelectorAll(".workouts3, .workouts3r");

    bookmarkDivs.forEach(div => {
        div.addEventListener("click", function() {
            this.querySelector(".hidden-button").click(); // Simulate button click
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const bookmarkDivs = document.querySelectorAll(".bookmark-div");

    bookmarkDivs.forEach(div => {
        div.addEventListener("click", function() {
            this.querySelector(".bookmark-btn").click(); // Simulate button click
        });
    });
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
