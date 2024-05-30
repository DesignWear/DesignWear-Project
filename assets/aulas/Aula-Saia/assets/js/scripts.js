document.addEventListener('DOMContentLoaded', () => {
    const galleries = document.querySelectorAll('.gallery');

    document.addEventListener('click', event => {
        galleries.forEach(gallery => {
            const mainImage = gallery.querySelector('.image-container img');
            const thumbnails = gallery.querySelector('.thumbnails');
            const imageContainers = gallery.querySelectorAll('.image-container');

            if (!gallery.contains(event.target)) {
                imageContainers.forEach(container => {
                    container.style.width = '300px';
                    container.style.height = '200px';
                });
                thumbnails.classList.add('hidden');
            }
        });
    });

    galleries.forEach(gallery => {
        const mainImage = gallery.querySelector('.image-container img');
        const thumbnails = gallery.querySelector('.thumbnails');
        const imageContainers = gallery.querySelectorAll('.image-container');

        mainImage.addEventListener('click', event => {
            event.stopPropagation();

            galleries.forEach(otherGallery => {
                if (otherGallery !== gallery) {
                    const otherMainImage = otherGallery.querySelector('.image-container img');
                    const otherThumbnails = otherGallery.querySelector('.thumbnails');
                    const otherImageContainers = otherGallery.querySelectorAll('.image-container');

                    otherImageContainers.forEach(container => {
                        container.style.width = '300px';
                        container.style.height = '200px';
                    });
                    otherThumbnails.classList.add('hidden');
                }
            });

            mainImage.parentElement.style.width = '100%';
            mainImage.parentElement.style.height = '100%';
            thumbnails.classList.remove('hidden');
        });

        thumbnails.querySelectorAll('img').forEach(thumbnail => {
            thumbnail.addEventListener('click', event => {
                event.stopPropagation();
                mainImage.src = thumbnail.src;
            });
        });
    });
});
