<div class="back-to-top">
    <img src="../images/arrow.png" alt="">	
</div>
<script>
    // back-to-top

let backToTop = document.querySelector(".back-to-top");
window.onscroll = () => {
    this.scrollY >= 1000 ? backToTop.classList.add("show-back-to-top") : backToTop.classList.remove("show-back-to-top");
}

backToTop.onclick = () => {
    window.scrollTo(0, 0);
}

</script>
