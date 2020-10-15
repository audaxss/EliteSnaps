const goBack = document.querySelector('#go-back');
const content = document.querySelector('#content');
goBack.addEventListener('click', () => {
    document.querySelectorAll('.line__context').forEach((a) => {
        a.style.zIndex = -1;
        circle.style.opacity = 0;

        animateAnchor.forEach((anchor_fadeout) => {
            addClass(anchor_fadeout, 'anchor-animate--fadeout');
            addClass(menuBtn, 'anchor-animate--fadeout');
            addClass(content, 'anchor-animate--downin');
            if (lowerLayLeft != null && lowerLayRight != null) {
                lowerLayLeft.style.opacity = 0;
                lowerLayRight.style.opacity = 0;
            }
        });

        setTimeout(function () {
            addClass(a, 'line__context--fade');

        }, 1400);

        setTimeout(function () {
            addClass(overlay, 'overlay-background__click');
        }, 1500)

        setTimeout(function () {
            window.history.go(-1);
            return false;
        }, 2700);
    })
})