const menu = document.querySelector(".menu");
const close = document.querySelector(".m_mobile");
const sliderImages = document.querySelectorAll(".slide");
const arrowLeft = document.querySelector(".left-arrow");
const arrowRight = document.querySelector(".right-arrow");
const numberCounter = document.querySelector(".numbers");
const nav = document.querySelector(".header-container");
let current = 0;

// --------- slider ---------

function reset() {
    for (let i = 0; i < sliderImages.length; i++) {
        sliderImages[i].style.display = "none";
    }
}

function startSlider() {
    reset();
    sliderImages[0].style.display = "block";
}

function slideLeft() {
    reset();
    sliderImages[current -1].style.display = "block";
    current--;
    console.log("left")
}

function slideRight() {
    reset();
    sliderImages[current + 1].style.display = "block";
    current++;
    console.log("right")
} 

function counter() {
    numberCounter.textContent = `${current + 1} / ${sliderImages.length}`;
    console.log("counter")
}

arrowLeft.addEventListener("click", () => {
    if (current === 0) {
        current = sliderImages.length;
    }
    slideLeft();
    counter();
})

arrowRight.addEventListener("click", () => {
    if (current === sliderImages.length-1) {
        current = -1;
    }
    slideRight();
    counter();
})

startSlider();
counter();