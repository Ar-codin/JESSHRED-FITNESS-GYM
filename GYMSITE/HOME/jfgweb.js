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