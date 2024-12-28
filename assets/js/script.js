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

    // Menu toggle
    menubar.onclick = () => {
        menubar.classList.toggle('bx-x');
        Navbar.classList.toggle('active');
    };

    // Détection du scroll avec debounce
    let debounceTimeout;
    const onScroll = () => {
        const top = window.scrollY;

        // Section animation
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

        // Sticky header
        const header = document.querySelector('.header');
        header.classList.toggle('sticky', top > 100);

        // Hide menu on scroll
        menubar.classList.remove('bx-x');
        Navbar.classList.remove('active');

        // Card visibility
        const triggerBottom = window.innerHeight * 0.9;
        cards.forEach(card => {
            const cardTop = card.getBoundingClientRect().top;
            card.classList.toggle('show', cardTop < triggerBottom);
        });

        // Section titles animation
        sectionTitles.forEach(title => {
            const rect = title.getBoundingClientRect();
            title.classList.toggle('visible', rect.top < window.innerHeight * 0.7 && rect.bottom >= 0);
        });

        // Timeline animation
        timelineItems.forEach(item => {
            const rect = item.getBoundingClientRect();
            item.classList.toggle('visible', rect.top < window.innerHeight * 0.8 && rect.bottom >= 0);
        });

        // Contact section animation
        const sectionTop = contactSection.getBoundingClientRect().top;
        contactSection.classList.toggle('start-animation', sectionTop < triggerBottom);
    };

    // Détecter le scroll avec debounce
    window.addEventListener('scroll', () => {
        clearTimeout(debounceTimeout);
        debounceTimeout = setTimeout(onScroll, 100);
    });

    // Preload animation for cards
    cards.forEach(card => card.classList.add('preload'));

    // Skill cards reveal
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
