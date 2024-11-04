let currentIndex = 0;

function showSlide(index) {
    const images = document.querySelectorAll('.image');
    if (index >= images.length) currentIndex = 0; 
    if (index < 0) currentIndex = images.length - 1; 
    
    images.forEach((img, i) => {
        img.classList.remove('active');
        if (i === currentIndex) img.classList.add('active');
    });
}

function changeSlide(step) {
    currentIndex += step;
    showSlide(currentIndex);
}

// Initial display
showSlide(currentIndex);