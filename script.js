// Activation bouton

const filterButtons = document.querySelectorAll('.filterButton');



for (let i = 0; i < filterButtons.length; i++) {
    filterButtons[i].addEventListener('click', function () {
        filterButtons[i].classList.toggle('active');
    })
};


// Affichage cartes wild

const wildButton = document.getElementById('wild');
const wildCard = document.querySelectorAll('.wild');

console.log(wildCard.length);

wildButton.addEventListener('click', function () {
    for (let i = 0; i < wildCard.length; i++) {
        wildCard[i].classList.toggle('sourceInvisible');
    }
})

// Affichage cartes wilder

const wilderButton = document.getElementById('wilder');
const wilderCard = document.querySelectorAll('.wilder');

console.log(wilderCard.length);

wilderButton.addEventListener('click', function () {
    for (let i = 0; i < wilderCard.length; i++) {
        wilderCard[i].classList.toggle('sourceInvisible');
    }
})

// Affichage cartes rtfm

const rtfmButton = document.getElementById('rtfm');
const rtfmCard = document.querySelectorAll('.rtfm');

console.log(rtfmCard.length);

rtfmButton.addEventListener('click', function () {
    for (let i = 0; i < rtfmCard.length; i++) {
        rtfmCard[i].classList.toggle('typeInvisible');
    }
})

// Affichage cartes article

const articleButton = document.getElementById('article');
const articleCard = document.querySelectorAll('.article');

console.log(articleCard.length);

articleButton.addEventListener('click', function () {
    for (let i = 0; i < articleCard.length; i++) {
        articleCard[i].classList.toggle('typeInvisible');
    }
})

// Affichage cartes video
const videoButton = document.getElementById('video');
const videoCard = document.querySelectorAll('.video');

console.log(videoCard.length);

videoButton.addEventListener('click', function () {
    for (let i = 0; i < videoCard.length; i++) {
        videoCard[i].classList.toggle('typeInvisible');
    }
})

// Affichage cartes jeux
const jeuButton = document.getElementById('jeux');
const jeuCard = document.querySelectorAll('.jeux');

console.log(jeuCard.length);

jeuButton.addEventListener('click', function () {
    for (let i = 0; i < jeuCard.length; i++) {
        jeuCard[i].classList.toggle('typeInvisible');
    }
})


// Affichage "Pas de ressource" texte
// const avec .sourceinvisble et .difficultéinvisible
// si const.legth
