Vue.component('navigation-bar', {
    template: `
<nav class="navbar">

<div class="navbar__logo">
<li id="anchor-animate" class="anchor-animate anchor-animate--fadein">
    <a id="anchor" go-to="index">
        <img src="app/assets/icon/logo-long.svg" class="logo-image" alt="Elite Snaps Logo">
    </a>
</li>
</div>

<div class="navbar__anchor navbar__anchor--desktop">
<ul>
    <li id="anchor-animate" class="anchor-animate anchor-animate--fadein hoverlay">
        <a id="anchor" go-to="index">Home</a>
    </li>
    <li id="anchor-animate" class="anchor-animate anchor-animate--fadein">
        <a id="anchor" go-to="photography">Photography
        </a>
    </li>
    <li id="anchor-animate" class="anchor-animate anchor-animate--fadein">
        <a id="anchor" go-to="videography">Videography</a>

    </li>
    <li id="anchor-animate" class="anchor-animate anchor-animate--fadein">
        <a id="anchor" go-to="team">Team</a>
    </li>
    <li id="anchor-animate" class="anchor-animate anchor-animate--fadein">
        <a id="anchor" go-to="contact">Contact Us</a>
    </li>
</ul>
</div>

<div class="navbar__anchor navbar__anchor--mobile" id="anchor-animate">
<div id="sidebar__btn" class="menu">
    <span></span>
    <span></span>
    <span></span>
</div>

<div class="sidebar">
    <div class="sidebar__close">
        <div id="sidebar__close__btn" class="sidebar__close__btn">
            <img src="app/assets/component/close.svg" alt="Close icon">
        </div>
    </div>

    <div class="sidebar__anchor">
        <ul>
            <li id="anchor-animate--side"><a id="anchor_mobile" go-to="index">Home</a></li>
            <li id="anchor-animate--side"><a id="anchor_mobile" go-to="photography">Photography</a></li>
            <li id="anchor-animate--side"><a id="anchor_mobile" go-to="videography">Videography</a></li>
            <li id="anchor-animate--side"><a id="anchor_mobile" go-to="team">Team</a></li>
            <li id="anchor-animate--side"><a id="anchor_mobile" go-to="contact">Contact Us</a></li>
        </ul>
    </div>
</div>
</div>

</nav>`
});


new Vue({
    el: '#app'
})