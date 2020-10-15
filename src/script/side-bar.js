const animateAnchorSideBar = document.querySelectorAll('#anchor-animate--side');
const anchorMobile = document.querySelectorAll('#anchor_mobile');
const sidebarCloseBtn = document.querySelector('#sidebar__close__btn');
const sidebarBtn = document.querySelector('#sidebar__btn');
const logoImage = document.querySelector('.logo-image');
const sidebar = document.querySelector('.sidebar');
const main = document.querySelector('.main');
const menuBtn = document.querySelector('.menu');

const addClass = (element, class_name) => {
    element.classList.add(class_name);
}

const remClass = (element, class_name) => {
    element.classList.remove(class_name);
}

const repClass = (element, class_name_current, class_name_replace) => {
    element.classList.replace(class_name_current, class_name_replace);
}

anchorMobile.forEach((anchorMobile) => {
    const page = window.location.href.split('/').pop();
    const go_to = anchorMobile.getAttribute('go-to').toLowerCase();

    if (page == go_to) {
        anchorMobile.classList.add('active');
    }

    sidebarBtn.addEventListener('click', () => {

        setTimeout(() => {
            addClass(sidebarCloseBtn, 'sidebar__close__btn--unfade');
        }, 900);

        addClass(main, 'main--margin-right');

        if (sidebar.classList.contains('sidebar--close')) {
            repClass(sidebar, 'sidebar--close', 'sidebar--open');
        } else {
            addClass(sidebar, 'sidebar--open');
        }

        animateAnchorSideBar.forEach((down_out) => {
            remClass(down_out, 'anchor-animate--downin');
            addClass(down_out, 'anchor-animate--downout');
        });

    })

    anchorMobile.addEventListener('click', () => {
        remClass(sidebarCloseBtn, 'sidebar__close__btn--unfade');

        animateAnchorSideBar.forEach((down_in) => {
            remClass(down_in, 'anchor-animate--downout');
            addClass(down_in, 'anchor-animate--downin');
        });

        setTimeout(function () {
            if (lowerLayLeft != null) {
                lowerLayLeft.style.opacity = 0;
            }
            overlay.classList.add('overlay-background__click--mobile');
        }, 100)

        if (!go_to.includes('javascript')) {
            setTimeout(function () {
                window.location.href = go_to;
            }, 1400);
        }
    });

    sidebarCloseBtn.addEventListener('click', () => {

        remClass(sidebarCloseBtn, 'sidebar__close__btn--unfade');

        animateAnchorSideBar.forEach((down_in) => {
            remClass(down_in, 'anchor-animate--downout');
            addClass(down_in, 'anchor-animate--downin');
        });

        setTimeout(function () {
            remClass(main, 'main--margin-right');
            repClass(sidebar, 'sidebar--open', 'sidebar--close');
        }, 1200);

        setTimeout(function () {
            remClass(logoImage, 'logo-image--fade');
        }, 1500);

        setTimeout(function () {
            remClass(menuBtn, 'menu--fade');
        }, 1600);


    })

});