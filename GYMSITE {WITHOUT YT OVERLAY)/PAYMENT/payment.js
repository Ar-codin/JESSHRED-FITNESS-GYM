document.getElementById('nextBtn1').addEventListener('click', function() {
      document.getElementById('step1').style.display = 'none'; // Hide step 1
      document.getElementById('step2').style.display = 'block'; // Show step 2
    });

    document.getElementById('prevBtn2').addEventListener('click', function() {
      document.getElementById('step2').style.display = 'none'; // Hide step 2
      document.getElementById('step1').style.display = 'block'; // Show step 1
    });

    document.getElementById('nextBtn2').addEventListener('click', function() {
      document.getElementById('step2').style.display = 'none'; // Hide step 2
      document.getElementById('step3').style.display = 'block'; // Show step 3
    });

    document.getElementById('prevBtn3').addEventListener('click', function() {
      document.getElementById('step3').style.display = 'none'; // Hide step 3
      document.getElementById('step2').style.display = 'block'; // Show step 2
    });
        
    document.getElementById('nextBtn3').addEventListener('click', function() {
      document.getElementById('step3').style.display = 'none'; // Hide step 3
      document.getElementById('step4').style.display = 'block'; // Show step 4
    });    
        
    document.getElementById('prevBtn4').addEventListener('click', function() {
      document.getElementById('step4').style.display = 'none'; // Hide step 4
      document.getElementById('step3').style.display = 'block'; // Show step 3
    });   



// Function to show an overlay
    function showOverlay(overlayId) {
      document.getElementById(overlayId).style.display = 'flex'; // Use flex to center the content
    }

    // Function to close an overlay
    function closeOverlay(overlayId) {
      document.getElementById(overlayId).style.display = 'none';
    }

 // JavaScript for modal functionality
        const images = document.querySelectorAll('.overlay-content img');
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