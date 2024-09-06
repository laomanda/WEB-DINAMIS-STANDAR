document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('details img');

    function checkVisibility() {
        images.forEach(img => {
            const rect = img.getBoundingClientRect();
            if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                img.classList.add('animate');
            }
        });
    }
    checkVisibility();

    window.addEventListener('scroll', checkVisibility);
});