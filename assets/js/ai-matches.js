document.addEventListener('DOMContentLoaded', function() {
    initializeAIMatchesPage();
    addEventListeners();
});

function initializeAIMatchesPage() {
    // Initialize AI matches functionality
    setupAIMatches();
    setupNotifications();
    console.log('AI Matches page initialized');
}

function addEventListeners() {
    // Notification button click
    const notificationBtn = document.getElementById('notification-btn');
    if (notificationBtn) {
        notificationBtn.addEventListener('click', function() {
            showNotifications();
        });
    }

    // Add hover effects to match cards
    const matchCards = document.querySelectorAll('.bg-slate-50');
    matchCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 8px 25px rgba(0,0,0,0.15)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 0 4px rgba(0,0,0,0.1)';
        });
    });
}

function setupAIMatches() {
    // Initialize AI match data
    window.aiMatchesData = {
        currentPage: 1,
        matchesPerPage: 4,
        totalMatches: 0,
        isLoading: false
    };
    
    // Load initial matches
    loadInitialMatches();
}

function setupNotifications() {
    // Initialize notification system
    window.notifications = {
        unread: 3,
        items: [
            {
                id: 1,
                type: 'match',
                message: 'New AI match found: 95% compatibility with Ayesha Rahman',
                time: '2 minutes ago',
                read: false
            },
            {
                id: 2,
                type: 'message',
                message: 'Farhan Ahmed sent you a message',
                time: '15 minutes ago',
                read: false
            },
            {
                id: 3,
                type: 'profile',
                message: 'Someone viewed your profile',
                time: '1 hour ago',
                read: false
            }
        ]
    };
    
    updateNotificationBadge();
}

function viewProfile(profileId) {
    // Show loading state
    showLoadingState();
    
    // Simulate API call delay
    setTimeout(() => {
        // Navigate to profile detail page
        window.location.href = `profile-detail.php?id=${profileId}`;
    }, 500);
    
    // Track profile view
    trackProfileView(profileId);
}

function trackProfileView(profileId) {
    console.log(`Profile viewed: ${profileId}`);
    // Here you would typically send analytics data to your backend
    showNotification(`Opening profile for ${profileId}`, 'info');
}

function loadMoreMatches() {
    if (window.aiMatchesData.isLoading) return;
    
    // Set loading state
    window.aiMatchesData.isLoading = true;
    const loadMoreBtn = document.querySelector('button[onclick="loadMoreMatches()"]');
    if (loadMoreBtn) {
        loadMoreBtn.innerHTML = '<span class="truncate">Loading...</span>';
        loadMoreBtn.disabled = true;
    }
    
    // Simulate API call delay
    setTimeout(() => {
        // Generate new matches
        const newMatches = generateNewMatches();
        
        // Add new matches to the page
        addNewMatchesToPage(newMatches);
        
        // Update page data
        window.aiMatchesData.currentPage++;
        window.aiMatchesData.totalMatches += newMatches.length;
        
        // Reset loading state
        window.aiMatchesData.isLoading = false;
        if (loadMoreBtn) {
            loadMoreBtn.innerHTML = '<span class="truncate">Load More Matches</span>';
            loadMoreBtn.disabled = false;
        }
        
        showNotification(`${newMatches.length} new matches loaded!`, 'success');
    }, 1500);
}

function generateNewMatches() {
    const newMatches = [
        {
            name: 'Sadia Khan',
            age: 26,
            profession: 'Marketing Manager',
            matchPercentage: 91,
            imageText: 'SK'
        },
        {
            name: 'Imran Hassan',
            age: 31,
            profession: 'Data Scientist',
            matchPercentage: 88,
            imageText: 'IH'
        },
        {
            name: 'Tahmina Begum',
            age: 25,
            profession: 'UX Designer',
            matchPercentage: 85,
            imageText: 'TB'
        },
        {
            name: 'Arif Rahman',
            age: 28,
            profession: 'Product Manager',
            matchPercentage: 83,
            imageText: 'AR'
        }
    ];
    
    return newMatches;
}

function addNewMatchesToPage(matches) {
    const container = document.querySelector('.layout-content-container');
    if (!container) return;
    
    matches.forEach(match => {
        const matchCard = createMatchCard(match);
        // Insert before the load more button
        const loadMoreSection = container.querySelector('.p-4.text-center');
        if (loadMoreSection) {
            container.insertBefore(matchCard, loadMoreSection);
        } else {
            container.appendChild(matchCard);
        }
    });
    
    // Add event listeners to new cards
    const newMatchCards = document.querySelectorAll('.bg-slate-50');
    newMatchCards.forEach(card => {
        if (!card.hasAttribute('data-initialized')) {
            card.setAttribute('data-initialized', 'true');
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.boxShadow = '0 8px 25px rgba(0,0,0,0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 0 4px rgba(0,0,0,0.1)';
            });
        }
    });
}

