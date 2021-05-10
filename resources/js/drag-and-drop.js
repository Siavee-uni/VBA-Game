const dragula = require("dragula");
dragula([
    document.getElementById('code-snippets'),
    document.getElementById('console'),
])

.on('drag', function (el) {

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
});





