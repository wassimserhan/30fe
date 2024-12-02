// Select the LightGallery container and the Load All button
const galleryContainer = document.querySelector('.lightgallery');
const loadAllBtn = document.getElementById('loadAllBtn');

// Only proceed if the gallery container and load button exist
if (galleryContainer && loadAllBtn) {
    // Function to initialize LightGallery with the first 3 images
    const initializeGallery = () => {
        const allLinks = Array.from(galleryContainer.querySelectorAll('a'));
        const initialLinks = allLinks.slice(0, 3);

        // Hide all images except the first 3
        allLinks.forEach((link, index) => {
            if (index >= 3) {
                link.style.display = 'none';
            }
        });

        // Initialize LightGallery
        const galleryInstance = lightGallery(galleryContainer, {
            dynamic: true,
            dynamicEl: initialLinks.map(link => ({
                src: link.getAttribute('href'),
                thumb: link.querySelector('img').getAttribute('src'),
            })),
            loop: false, // Prevent looping
        });

        // Custom behavior to explicitly prevent looping
        galleryContainer.addEventListener('lgBeforeNextSlide', (event) => {
            const { index } = event.detail;
            const totalSlides = galleryInstance.getItems().length;

            // Prevent navigation beyond the last slide
            if (index >= totalSlides - 1) {
                event.preventDefault();
            }
        });

        // Dynamically load more slides when reaching the last slide
        galleryContainer.addEventListener('lgAfterSlide', (event) => {
            const { index } = event.detail;
            const totalSlides = galleryInstance.getItems().length;

            if (index === totalSlides - 1 && totalSlides < allLinks.length) {
                const nextBatch = allLinks.slice(totalSlides, totalSlides + 3); // Load next 3 images

                nextBatch.forEach(link => {
                    link.style.display = ''; // Reveal hidden link
                    galleryInstance.addSlide({
                        src: link.getAttribute('href'),
                        thumb: link.querySelector('img').getAttribute('src'),
                    });
                });
            }
        });
    };

    // Event listener for the Load All button
    loadAllBtn.addEventListener('click', () => {
        const allLinks = Array.from(galleryContainer.querySelectorAll('a'));

        // Show all hidden images
        allLinks.forEach(link => {
            link.style.display = ''; // Reveal all links
        });

        // Destroy the current LightGallery instance and reinitialize with all images
        const dynamicEl = allLinks.map(link => ({
            src: link.getAttribute('href'),
            thumb: link.querySelector('img').getAttribute('src'),
        }));

        lightGallery(galleryContainer).destroy();

        const galleryInstance = lightGallery(galleryContainer, {
            dynamic: true,
            dynamicEl,
            loop: false, // Ensure looping is disabled
        });

        // Prevent navigation beyond the last slide in the fully loaded gallery
        galleryContainer.addEventListener('lgBeforeNextSlide', (event) => {
            const { index } = event.detail;
            const totalSlides = galleryInstance.getItems().length;

            if (index >= totalSlides - 1) {
                event.preventDefault();
            }
        });

        // Hide the Load All button after all images are loaded
        loadAllBtn.style.display = 'none';
    });

    // Initialize LightGallery with the first 3 images
    initializeGallery();
}
