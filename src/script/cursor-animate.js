const circle = document.querySelector('#circle');
const overlayBackground = document.querySelector('#overlay');
const hoverlayBackground = document.querySelector('.overlay-background__hover');
const clickBackground = document.querySelector('.overlay-background__click');
const goBackAnchor = document.querySelector('#go-back');
const lowerLayLeft = document.querySelector('#lowerlay-left');
const lowerLayRight = document.querySelector('#lowerlay-right');
let circle_cursor_placement = 13;

document.addEventListener('contextmenu', event => event.preventDefault());

anchorModified.forEach((anchor) => {
    anchor.addEventListener('mouseover', () => {
        addClass(circle, 'circle__hover');
        circle_cursor_placement = 30;
        hoverlayBackground.style.opacity = '1';

        if (lowerLayLeft != null && lowerLayRight != null) {
            lowerLayLeft.style.opacity = 0.3;
            lowerLayRight.style.opacity = 0.3;
        }
    });

    anchor.addEventListener('mouseleave', () => {
        remClass(circle, 'circle__hover');
        circle_cursor_placement = 13;

        if (clickBackground != null) {
            hoverlayBackground.style.opacity = '1';
        } else {
            hoverlayBackground.style.opacity = '-1';
        }

        if (lowerLayLeft != null && lowerLayRight != null) {
            lowerLayLeft.style.opacity = 1;
            lowerLayRight.style.opacity = 1;
        }
    })
})

if (goBackAnchor != null) {
    goBackAnchor.addEventListener('mouseover', () => {
        addClass(circle, 'circle__hover');
        circle_cursor_placement = 30;
    });

    goBackAnchor.addEventListener('mouseleave', () => {
        remClass(circle, 'circle__hover');
        circle_cursor_placement = 13;
    })
}

jQuery(document).ready(function () {

    var mouseX = 0,
        mouseY = 0;
    var xp = 0,
        yp = 0;

    $(document).mousemove(function (e) {
        mouseX = e.pageX - circle_cursor_placement;
        mouseY = e.pageY - circle_cursor_placement;
    });

    setInterval(function () {
        xp += ((mouseX - xp) / 5);
        yp += ((mouseY - yp) / 5);
        $("#circle").css({
            left: xp + 'px',
            top: yp + 'px'
        });
    }, 15);

});

document.addEventListener('mouseleave', function () {
    addClass(circle, 'circle--hide')
})

document.addEventListener('mouseover', function () {
    remClass(circle, 'circle--hide');
})

document.addEventListener('mousemove', function () {
    repClass(circle, 'circle--hide', 'circle--show');
})