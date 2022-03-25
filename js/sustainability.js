// back-to-top

let backToTop = document.querySelector(".back-to-top");
window.onscroll = () => {
    this.scrollY >= 1000 ? backToTop.classList.add("show-back-to-top") : backToTop.classList.remove("show-back-to-top");
}

backToTop.onclick = () => {
    window.scrollTo(0, 0);
}
// Reveal Elements On Scroll

window.addEventListener("scroll", () => {
    document.querySelectorAll(".reveal").forEach(ele => {
        const windowheight = window.innerHeight;
        const revealtop = ele.getBoundingClientRect().top;
        const revealpoint = 70;
        (revealtop < windowheight - revealpoint) ? ele.classList.add("active") : ele.classList.remove("active");
    });
})