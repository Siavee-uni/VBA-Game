const dragula = require("dragula");
const codeBlocks = document.getElementById('code-snippets');
const console = document.getElementById('console');
dragula([
    codeBlocks,
    console,
], {
    copy: true,
    moves: function (el, container) {
        return el.parentElement === codeBlocks;
    }
})

dragula([console], {
    removeOnSpill: true
});

/*.on('drag', function (el) {

    // add 'is-moving' class to element being dragged
    el.classList.add('is-moving');
})
.on('dragend', function (el) {

    // remove 'is-moving' class from element after dragging has stopped
    el.classList.remove('is-moving');

    // add the 'is-moved' class for 600ms then remove it
    window.setTimeout(function () {
        el.classList.add('is-moved');
        window.setTimeout(function () {
            el.classList.remove('is-moved');
        }, 600);
    }, 100);
})*/;





