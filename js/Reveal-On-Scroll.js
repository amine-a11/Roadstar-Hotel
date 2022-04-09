window.addEventListener("scroll", () => {
    document.querySelectorAll(".reveal").forEach(ele => {
        const windowheight = window.innerHeight;
        const revealtop = ele.getBoundingClientRect().top;
        const revealpoint = 10;
        (revealtop < windowheight - revealpoint) ? ele.classList.add("active") : ele.classList.remove("active");
    });
})