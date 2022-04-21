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