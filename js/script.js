const menu = document.querySelector('#menu-btn');
const header = document.querySelector('.header');

if (menu && header) {
    menu.addEventListener('click', () => {
        menu.classList.toggle('fa-times');
        header.classList.toggle('active');
        document.body.classList.toggle('active');
    });
}

window.onscroll = () => {
    if (window.innerWidth < 991 && menu && header) {
        menu.classList.remove('fa-times');
        header.classList.remove('active');
        document.body.classList.remove('active');
    }

    document.querySelectorAll('section').forEach(sec => {
        const top = window.scrollY;
        const offset = sec.offsetTop - 150;
        const height = sec.offsetHeight;
        const id = sec.getAttribute('id');

        if (id && top >= offset && top < offset + height) {
            document.querySelectorAll('.header .navbar a').forEach(link => {
                link.classList.remove('active');
            });
            document.querySelectorAll(`.header .navbar a[href*="${id}"]`).forEach(link => {
                link.classList.add('active');
            });
        }
    });
};
