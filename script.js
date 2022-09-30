// Activation bouton

const hamburgerBouton = document.querySelector(".nav-toggler")

const navigation = document.querySelector("nav")

hamburgerBouton.addEventListener("click", toggleNav)

function toggleNav(){
    hamburgerBouton.classList.toggle("active")
    navigation.classList.toggle("active")
}
let button = document.querySelector('#mode');
let span   = document.querySelector('span');

if(localStorage.getItem('theme')){
  if(localStorage.getItem('theme') == 'sombre') {
    modeSombre();
  }
}

button.addEventListener('click', () => {
  if(document.body.classList.contains('dark')) {
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

const filterButtons = document.querySelectorAll('.filterButton');
console.log(filterButtons.length);

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

// Mettre dans une fonction et appeler cette fonction à chaque clique sur bouton filtre 



function displayNoCardsText() {
    const sourceInvisible = document.querySelectorAll('.sourceInvisible');
    console.log(sourceInvisible.length);

    const typeInvisible = document.querySelectorAll('.typeInvisible');
    console.log(typeInvisible.length);

    const invisibleCards = typeInvisible.length + sourceInvisible.length;
    console.log(invisibleCards);

    //const invisible = [].concat(sourceInvisible, typeInvisible);    // const invisible avec array contenant .sourceinvisble + .difficultéinvisible
    //console.log(invisible.length);

    const card = document.getElementsByClassName('card');   // const card avec .card
    console.log(card.length);

    const noCardsDisplayedText = document.querySelectorAll('.noCard');   // const paragraphe 'no ressource'
    console.log(noCardsDisplayedText.length);

    const text = document.getElementById('text');

    // si const.length invisible = const card => add class paragraphe visible

    if (invisibleCards === card.length) {
        text.classList.toggle('visible');
        console.log("success");
    }
    else {
        console.log('fail');
        text.classList.toggle('invisible');
    };
};

for (let i = 0; i < filterButtons.length; i++) {
    filterButtons[i].addEventListener('click', function () {
        displayNoCardsText();
    })
};
