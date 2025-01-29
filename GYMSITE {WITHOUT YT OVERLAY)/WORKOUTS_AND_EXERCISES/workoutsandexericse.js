
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


const containers = document.querySelectorAll('#sectionone, #section1, #section2, #section3, #section4, #section5, #section6, #section7'); // Use querySelectorAll for multiple elements

        // Add 'wheel' event listeners to each container
        containers.forEach(container => {
            container.addEventListener('wheel', function(event) {
                // Scroll horizontally instead of vertically
                container.scrollLeft += event.deltaY;

                // Prevent default vertical scroll behavior to avoid page scroll
                event.preventDefault();
            });
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

