


// Select the LightGallery container and the Load All button
const galleryContainer = document.querySelector('.lightgallery');
const loadAllBtn = document.getElementById('loadAllBtn');

// Only proceed if the gallery container and load button exist
if (galleryContainer && loadAllBtn) {
    const initializeGallery = () => {
        const allLinks = Array.from(galleryContainer.querySelectorAll('a'));
        const initialLinks = allLinks.slice(0, 3);

        allLinks.forEach((link, index) => {
            if (index >= 3) {
                link.style.display = 'none';
            }
        });

        const galleryInstance = lightGallery(galleryContainer, {
            dynamic: true,
            dynamicEl: initialLinks.map(link => ({
                src: link.getAttribute('href'),
                thumb: link.getAttribute('data-thumb') || link.querySelector('img')?.getAttribute('src')
            })),
            plugins: [lgZoom, lgThumbnail, lgShare],
            share: true,
            sharePlugin: {
                facebook: true,
                twitter: true,
                pinterest: true,
                download: false, // or true if you want the download button
            },
            loop: false,
        });

        galleryContainer.addEventListener('lgBeforeNextSlide', (event) => {
            const { index } = event.detail;
            const totalSlides = galleryInstance.getItems().length;
            if (index >= totalSlides - 1) {
                event.preventDefault();
            }
        });

        galleryContainer.addEventListener('lgAfterSlide', (event) => {
            const { index } = event.detail;
            const totalSlides = galleryInstance.getItems().length;
            if (index === totalSlides - 1 && totalSlides < allLinks.length) {
                const nextBatch = allLinks.slice(totalSlides, totalSlides + 3);
                nextBatch.forEach(link => {
                    link.style.display = '';
                    galleryInstance.addSlide({
                        src: link.getAttribute('href'),
                        thumb: link.querySelector('img')?.getAttribute('src'),
                    });
                });
            }
        });
    };

    loadAllBtn.addEventListener('click', () => {
        const allLinks = Array.from(galleryContainer.querySelectorAll('a'));
        allLinks.forEach(link => (link.style.display = ''));

        lightGallery(galleryContainer).destroy();

        const galleryInstance = lightGallery(galleryContainer, {
            dynamic: true,
            dynamicEl: allLinks.map(link => ({
                src: link.getAttribute('href'),
                thumb: link.getAttribute('data-thumb') || link.querySelector('img')?.getAttribute('src'),
            })),
            plugins: [lgZoom, lgThumbnail, lgShare],
            share: true,
            sharePlugin: {
                facebook: true,
                twitter: true,
                pinterest: true,
                download: false,
            },
            loop: false,
        });

        galleryContainer.addEventListener('lgBeforeNextSlide', (event) => {
            const { index } = event.detail;
            const totalSlides = galleryInstance.getItems().length;
            if (index >= totalSlides - 1) {
                event.preventDefault();
            }
        });

        loadAllBtn.style.display = 'none';
    });

    initializeGallery();
}