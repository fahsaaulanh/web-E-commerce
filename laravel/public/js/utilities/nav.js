const openNav = document.querySelector('#open-nav')
const closeNav = document.querySelector('#close-nav')
const navList = document.querySelector('#nav-list')

openNav.addEventListener("click", function() {
    navList.classList.toggle("-translate-y-full")
})
closeNav.addEventListener("click", function() {
    navList.classList.toggle("-translate-y-full")
})
