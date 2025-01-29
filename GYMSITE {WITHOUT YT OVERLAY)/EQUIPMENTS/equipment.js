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
        
        
const containers = document.querySelectorAll('#section1, #section2'); // Use querySelectorAll for multiple elements

        // Add 'wheel' event listeners to each container
        containers.forEach(container => {
            container.addEventListener('wheel', function(event) {
                // Scroll horizontally instead of vertically
                container.scrollLeft += event.deltaY;

                // Prevent default vertical scroll behavior to avoid page scroll
                event.preventDefault();
            });
        });

document.addEventListener('scroll', () => {
        const header = document.querySelector('header');
            if (window.scrollY > 0) { // Adjust scroll distance as needed
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

// JavaScript for modal functionality
        const images = document.querySelectorAll('.equipments2 img');
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeModal = document.querySelector('.modal .close');

        // Show modal when image is clicked
        images.forEach(image => {
            image.addEventListener('click', () => {
                modal.style.display = 'flex';
                modalImage.src = image.src; // Set modal image to clicked image
            });
        });

        // Close modal when the close button is clicked
        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Close modal when clicking outside the image
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });