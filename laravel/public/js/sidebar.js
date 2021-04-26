const sidebarToggler = document.querySelector('#sidebar-toggler');
const sidebar = document.querySelector('#sidebar');
const sidebarOverlayCloser = document.querySelector('.overlay-close')
const sidebarLinks = document.querySelectorAll('.nav-link');

sidebarToggler.addEventListener('click', function() {
    sidebar.classList.toggle('-translate-x-full')
    sidebarOverlayCloser.classList.remove('hidden')
})
sidebarOverlayCloser.addEventListener('click', function() {
    sidebar.classList.toggle('-translate-x-full')
    sidebarOverlayCloser.classList.add('hidden')
})

sidebarLinks.forEach(links => {
    links.addEventListener("click", function() {
        sidebarOverlayCloser.classList.add("hidden");
        sidebar.classList.toggle('-translate-x-full')
    })
})