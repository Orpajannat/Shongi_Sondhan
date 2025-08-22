document.addEventListener('DOMContentLoaded', function() {
    // Initialize messages page
    initializeMessagesPage();
    
    // Add event listeners
    addEventListeners();
});

function initializeMessagesPage() {
    // Set up chat functionality
    setupChat();
    
    // Initialize search functionality
    initializeSearch();
    
    // Load chat history
    loadChatHistory();
}

function addEventListeners() {
    // Send button click
    const sendButton = document.getElementById('send-button');
    if (sendButton) {
        sendButton.addEventListener('click', function() {
            sendMessage();
        });
    }
    
    // Message input enter key
    const messageInput = document.getElementById('message-input');
    if (messageInput) {
        messageInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });
        
        // Input change for real-time validation
        messageInput.addEventListener('input', function() {
            validateMessageInput();
        });
    }
    
    // Chat list item clicks
    const chatItems = document.querySelectorAll('.layout-content-container .flex.items-center.gap-4');
    chatItems.forEach(item => {
        item.addEventListener('click', function() {
            selectChat(this);
        });
    });
    
    // Search input
    const searchInput = document.querySelector('input[placeholder="Search conversations"]');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            filterConversations(this.value);
        });
    }
    
    // Attachment and emoji buttons
    const attachmentBtn = document.querySelector('button[title="Attach Image"]');
    const emojiBtn = document.querySelector('button[title="Emoji"]');
    
    if (attachmentBtn) {
        attachmentBtn.addEventListener('click', function() {
            handleAttachment();
        });
    }
    
    if (emojiBtn) {
        emojiBtn.addEventListener('click', function() {
            handleEmoji();
        });
    }
}

function setupChat() {
    // Initialize chat state
    window.chatState = {
        currentChat: 'ayesha-rahman',
        messages: [],
        isTyping: false
    };
    
    // Set up typing indicator
    setupTypingIndicator();
}

function sendMessage() {
    const messageInput = document.getElementById('message-input');
    const message = messageInput.value.trim();
    
    if (!message) {
        showNotification('Please enter a message', 'warning');
        return;
    }
    
    // Add message to chat
    addMessageToChat('Me', message, 'outgoing');
    
    // Clear input
    messageInput.value = '';
    
    // Update send button state
    validateMessageInput();
    
    // Simulate typing indicator from other person
    simulateTyping();
    
    // Show notification
    showNotification('Message sent!', 'success');
    
    // Here you would typically send the message to the backend
    console.log('Sending message:', message);
}

function addMessageToChat(sender, message, type = 'incoming') {
    const chatArea = document.querySelector('.layout-content-container.flex.flex-col.max-w-\\[960px\\]');
    if (!chatArea) return;
    
    const messageElement = createMessageElement(sender, message, type);
    
    // Insert before the input area
    const inputArea = chatArea.querySelector('.flex.items-center.px-4.py-3.gap-3');
    if (inputArea) {
        chatArea.insertBefore(messageElement, inputArea);
    } else {
        chatArea.appendChild(messageElement);
    }
    
    // Scroll to bottom
    scrollToBottom();
    
    // Update chat list preview
    updateChatPreview(sender, message);
}

function createMessageElement(sender, message, type) {
    const messageDiv = document.createElement('div');
    messageDiv.className = `flex items-end gap-3 p-4 ${type === 'outgoing' ? 'justify-end' : ''}`;
    
    if (type === 'outgoing') {
        messageDiv.innerHTML = `
            <div class="flex flex-1 flex-col gap-1 items-end">
                <p class="text-[#49739c] text-[13px] font-normal leading-normal max-w-[360px] text-right">Me</p>
                <p class="text-base font-normal leading-normal flex max-w-[360px] rounded-lg px-4 py-3 bg-[#0d80f2] text-slate-50">${escapeHtml(message)}</p>
            </div>
            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0" style="background-image: url('https://via.placeholder.com/40x40/ff6fa5/ffffff?text=U');"></div>
        `;
    } else {
        messageDiv.innerHTML = `
            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0" style="background-image: url('https://via.placeholder.com/40x40/ff6fa5/ffffff?text=${sender.charAt(0)}');"></div>
            <div class="flex flex-1 flex-col gap-1 items-start">
                <p class="text-[#49739c] text-[13px] font-normal leading-normal max-w-[360px]">${escapeHtml(sender)}</p>
                <p class="text-base font-normal leading-normal flex max-w-[360px] rounded-lg px-4 py-3 bg-[#e7edf4] text-[#0d141c]">${escapeHtml(message)}</p>
            </div>
        `;
    }
    
    return messageDiv;
}

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

