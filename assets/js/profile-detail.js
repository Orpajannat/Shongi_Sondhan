document.addEventListener('DOMContentLoaded', function() {
    // Initialize profile detail page
    initializeProfileDetail();
    
    // Add event listeners
    addEventListeners();
});

function initializeProfileDetail() {
    // Set initial active tab
    const currentTab = window.location.hash.substring(1) || 'about';
    showTab(currentTab);
    updateActiveTabLink(currentTab);
}

function addEventListeners() {
    // Tab navigation
    const tabLinks = document.querySelectorAll('.tab-link');
    tabLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const tabName = this.getAttribute('data-tab');
            showTab(tabName);
            updateActiveTabLink(tabName);
            
            // Update URL hash
            window.location.hash = tabName;
        });
    });
    
    // Connect button
    const connectBtn = document.querySelector('.connect-btn');
    if (connectBtn) {
        connectBtn.addEventListener('click', function(e) {
            e.preventDefault();
            handleConnect();
        });
    }
    
    // Action buttons (heart, bell)
    const actionBtns = document.querySelectorAll('.action-btn');
    actionBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const icon = this.querySelector('i');
            if (icon.classList.contains('bi-heart')) {
                handleHeartAction();
            } else if (icon.classList.contains('bi-bell')) {
                handleBellAction();
            }
        });
    });
    
    // Window hash change
    window.addEventListener('hashchange', function() {
        const tabName = window.location.hash.substring(1);
        if (tabName) {
            showTab(tabName);
            updateActiveTabLink(tabName);
        }
    });
}

function showTab(tabName) {
    // Hide all tab panes
    const tabPanes = document.querySelectorAll('.tab-pane');
    tabPanes.forEach(pane => {
        pane.classList.remove('active');
    });
    
    // Show target tab pane
    const targetPane = document.getElementById(tabName);
    if (targetPane) {
        targetPane.classList.add('active');
    }
}

function updateActiveTabLink(tabName) {
    // Remove active class from all tab links
    const tabLinks = document.querySelectorAll('.tab-link');
    tabLinks.forEach(link => {
        link.classList.remove('active');
    });
    
    // Add active class to current tab link
    const activeLink = document.querySelector(`[data-tab="${tabName}"]`);
    if (activeLink) {
        activeLink.classList.add('active');
    }
}

function handleConnect() {
    const connectBtn = document.querySelector('.connect-btn');
    const originalText = connectBtn.querySelector('span').textContent;
    
    // Show loading state
    connectBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Connecting...';
    connectBtn.disabled = true;
    
    // Simulate connection process
    setTimeout(() => {
        // Show success state
        connectBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Connected!';
        connectBtn.classList.add('btn-success');
        
        // Reset after 3 seconds
        setTimeout(() => {
            connectBtn.innerHTML = `<span>${originalText}</span>`;
            connectBtn.classList.remove('btn-success');
            connectBtn.disabled = false;
        }, 3000);
    }, 2000);
    
    showNotification('Connection request sent successfully!', 'success');
}

function handleHeartAction() {
    const heartBtn = document.querySelector('.action-btn .bi-heart');
    heartBtn.classList.toggle('text-danger');
    
    if (heartBtn.classList.contains('text-danger')) {
        showNotification('Added to favorites!', 'success');
    } else {
        showNotification('Removed from favorites!', 'info');
    }
}

function handleBellAction() {
    showNotification('Notifications enabled for this profile!', 'info');
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
window.profileDetail = {
    showTab,
    updateActiveTabLink,
    handleConnect,
    handleHeartAction,
    handleBellAction,
    showNotification
};
