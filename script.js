// Menu Burger ==================================================

const hamburgerBouton = document.querySelector(".nav-toggler")

const navigation = document.querySelector("nav")

hamburgerBouton.addEventListener("click", toggleNav)

function toggleNav() {
    hamburgerBouton.classList.toggle("active")
    navigation.classList.toggle("active")
}

// Dark mode ==================================================

let button = document.querySelector('#mode');
let span = document.querySelector('span');

if (localStorage.getItem('theme')) {
    if (localStorage.getItem('theme') == 'sombre') {
        modeSombre();
    }
}

button.addEventListener('click', () => {
    if (document.body.classList.contains('dark')) {
        document.body.className = '';
        span.textContent = 'Thème sombre';
        localStorage.setItem('theme', 'clair');
    }
    else {
        modeSombre();
    }
});

function modeSombre() {
    document.body.className = 'dark';
    span.textContent = 'Thème clair';
    localStorage.setItem('theme', 'sombre');
}

// Filtre Activation bouton ========================================

const filterButtons = document.querySelectorAll('.filterButton');
console.log(filterButtons.length);

for (let i = 0; i < filterButtons.length; i++) {
    filterButtons[i].addEventListener('click', function () {
        filterButtons[i].classList.toggle('active');
    })
};


// Filtrage des cartes =============================================

// Affichage cartes wild
const wildButton = document.getElementById('wild');
const wildCard = document.querySelectorAll('.wild');

console.log('Nombre de cartes Wild: ' + wildCard.length);

wildButton.addEventListener('click', function () {
    for (let i = 0; i < wildCard.length; i++) {
        wildCard[i].classList.toggle('sourceInvisible');
    }
})

// Affichage cartes wilder
const wilderButton = document.getElementById('wilder');
const wilderCard = document.querySelectorAll('.wilder');

console.log('Nombre de carte Wilder: ' + wilderCard.length);

wilderButton.addEventListener('click', function () {
    for (let i = 0; i < wilderCard.length; i++) {
        wilderCard[i].classList.toggle('sourceInvisible');
    }
})

// Affichage cartes rtfm
const rtfmButton = document.getElementById('rtfm');
const rtfmCard = document.querySelectorAll('.rtfm');

console.log('Nombre de cartes RTFM: ' + rtfmCard.length);

rtfmButton.addEventListener('click', function () {
    for (let i = 0; i < rtfmCard.length; i++) {
        rtfmCard[i].classList.toggle('typeInvisible');
    }
})

// Affichage cartes article
const articleButton = document.getElementById('article');
const articleCard = document.querySelectorAll('.article');

console.log('Nombre de cartes Article: ' + articleCard.length);

articleButton.addEventListener('click', function () {
    for (let i = 0; i < articleCard.length; i++) {
        articleCard[i].classList.toggle('typeInvisible');
    }
})

// Affichage cartes video
const videoButton = document.getElementById('video');
const videoCard = document.querySelectorAll('.video');

console.log('Nombre de cartes Vidéo: ' + videoCard.length);

videoButton.addEventListener('click', function () {
    for (let i = 0; i < videoCard.length; i++) {
        videoCard[i].classList.toggle('typeInvisible');
    }
})

// Affichage cartes jeux
const jeuButton = document.getElementById('jeux');
const jeuCard = document.querySelectorAll('.jeux');

console.log('Nombre de cartes Jeu: ' + jeuCard.length);

jeuButton.addEventListener('click', function () {
    for (let i = 0; i < jeuCard.length; i++) {
        jeuCard[i].classList.toggle('typeInvisible');
    }
})


// Affichage du texte "Pas de ressource" =================================================

function displayNoCardsText() {
    // Const tableau contenant les cartes avec "sourceInvisible" ou "typeInvisible"
    const invisibleCards = document.querySelectorAll('.sourceInvisible, .typeInvisible');
    console.log("Total cartes invisibles:" + " " + invisibleCards.length);

    // Const tableau contenant toutes les cartes
    const card = document.getElementsByClassName('card');
    console.log("Total cartes:" + " " + card.length);

    // Const pour référence au texte 'No ressources'
    const noCardText = document.getElementById('text');

    // Const pour référence au texte 'No ressources' au statut visible
    const noCardTextVisible = document.getElementsByClassName('visible');
    console.log("Text no card visible:" + " " + noCardTextVisible.length);

    // Condition d'ajout ou retrait de la classe visible sur texte 'Pas de ressources'
    if (invisibleCards.length === card.length && noCardTextVisible.length === 0) {
        noCardText.classList.add('visible');
        console.log("Class 'visible' added");
    } else if (invisibleCards.length !== card.length && noCardTextVisible.length === 1) {
        noCardText.classList.remove('visible');
        console.log("Class 'visible' removed");
    } else {
        console.log('No change');
    };
};

// Boucle sur les boutons, clique sur bouton déclenche fonction "Affichage du texte"
for (let i = 0; i < filterButtons.length; i++) {
    filterButtons[i].addEventListener('click', function () {
        console.log("Click ---------------------------------------");
        displayNoCardsText();
    })
};
