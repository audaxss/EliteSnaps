const mediaQuery = window.matchMedia('(min-width: 740px )')

function ScreenSize(e) {
    if (e.matches) {
        const options = {
            damping: 0.04,
            delegateTo: document
        };

        const scrollbar = Scrollbar.init(document.querySelector('.main'), options);
        scrollbar.addListener(({
            offset
        }) => {
            document.querySelector('.navbar').style.top = offset.y + 'px';
            document.querySelector('.navbar').style.left = offset.x + 'px';
            document.querySelector('.sidebar').style.top = offset.y + 'px';
            document.querySelector('.sidebar').style.right = offset.x + 'px';
        });
    } else {
        Scrollbar.destroy();
    }
}

mediaQuery.addListener(ScreenSize);
ScreenSize(mediaQuery);