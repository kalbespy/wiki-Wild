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
        wildCard[i].classList.toggle('invisible');
    }
})

// Affichage cartes wilder

const wilderButton = document.getElementById('wilder');
const wilderCard = document.querySelectorAll('.wilder');

console.log(wilderCard.length);

wilderButton.addEventListener('click', function () {
    for (let i = 0; i < wilderCard.length; i++) {
        wilderCard[i].classList.toggle('invisible');
    }
})

// Affichage cartes facile

const facileButton = document.getElementById('facile');
const facileCard = document.querySelectorAll('.facile');

console.log(wilderCard.length);

facileButton.addEventListener('click', function () {
    for (let i = 0; i < facileCard.length; i++) {
        facileCard[i].classList.toggle('invisible');
    }
})

// Affichage cartes intermédiaire

const interButton = document.getElementById('intermediaire');
const interCard = document.querySelectorAll('.intermediaire');

console.log(interCard.length);

interButton.addEventListener('click', function () {
    for (let i = 0; i < interCard.length; i++) {
        interCard[i].classList.toggle('invisible');
    }
})

// Affichage cartes difficile
const difficileButton = document.getElementById('difficile');
const difficileCard = document.querySelectorAll('.difficile');

console.log(difficileCard.length);

difficileButton.addEventListener('click', function () {
    for (let i = 0; i < difficileCard.length; i++) {
        difficileCard[i].classList.toggle('invisible');
    }
})