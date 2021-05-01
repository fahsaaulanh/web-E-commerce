const topNavbar = document.querySelector("#navbar");
const headerText = document.getElementById("header-text");
const headerBtn = document.getElementById("header-btn");

window.addEventListener("scroll", function () {
    const wScroll = this.scrollY;

    headerText.style.transform = `translateY(${wScroll / 2.5}%)`;
    headerBtn.style.transform = `translateY(${wScroll / 4}%)`;

    if (wScroll > topNavbar.clientHeight / 2) {
        topNavbar.classList.add("onscroll");
    } else {
        topNavbar.classList.remove("onscroll");
    }

    if (wScroll > 550) {
        topNavbar.classList.add("onscroll-shadow")
    } else {
        topNavbar.classList.remove("onscroll-shadow")
    }
});