function simulateTyping() {
    const chatArea = document.querySelector('.layout-content-container.flex.flex-col.max-w-\\[960px\\]');
    if (!chatArea) return;
    
    // Show typing indicator
    const typingIndicator = createTypingIndicator();
    const inputArea = chatArea.querySelector('.flex.items-center.px-4.py-3.gap-3');
    if (inputArea) {
        chatArea.insertBefore(typingIndicator, inputArea);
    }
    
    // Simulate response after delay
    setTimeout(() => {
        // Remove typing indicator
        if (typingIndicator.parentNode) {
            typingIndicator.remove();
        }
        
        // Add simulated response
        const responses = [
            "That's interesting! Tell me more.",
            "I see, that makes sense.",
            "Thanks for sharing that with me.",
            "I'd love to hear more about that.",
            "That's wonderful!"
        ];
        
        const randomResponse = responses[Math.floor(Math.random() * responses.length)];
        addMessageToChat('Ayesha Rahman', randomResponse, 'incoming');
    }, 2000 + Math.random() * 3000); // Random delay between 2-5 seconds
}

function createTypingIndicator() {
    const typingDiv = document.createElement('div');
    typingDiv.className = 'flex items-end gap-3 p-4';
    typingDiv.innerHTML = `
        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0" style="background-image: url('https://via.placeholder.com/40x40/ff6fa5/ffffff?text=AR');"></div>
        <div class="flex flex-1 flex-col gap-1 items-start">
            <p class="text-[#49739c] text-[13px] font-normal leading-normal max-w-[360px]">Ayesha Rahman</p>
            <div class="flex max-w-[360px] rounded-lg px-4 py-3 bg-[#e7edf4] items-center gap-1">
                <div class="w-2 h-2 bg-[#49739c] rounded-full animate-bounce"></div>
                <div class="w-2 h-2 bg-[#49739c] rounded-full animate-bounce" style="animation-delay: 0.1s;"></div>
                <div class="w-2 h-2 bg-[#49739c] rounded-full animate-bounce" style="animation-delay: 0.2s;"></div>
            </div>
        </div>
    `;
    
    return typingDiv;
}

function setupTypingIndicator() {
    // Add CSS for typing animation
    if (!document.getElementById('typing-styles')) {
        const style = document.createElement('style');
        style.id = 'typing-styles';
        style.textContent = `
            @keyframes bounce {
                0%, 80%, 100% { transform: translateY(0); }
                40% { transform: translateY(-10px); }
            }
            .animate-bounce {
                animation: bounce 1.4s infinite;
            }
        `;
        document.head.appendChild(style);
    }
}

function selectChat(chatElement) {
    // Remove active state from all chats
    document.querySelectorAll('.layout-content-container .flex.items-center.gap-4').forEach(item => {
        item.classList.remove('bg-slate-100', 'border-l-4', 'border-[#0d80f2]');
    });
    
    // Add active state to selected chat
    chatElement.classList.add('bg-slate-100', 'border-l-4', 'border-[#0d80f2]');
    
    // Get chat name
    const chatName = chatElement.querySelector('p').textContent;
    
    // Update chat header
    updateChatHeader(chatName);
    
    // Load chat messages for this person
    loadChatForPerson(chatName);
    
    // Show notification
    showNotification(`Switched to chat with ${chatName}`, 'info');
}

function updateChatHeader(name) {
    const chatHeader = document.querySelector('.layout-content-container.flex.flex-col.max-w-\\[960px\\] .flex.p-4');
    if (chatHeader) {
        const nameElement = chatHeader.querySelector('p.text-\\[22px\\]');
        if (nameElement) {
            nameElement.textContent = name;
        }
    }
}

function loadChatForPerson(name) {
    // Here you would typically load chat history from backend
    console.log(`Loading chat for ${name}`);
    
    // For demo purposes, we'll just show a welcome message
    const welcomeMessage = `Hi! Welcome to our conversation. How can I help you today?`;
    addMessageToChat(name, welcomeMessage, 'incoming');
}

