require('./bootstrap');
require('./drag-and-drop');
require('alpinejs');
let Turbolinks = require("turbolinks");
Turbolinks.start();

/*let btn = document.getElementById("doTheThing"),
    under = document.querySelector(".underlay"),
    over = document.querySelector(".overlay"),
    pos = {
        under: {
            x: 0,
            y: 100
        },
        over: {
            x: 100,
            y: 0
        }
    };
btn.addEventListener("click", e => {
    let w = _.clamp(under.offsetWidth + 50, 0, 200) + "px";
    pos.under.x += 100; // move left to right

    pos.under.y -= 100; // move bottom to top

    pos.over.x -= 100; // move right to left

    pos.over.y += 100; // move top to bottom

    under.style.backgroundPosition = pos.under.x + "% " + pos.under.y + "%";
    over.style.backgroundPosition = pos.over.x + "% " + pos.over.y + "%";
    under.style.width = w;
    over.style.width = w;
});*/

/*all_modals = ['main-modal', 'another-modal']
all_modals.forEach((modal)=>{
    const modalSelected = document.querySelector('.'+modal);
    modalSelected.classList.remove('fadeIn');
    modalSelected.classList.add('fadeOut');
    modalSelected.style.display = 'none';
})
const modalClose = (modal) => {
    const modalToClose = document.querySelector('.'+modal);
    modalToClose.classList.remove('fadeIn');
    modalToClose.classList.add('fadeOut');
    setTimeout(() => {
        modalToClose.style.display = 'none';
    }, 500);
}

const openModal = (modal) => {
    const modalToOpen = document.querySelector('.'+modal);
    modalToOpen.classList.remove('fadeOut');
    modalToOpen.classList.add('fadeIn');
    modalToOpen.style.display = 'flex';
}*/
