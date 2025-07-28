document.addEventListener("DOMContentLoaded", function () {
    const sendBtn = document.getElementById("sendBtn");
    const userInput = document.getElementById("userInput");
    const chatbotBody = document.getElementById("chatbotBody");
    const quickButtons = document.querySelectorAll(".chat-btn");

    // Send message on button click or Enter key
    sendBtn.addEventListener("click", sendMessage);
    userInput.addEventListener("keypress", function (e) {
        if (e.key === "Enter") sendMessage();
    });

    // Handle Quick Option Buttons
    quickButtons.forEach(button => {
        button.addEventListener("click", function () {
            const text = button.textContent.trim();
            appendMessage(text, 'user-msg');
            botReply(text);
        });
    });

    function sendMessage() {
        const text = userInput.value.trim();
        if (text === "") return;

        appendMessage(text, 'user-msg');
        userInput.value = "";
        botReply(text);
    }

    function botReply(userText) {
        setTimeout(() => {
            let reply;
            switch (userText) {
                case "Order Information":
                    reply = "Your order details can be found in the 'My Orders' section.";
                    break;
                case "Track Complaints":
                    reply = "Please provide your complaint ID to track it.";
                    break;
                case "Submit Feedback":
                    reply = "We appreciate your feedback! Let us know what we can improve.";
                    break;
                case "Explore More":
                    reply = "Browse our catalog to explore traditional and healthy products.";
                    break;
                case "বাংলাতে চ্যাট করুন":
                    reply = "আপনার কীভাবে সাহায্য করতে পারি? বাংলায় আপনার প্রশ্ন করুন।";
                    break;
                default:
                    reply = "Thanks for your message! Our support team will get back to you shortly.";
            }
            appendMessage(reply, 'bot-msg');
        }, 800);
    }

    function appendMessage(msg, className) {
    const msgWrapper = document.createElement("div");
    msgWrapper.className = className + "-wrapper";

    const timestamp = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

    if (className === "bot-msg") {
        const avatar = document.createElement("img");
        avatar.src = "/images/chatbot.png"; // adjust if path is different
        avatar.className = "chat-avatar";
        msgWrapper.appendChild(avatar);
    }

    const msgBubble = document.createElement("div");
    msgBubble.className = className;

    const textSpan = document.createElement("span");
    textSpan.textContent = msg;

    const time = document.createElement("div");
    time.className = "msg-time";
    time.textContent = timestamp;

    msgBubble.appendChild(textSpan);
    msgBubble.appendChild(time);

    msgWrapper.appendChild(msgBubble);

   

    chatbotBody.appendChild(msgWrapper);
    chatbotBody.scrollTop = chatbotBody.scrollHeight;
}

});
