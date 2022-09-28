const filterButton = document.getElementsByClassName('.filter_button');

console.log('Dehors');

filterButton.addEventListener("click", function () {
    console.log('Dedans');
    filterButton.classList.toggle("active");
});


const button = document.getElementById('btnChnage');

button.addEventListener('click', function () {
    const lis = document.getElementsByClassName('menu'); // class=menu horizontal

    for (const li of lis) {
        li.classList.toggle('horizontal');
    }
});
