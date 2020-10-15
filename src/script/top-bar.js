const animateAnchor = document.querySelectorAll('#anchor-animate');
const anchorModified = document.querySelectorAll('#anchor');
const overlay = document.querySelector('#overlay');

anchorModified.forEach((anchor) => {
    const page = window.location.href.split('/').pop();
    const go_to = anchor.getAttribute('go-to').toLowerCase();

    if (page == go_to) {
        addClass(anchor, 'active');
    }

    anchor.addEventListener('click', () => {
        circle.style.opacity = 0;

        animateAnchor.forEach((anchor_fadeout) => {
            anchor_fadeout.style.pointerEvents = 'none';
            addClass(anchor_fadeout, 'anchor-animate--fadeout');
            addClass(menuBtn, 'anchor-animate--fadeout');
            if (content != null) {
                addClass(content, 'anchor-animate--downin');
            }
        });

        setTimeout(function () {
            if (lowerLayLeft != null && lowerLayRight != null) {
                lowerLayLeft.style.opacity = 0;
                lowerLayRight.style.opacity = 0;
            }

            addClass(overlay, 'overlay-background__click');
        }, 700);



        setTimeout(function () {
            document.querySelector('.overlay-background__click').style.opacity = 1;
        }, 1500);

        if (!go_to.includes('javascript')) {
            setTimeout(function () {
                window.location.href = go_to;
            }, 2700);
        }

    })
});

setTimeout(function () {
    repClass(overlay, 'overlay-background__load', 'overlay-background');
}, 1000);