function createMatchCard(match) {
    const matchDiv = document.createElement('div');
    matchDiv.className = 'p-4';
    matchDiv.innerHTML = `
        <div class="flex items-stretch justify-between gap-4 rounded-lg bg-slate-50 p-4 shadow-[0_0_4px_rgba(0,0,0,0.1)]">
            <div class="flex flex-[2_2_0px] flex-col gap-4">
                <div class="flex flex-col gap-1">
                    <p class="text-[#0d141c] text-base font-bold leading-tight">${match.name}, ${match.age}</p>
                    <p class="text-[#49739c] text-sm font-normal leading-normal">${match.profession}</p>
                    <div class="flex items-center gap-2 mt-2">
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">${match.matchPercentage}% Match</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">AI Recommended</span>
                    </div>
                </div>
                <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#e7edf4] text-[#0d141c] text-sm font-medium leading-normal w-fit"
                    onclick="viewProfile('${match.name.toLowerCase().replace(' ', '-')}')"
                >
                    <span class="truncate">View Profile</span>
                </button>
            </div>
            <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                style="background-image: url('https://via.placeholder.com/400x225/ff6fa5/ffffff?text=${match.imageText}');"
            ></div>
        </div>
    `;
    
    return matchDiv;
}

function loadInitialMatches() {
    // Load initial match data
    window.aiMatchesData.totalMatches = 4;
    console.log('Initial matches loaded');
}

function showNotifications() {
    // Create notification dropdown
    const notificationDropdown = document.createElement('div');
    notificationDropdown.className = 'fixed top-20 right-10 bg-white rounded-lg shadow-2xl border border-gray-200 z-50 min-w-80 max-w-96';
    notificationDropdown.innerHTML = `
        <div class="p-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-900">Notifications</h3>
                <button class="text-gray-400 hover:text-gray-600" onclick="this.parentElement.parentElement.parentElement.remove()">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>
        <div class="max-h-96 overflow-y-auto">
            ${window.notifications.items.map(notification => `
                <div class="p-4 border-b border-gray-100 hover:bg-gray-50 cursor-pointer ${!notification.read ? 'bg-blue-50' : ''}" 
                     onclick="markNotificationAsRead(${notification.id})">
                    <div class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 ${notification.read ? 'opacity-0' : ''}"></div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900 mb-1">${notification.message}</p>
                            <p class="text-xs text-gray-500">${notification.time}</p>
                        </div>
                    </div>
                </div>
            `).join('')}
        </div>
        <div class="p-3 border-t border-gray-200 text-center">
            <button class="text-sm text-blue-600 hover:text-blue-800 font-medium" onclick="markAllNotificationsAsRead()">
                Mark all as read
            </button>
        </div>
    `;
    
    // Add to page
    document.body.appendChild(notificationDropdown);
    
    // Close on outside click
    setTimeout(() => {
        document.addEventListener('click', function closeNotifications(e) {
            if (!notificationDropdown.contains(e.target) && e.target.id !== 'notification-btn') {
                notificationDropdown.remove();
                document.removeEventListener('click', closeNotifications);
            }
        });
    }, 100);
}

function markNotificationAsRead(notificationId) {
    const notification = window.notifications.items.find(n => n.id === notificationId);
    if (notification) {
        notification.read = true;
        updateNotificationBadge();
        showNotification('Notification marked as read', 'success');
    }
}

function markAllNotificationsAsRead() {
    window.notifications.items.forEach(notification => {
        notification.read = true;
    });
    window.notifications.unread = 0;
    updateNotificationBadge();
    showNotification('All notifications marked as read', 'success');
}

function updateNotificationBadge() {
    const unreadCount = window.notifications.items.filter(n => !n.read).length;
    window.notifications.unread = unreadCount;
    
    // Update notification button if needed
    const notificationBtn = document.getElementById('notification-btn');
    if (notificationBtn && unreadCount > 0) {
        // Add badge if it doesn't exist
        if (!notificationBtn.querySelector('.notification-badge')) {
            const badge = document.createElement('span');
            badge.className = 'notification-badge absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center';
            badge.textContent = unreadCount;
            notificationBtn.style.position = 'relative';
            notificationBtn.appendChild(badge);
        } else {
            const badge = notificationBtn.querySelector('.notification-badge');
            badge.textContent = unreadCount;
        }
    } else if (notificationBtn) {
        const badge = notificationBtn.querySelector('.notification-badge');
        if (badge) badge.remove();
    }
}

function showLoadingState() {
    // Show loading overlay
    const loadingOverlay = document.createElement('div');
    loadingOverlay.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
    loadingOverlay.innerHTML = `
        <div class="bg-white rounded-lg p-6 flex flex-col items-center">
            <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600 mb-4"></div>
            <p class="text-gray-700">Loading profile...</p>
        </div>
    `;
    
    document.body.appendChild(loadingOverlay);
    
    // Remove after 2 seconds (or when profile loads)
    setTimeout(() => {
        if (loadingOverlay.parentNode) {
            loadingOverlay.remove();
        }
    }, 2000);
}

function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;

    document.body.appendChild(notification);

    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 5000);
}

// Export functions for global access
window.aiMatchesPage = {
    viewProfile,
    loadMoreMatches,
    showNotifications,
    markNotificationAsRead,
    markAllNotificationsAsRead
};
