document.addEventListener("DOMContentLoaded", function () {
    const sendBtn = document.getElementById("sendBtn");
    const userInput = document.getElementById("userInput");
    const chatbotBody = document.getElementById("chatbotBody");

    sendBtn.addEventListener("click", sendMessage);
    userInput.addEventListener("keypress", function (e) {
        if (e.key === "Enter") sendMessage();
    });

    function sendMessage() {
        const text = userInput.value.trim();
        if (text === "") return;

        appendMessage(text, 'user-msg');
        userInput.value = "";

        setTimeout(() => {
            appendMessage("Thanks for your message! Our support team will get back to you shortly.", 'bot-msg');
        }, 800);
    }

    function appendMessage(msg, className) {
        const msgDiv = document.createElement("div");
        msgDiv.className = className;
        msgDiv.textContent = msg;
        chatbotBody.appendChild(msgDiv);
        chatbotBody.scrollTop = chatbotBody.scrollHeight;
    }
});
