//the header
const nav = document.querySelector('.fixed-nav');
const header = document.querySelector('header');
const options = {
    rootMargin: '-150px'
}
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            nav.classList.remove('change-status')
        }
        else {
            nav.classList.add('change-status')
        }
    })
}, options)

observer.observe(header)

// Remove the home-title on scroll
const homeTitle = document.querySelector(".home-title");
//back to top
let backToTop = document.querySelector(".back-to-top");
window.onscroll = () => {
    if (this.scrollY >= 100) {
        homeTitle.classList.remove("show");
        homeTitle.classList.add("hide");
    } else {
        homeTitle.classList.remove("hide");
        homeTitle.classList.add("show");
    }
    this.scrollY >= 1000 ? backToTop.classList.add("show-back-to-top") : backToTop.classList.remove("show-back-to-top");
}

backToTop.onclick = () => {
    window.scrollTo(0, 0);
}
