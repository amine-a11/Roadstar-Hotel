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

//-------------
const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        // item.scrollLeft += containerWidth - 300;
        item.scrollLeft += 350;
    })

    preBtn[i].addEventListener('click', () => {
        // item.scrollLeft -= containerWidth - 300;
        item.scrollLeft -= 350;
    })
})
// Remove the home-title on scroll
const homeTitle = document.querySelector(".home-title");
window.onscroll = () => {
    this.scrollY >= 100 ? homeTitle.classList.add("hide") : homeTitle.classList.remove("hide");
}
