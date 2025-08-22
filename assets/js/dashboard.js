document.addEventListener('DOMContentLoaded', function() {
    // Initialize dashboard
    initializeDashboard();
    
    // Add event listeners
    addEventListeners();
    
    // Load initial content
    loadSection('dashboard');
    
    // Initialize counter animations
    initializeCounters();
    
    // Initialize floating hearts
    initializeFloatingHearts();
});

function initializeDashboard() {
    // Set active section
    const currentSection = window.location.hash.substring(1) || 'dashboard';
    loadSection(currentSection);
    
    // Update active nav link
    updateActiveNavLink(currentSection);
}

function addEventListeners() {
    // Top navigation
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link[data-section]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const section = this.getAttribute('data-section');
            loadSection(section);
            updateActiveNavLink(section);
            
            // Update URL hash
            window.location.hash = section;
        });
    });
    
    // Search functionality removed for MatchFinder style
    
    // Profile dropdown
    const profileDropdown = document.querySelector('.profile-dropdown');
    if (profileDropdown) {
        profileDropdown.addEventListener('click', function(e) {
            e.preventDefault();
        });
    }
    
    // Quick action buttons
    const quickActionBtns = document.querySelectorAll('.quick-action-btn');
    quickActionBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const action = this.querySelector('span').textContent;
            handleQuickAction(action);
        });
    });
    
    // Match card actions
    const matchCards = document.querySelectorAll('.match-card');
    matchCards.forEach(card => {
        const likeBtn = card.querySelector('.btn-light');
        const messageBtn = card.querySelector('.btn-outline-light');
        
        if (likeBtn) {
            likeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                handleMatchAction('like', card);
            });
        }
        
        if (messageBtn) {
            messageBtn.addEventListener('click', function(e) {
                e.preventDefault();
                handleMatchAction('message', card);
            });
        }
    });
    
    // Window hash change
    window.addEventListener('hashchange', function() {
        const section = window.location.hash.substring(1);
        if (section) {
            loadSection(section);
            updateActiveNavLink(section);
        }
    });
}

function loadSection(sectionName) {
    // Hide all sections
    const sections = document.querySelectorAll('.content-section');
    sections.forEach(section => {
        section.classList.remove('active');
    });
    
    // Show target section
    const targetSection = document.getElementById(sectionName);
    if (targetSection) {
        targetSection.classList.add('active');
        
        // Load section-specific content
        loadSectionContent(sectionName);
    }
}

function updateActiveNavLink(sectionName) {
    // Remove active class from all nav links
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link[data-section]');
    navLinks.forEach(link => {
        link.classList.remove('active');
    });
    
    // Add active class to current nav link
    const activeLink = document.querySelector(`[data-section="${sectionName}"]`);
    if (activeLink) {
        activeLink.classList.add('active');
    }
}

function loadSectionContent(sectionName) {
    switch(sectionName) {
        case 'dashboard':
            loadDashboardContent();
            break;
        case 'matches':
            loadMatchesContent();
            break;
        case 'profile':
            loadProfileContent();
            break;
        case 'messages':
            loadMessagesContent();
            break;
        case 'search':
            loadSearchContent();
            break;
        case 'settings':
            loadSettingsContent();
            break;
    }
}

function loadDashboardContent() {
    // Dashboard content is already loaded in HTML
    // You can add dynamic content loading here if needed
    console.log('Dashboard content loaded');
}

function loadMatchesContent() {
    // Load matches from API or local storage
    console.log('Matches content loaded');
    
    // Example: Load more matches dynamically
    // loadMoreMatches();
}

function loadProfileContent() {
    // Load user profile data
    console.log('Profile content loaded');
    
    // Example: Load profile data from API
    // loadUserProfile();
}

function loadMessagesContent() {
    // Load messages
    console.log('Messages content loaded');
    
    // Example: Load messages from API
    // loadMessages();
}

function loadSearchContent() {
    // Initialize search functionality
    console.log('Search content loaded');
    
    // Example: Initialize search form
    // initializeSearchForm();
}

function loadSettingsContent() {
    // Load settings
    console.log('Settings content loaded');
    
    // Example: Load user settings
    // loadUserSettings();
}

