const next = document.getElementById("next");
const prev = document.getElementById("prev");
const slides = document.querySelectorAll(".slider-img");
const nbOfImg = slides.length;
let currSlide = 0;
next.addEventListener("click", () => nextSlide("next"));
prev.addEventListener("click", () => nextSlide("prev"));
function nextSlide(arg) {
    if (arg === "next") {
        currSlide = (++currSlide) % nbOfImg;
        slides.forEach(ele => {
            if (ele.classList.contains("active-img")) {
                ele.classList.remove("active-img");
            }
        })
        slides[currSlide].classList.add("active-img");
    } else {
        currSlide = (--currSlide + nbOfImg) % nbOfImg;
        slides.forEach(ele => {
            if (ele.classList.contains("active-img")) {
                ele.classList.remove("active-img");
            }
        })
        slides[currSlide].classList.add("active-img");
    }
}


// back-to-top

let backToTop = document.querySelector(".back-to-top");
window.onscroll = () => {
    this.scrollY >= 1000 ? backToTop.classList.add("show-back-to-top") : backToTop.classList.remove("show-back-to-top");
}

backToTop.onclick = () => {
    window.scrollTo(0, 0);
}
