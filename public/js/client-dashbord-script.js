//drop down 
const button =document.querySelector(".drop-down")
const sideToShow = document.querySelector(".button-aside-hide");
sideToShow.style.display="none"
button.addEventListener("click",(event) => {
    if(sideToShow.style.display =="none"){
        sideToShow.style.display="block"
    }
    else{
        sideToShow.style.display="none"
    }
})


const bars =document.querySelector(".bars")
const aside = document.querySelector("aside");
// aside.style.display="none"
bars.addEventListener("click",(event) => {
    if(aside.style.display =="none"){
        aside.style.display="block"
    }
    else{
        aside.style.display="none"
    }
})


const settings =document.querySelector(".settings")
const profil = document.querySelector(".profil-settings");
profil.style.display ="none"
settings.addEventListener("click",(event) => {
    if(profil.style.display =="none"){
        profil.style.display="block"
    }
    else{
        profil.style.display="none"
    }
})