   <!-- Chat Widget -->
   <div class="widget" id="chatWidget">
        <div class="widget-header" id="widgetHeader">
            <span class="status online"></span>
            <span class="widget-title">Mash</span>
        </div>
        <div class="chat-box" id="chatBox">
            <div class="chat-header">
                <h2>Mash Help</h2>
                <button class="close-btn" id="closeBtn">&times;</button>
            </div>
            <div class="chat-body">
                <div class="message bot-message">
                    <p>Hello, how can I help you today?</p>
                </div>
            </div>
            <div class="chat-footer">
                <input type="text" id="userMessage" placeholder="Type your message..." />
                <button id="sendMessage">Send</button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const widgetHeader = document.getElementById('widgetHeader');
    const chatBox = document.getElementById('chatBox');
    const closeBtn = document.getElementById('closeBtn');

    widgetHeader.addEventListener('click', () => {
        chatBox.classList.toggle('open');
    });

    closeBtn.addEventListener('click', () => {
        chatBox.classList.remove('open');
    });

    document.getElementById('sendMessage').addEventListener('click', () => {
        const userMessage = document.getElementById('userMessage').value.trim();
        if (userMessage) {
            const chatBody = document.querySelector('.chat-body');
            const userMessageDiv = document.createElement('div');
            userMessageDiv.classList.add('message');
            userMessageDiv.classList.add('user-message');
            userMessageDiv.textContent = userMessage;
            chatBody.appendChild(userMessageDiv);
            document.getElementById('userMessage').value = '';

            // Simulate a bot response
            setTimeout(() => {
                const botMessageDiv = document.createElement('div');
                botMessageDiv.classList.add('message');
                botMessageDiv.classList.add('bot-message');
                botMessageDiv.textContent = "This is a default response.";
                chatBody.appendChild(botMessageDiv);
                chatBody.scrollTop = chatBody.scrollHeight;
            }, 1000);
        }
    });
});

    </script>