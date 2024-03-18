document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".carousel");
    const cards = document.querySelectorAll(".cardsCarousel");
    const prevButton = document.querySelector(".prev-button");
    const nextButton = document.querySelector(".next-button");

    let currentIndex = 0;
    const cardWidth = cards[0].offsetWidth;
    const totalCards = cards.length;
    const maxIndex = totalCards - 1;

    function updateCarousel() {
        const offset = -currentIndex * cardWidth;
        carousel.style.transform = `translateX(${offset}px)`;
    }

    function nextSlide() {
        if (currentIndex < maxIndex) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    }

    function prevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = maxIndex;
        }
        updateCarousel();
    }

    nextButton.addEventListener("click", nextSlide);
    prevButton.addEventListener("click", prevSlide);
});
