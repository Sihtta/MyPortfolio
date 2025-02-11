document.addEventListener('DOMContentLoaded', () => {
    const menubar = document.querySelector('#menu');
    const Navbar = document.querySelector('.navbar');
    const section = document.querySelectorAll('section');
    const navlink = document.querySelectorAll('header nav a');
    const cards = document.querySelectorAll('.card');
    const skillCards = document.querySelectorAll('.skill-card');
    const contactSection = document.querySelector('.contact');
    const sectionTitles = document.querySelectorAll('.text-animation h2');
    const timelineItems = document.querySelectorAll('.timeline-item');

    menubar.onclick = () => {
        menubar.classList.toggle('bx-x');
        Navbar.classList.toggle('active');
    };

    let debounceTimeout;
    const onScroll = () => {
        const top = window.scrollY;

        section.forEach(sec => {
            let offset = sec.offsetTop - 150;
            let height = sec.offsetHeight;
            let id = sec.getAttribute('id');
            if (top > offset && top < offset + height) {
                sec.classList.add('start-animation');
                navlink.forEach(links => {
                    links.classList.remove('active');
                    document.querySelector(`header nav a[href*=${id}]`).classList.add('active');
                });
            }
        });

        const header = document.querySelector('.header');
        header.classList.toggle('sticky', top > 100);

        menubar.classList.remove('bx-x');
        Navbar.classList.remove('active');

        const triggerBottom = window.innerHeight * 0.9;
        cards.forEach(card => {
            const cardTop = card.getBoundingClientRect().top;
            card.classList.toggle('show', cardTop < triggerBottom);
        });

        sectionTitles.forEach(title => {
            const rect = title.getBoundingClientRect();
            title.classList.toggle('visible', rect.top < window.innerHeight * 0.4 && rect.bottom >= 0);
        });

        timelineItems.forEach(item => {
            const rect = item.getBoundingClientRect();
            item.classList.toggle('visible', rect.top < window.innerHeight * 0.6 && rect.bottom >= 0);
        });

        const sectionTop = contactSection.getBoundingClientRect().top;
        contactSection.classList.toggle('start-animation', sectionTop < triggerBottom);
    };

    window.addEventListener('scroll', () => {
        clearTimeout(debounceTimeout);
        debounceTimeout = setTimeout(onScroll, 100);
    });

    cards.forEach(card => card.classList.add('preload'));

    const revealSkills = () => {
        skillCards.forEach(skillCard => {
            const cardTop = skillCard.getBoundingClientRect().top;
            skillCard.classList.toggle('show', cardTop < window.innerHeight * 0.9);
        });
    };

    window.addEventListener('scroll', revealSkills);
    revealSkills(); 
    onScroll(); 
});