function handleQuickAction(action) {
    switch(action) {
        case 'Find Matches':
            loadSection('search');
            updateActiveNavLink('search');
            break;
        case 'Add Photos':
            loadSection('profile');
            updateActiveNavLink('profile');
            // Show photo upload modal
            showPhotoUploadModal();
            break;
        case 'Edit Profile':
            loadSection('profile');
            updateActiveNavLink('profile');
            // Enable profile editing
            enableProfileEditing();
            break;
        case 'Send Interest':
            loadSection('matches');
            updateActiveNavLink('matches');
            break;
    }
}

function handleMatchAction(action, card) {
    const matchName = card.querySelector('h5').textContent;
    
    switch(action) {
        case 'like':
            // Handle like action
            showNotification(`You liked ${matchName}`, 'success');
            // Update UI
            card.style.opacity = '0.7';
            setTimeout(() => {
                card.style.opacity = '1';
            }, 500);
            break;
        case 'message':
            // Handle message action
            loadSection('messages');
            updateActiveNavLink('messages');
            showNotification(`Opening chat with ${matchName}`, 'info');
            break;
    }
}

function showPhotoUploadModal() {
    // Create and show photo upload modal
    const modal = document.createElement('div');
    modal.className = 'modal fade';
    modal.innerHTML = `
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Upload Profile Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="photoFile" class="form-label">Choose Photo</label>
                            <input type="file" class="form-control" id="photoFile" accept="image/*">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    const bootstrapModal = new bootstrap.Modal(modal);
    bootstrapModal.show();
    
    // Clean up modal after it's hidden
    modal.addEventListener('hidden.bs.modal', function() {
        document.body.removeChild(modal);
    });
}

function enableProfileEditing() {
    // Enable profile editing mode
    const profileSection = document.getElementById('profile');
    const editBtn = profileSection.querySelector('.btn-outline-primary');
    
    if (editBtn) {
        editBtn.textContent = 'Save Changes';
        editBtn.className = 'btn btn-primary';
        editBtn.onclick = saveProfileChanges;
    }
    
    showNotification('Profile editing enabled', 'info');
}

function saveProfileChanges() {
    // Save profile changes
    showNotification('Profile updated successfully', 'success');
    
    // Reset button
    const profileSection = document.getElementById('profile');
    const saveBtn = profileSection.querySelector('.btn-primary');
    
    if (saveBtn) {
        saveBtn.textContent = 'Change Photo';
        saveBtn.className = 'btn btn-outline-primary';
        saveBtn.onclick = enableProfileEditing;
    }
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

// Utility functions
function formatDate(date) {
    return new Intl.DateTimeFormat('en-US', {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    }).format(new Date(date));
}

function formatNumber(num) {
    if (num >= 1000000) {
        return (num / 1000000).toFixed(1) + 'M';
    } else if (num >= 1000) {
        return (num / 1000).toFixed(1) + 'K';
    }
    return num.toString();
}

// Initialize counter animations
function initializeCounters() {
    const counters = document.querySelectorAll('.counter');
    
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseFloat(counter.getAttribute('data-target'));
                animateCounter(counter, target);
                observer.unobserve(counter);
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => observer.observe(counter));
}

function animateCounter(counter, target) {
    let current = 0;
    const increment = target / 50;
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }
        counter.textContent = target % 1 === 0 ? Math.floor(current) : current.toFixed(1);
    }, 30);
}

// Initialize floating hearts
function initializeFloatingHearts() {
    const hearts = document.querySelectorAll('.heart');
    
    hearts.forEach((heart, index) => {
        // Add random movement
        setInterval(() => {
            const randomX = Math.random() * 20 - 10;
            const randomY = Math.random() * 20 - 10;
            heart.style.transform = `translate(${randomX}px, ${randomY}px)`;
        }, 3000 + index * 1000);
    });
}

// Export functions for global access
window.dashboard = {
    loadSection,
    updateActiveNavLink,
    showNotification,
    handleQuickAction,
    handleMatchAction,
    initializeCounters,
    initializeFloatingHearts
};