function filterConversations(searchTerm) {
    const chatItems = document.querySelectorAll('.layout-content-container .flex.items-center.gap-4');
    
    chatItems.forEach(item => {
        const name = item.querySelector('p').textContent.toLowerCase();
        const preview = item.querySelector('p:last-child').textContent.toLowerCase();
        
        if (name.includes(searchTerm.toLowerCase()) || preview.includes(searchTerm.toLowerCase())) {
            item.style.display = 'flex';
        } else {
            item.style.display = 'none';
        }
    });
    
    // Show notification if no results
    const visibleChats = Array.from(chatItems).filter(item => item.style.display !== 'none');
    if (visibleChats.length === 0 && searchTerm) {
        showNotification('No conversations found', 'info');
    }
}

function validateMessageInput() {
    const messageInput = document.getElementById('message-input');
    const sendButton = document.getElementById('send-button');
    
    if (messageInput && sendButton) {
        const message = messageInput.value.trim();
        
        if (message.length > 0) {
            sendButton.classList.remove('opacity-50', 'cursor-not-allowed');
            sendButton.classList.add('hover:bg-[#0a6bc7]');
        } else {
            sendButton.classList.add('opacity-50', 'cursor-not-allowed');
            sendButton.classList.remove('hover:bg-[#0a6bc7]');
        }
    }
}

function handleAttachment() {
    // Create file input
    const fileInput = document.createElement('input');
    fileInput.type = 'file';
    fileInput.accept = 'image/*';
    fileInput.style.display = 'none';
    
    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            if (file.size > 5 * 1024 * 1024) { // 5MB limit
                showNotification('File size too large. Please select a smaller image.', 'error');
                return;
            }
            
            // Here you would typically upload the file to your server
            showNotification(`Image "${file.name}" selected for upload`, 'info');
            
            // For demo, we'll add a placeholder message
            addMessageToChat('Me', `📎 Attached: ${file.name}`, 'outgoing');
        }
    });
    
    document.body.appendChild(fileInput);
    fileInput.click();
    document.body.removeChild(fileInput);
}

function handleEmoji() {
    // Simple emoji picker (in a real app, you'd use a proper emoji picker library)
    const emojis = ['😊', '❤️', '👍', '🎉', '🌹', '💕', '😍', '✨', '🙏', '💝'];
    
    // Create emoji picker popup
    const emojiPicker = document.createElement('div');
    emojiPicker.className = 'fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-2xl p-4 z-50 border border-gray-200';
    emojiPicker.innerHTML = `
        <div class="flex flex-wrap gap-2 max-w-xs">
            ${emojis.map(emoji => `<button class="text-2xl hover:bg-gray-100 p-2 rounded transition-colors" data-emoji="${emoji}">${emoji}</button>`).join('')}
        </div>
        <div class="text-center mt-3">
            <button class="text-sm text-gray-500 hover:text-gray-700" id="close-emoji">Close</button>
        </div>
    `;
    
    // Add event listeners
    emojiPicker.addEventListener('click', function(e) {
        if (e.target.dataset.emoji) {
            const messageInput = document.getElementById('message-input');
            if (messageInput) {
                messageInput.value += e.target.dataset.emoji;
                messageInput.focus();
            }
            document.body.removeChild(emojiPicker);
        } else if (e.target.id === 'close-emoji') {
            document.body.removeChild(emojiPicker);
        }
    });
    
    // Close on outside click
    document.addEventListener('click', function closeEmoji(e) {
        if (!emojiPicker.contains(e.target)) {
            if (document.body.contains(emojiPicker)) {
                document.body.removeChild(emojiPicker);
            }
            document.removeEventListener('click', closeEmoji);
        }
    });
    
    document.body.appendChild(emojiPicker);
}

function updateChatPreview(sender, message) {
    // Update the chat list preview for the current chat
    const currentChatItem = document.querySelector('.layout-content-container .flex.items-center.gap-4.bg-slate-100');
    if (currentChatItem) {
        const previewElement = currentChatItem.querySelector('p:last-child');
        if (previewElement) {
            previewElement.textContent = message.length > 50 ? message.substring(0, 50) + '...' : message;
        }
    }
}

function scrollToBottom() {
    const chatArea = document.querySelector('.layout-content-container.flex.flex-col.max-w-\\[960px\\]');
    if (chatArea) {
        chatArea.scrollTop = chatArea.scrollHeight;
    }
}

function loadChatHistory() {
    // Here you would typically load chat history from your backend
    console.log('Loading chat history...');
}

function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    // Auto-remove after 5 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 5000);
}

// Export functions for global access
window.messagesPage = {
    sendMessage,
    selectChat,
    filterConversations,
    handleAttachment,
    handleEmoji,
    showNotification
};
