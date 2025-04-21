document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(event) {
        const email = document.querySelector('input[name="email"]').value;
        const subject = document.querySelector('input[name="subject"]').value;
        const message = document.querySelector('textarea[name="message"]').value;
        
        if (!email || !subject || !message) {
            event.preventDefault();
            alert('Veuillez remplir au moins les champs email, sujet et message.');
        }
    });
}); 