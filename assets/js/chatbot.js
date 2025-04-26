document.addEventListener('DOMContentLoaded', function() {
    const chatbotIcon = document.querySelector('.chatbot-icon');
    const chatbotWindow = document.querySelector('.chatbot-window');
    const messagesContainer = document.querySelector('.chatbot-messages');
    const inputField = document.querySelector('.chatbot-input input');
    const sendButton = document.querySelector('.chatbot-input button');
    const closeButton = document.querySelector('.close-btn');

    const welcomeMessage = "Hello! I am Matthis's portfolio assistant. How can I help you today?";

    function showWelcomeMessage() {
        addMessage(welcomeMessage, 'bot');
    }

    function toggleChatbot() {
        const isOpen = chatbotWindow.style.display === 'flex';
        chatbotWindow.style.display = isOpen ? 'none' : 'flex';
        
        if (!isOpen && messagesContainer.children.length === 0) {
            showWelcomeMessage();
        }
        
        chatbotIcon.style.transform = isOpen ? 'scale(1)' : 'scale(0.8)';
    }

    chatbotIcon.addEventListener('click', toggleChatbot);
    closeButton.addEventListener('click', toggleChatbot);

    function sendMessage() {
        const message = inputField.value.trim();
        if (message) {
            addMessage(message, 'user');
            inputField.value = '';
            
            fetch('/backend/chatbot.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ message: message })
            })
            .then(response => response.json())
            .then(data => {
                addMessage(data.response, 'bot');
            })
            .catch(error => {
                addMessage("Désolé, je rencontre des difficultés techniques. Veuillez réessayer plus tard.", 'bot');
            });
        }
    }

    function addMessage(text, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message');
        messageDiv.classList.add(sender + '-message');
        messageDiv.textContent = text;
        messagesContainer.appendChild(messageDiv);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    sendButton.addEventListener('click', sendMessage);
    inputField.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });

    document.addEventListener('click', function(e) {
        if (!chatbotWindow.contains(e.target) && !chatbotIcon.contains(e.target) && chatbotWindow.style.display === 'flex') {
            toggleChatbot();
        }
    });
}); 