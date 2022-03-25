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

// back-to-top

let backToTop = document.querySelector(".back-to-top");
window.onscroll = () => {
    this.scrollY >= 1000 ? backToTop.classList.add("show-back-to-top") : backToTop.classList.remove("show-back-to-top");
}

backToTop.onclick = () => {
    window.scrollTo(0, 0);
}
