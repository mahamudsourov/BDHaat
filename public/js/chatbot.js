document.addEventListener("DOMContentLoaded", function () {
    const sendBtn = document.getElementById("sendBtn");
    const userInput = document.getElementById("userInput");
    const chatMessages = document.getElementById("chatMessages");
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

    if (className === "user-msg") {
        const userAvatar = document.createElement("img");
        userAvatar.src = "data:image/jpeg;base64,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"; // default user image or adjust path
        userAvatar.className = "chat-avatar";
        msgWrapper.appendChild(userAvatar);
    }

    chatMessages.appendChild(msgWrapper);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

});
