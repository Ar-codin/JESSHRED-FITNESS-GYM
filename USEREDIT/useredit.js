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