const hamburgerBouton = document.querySelector(".nav-toggler")

const navigation = document.querySelector("nav")

hamburgerBouton.addEventListener("click", toggleNav)

function toggleNav(){
    hamburgerBouton.classList.toggle("active")
    navigation.classList.toggle("active")
}

