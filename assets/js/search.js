document.addEventListener('DOMContentLoaded', function() {
    // Initialize search page
    initializeSearchPage();
    
    // Add event listeners
    addEventListeners();
});

function initializeSearchPage() {
    // Set initial age range values
    updateAgeRangeDisplay();
}

function addEventListeners() {
    // Apply filters button
    const applyFiltersBtn = document.querySelector('.apply-filters-btn');
    if (applyFiltersBtn) {
        applyFiltersBtn.addEventListener('click', function(e) {
            e.preventDefault();
            handleApplyFilters();
        });
    }
    
    // Filter select changes
    const filterSelects = document.querySelectorAll('.filter-select');
    filterSelects.forEach(select => {
        select.addEventListener('change', function() {
            handleFilterChange(this);
        });
    });
    
    // Age range slider interaction
    initializeAgeRangeSlider();
    
    // Result card clicks
    const resultCards = document.querySelectorAll('.result-card');
    resultCards.forEach(card => {
        card.addEventListener('click', function() {
            handleResultCardClick(this);
        });
    });
}

function handleApplyFilters() {
    const applyBtn = document.querySelector('.apply-filters-btn');
    const originalText = applyBtn.querySelector('span').textContent;
    
    // Show loading state
    applyBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Applying...';
    applyBtn.disabled = true;
    
    // Simulate filter application
    setTimeout(() => {
        // Show success state
        applyBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Applied!';
        applyBtn.classList.add('btn-success');
        
        // Reset after 2 seconds
        setTimeout(() => {
            applyBtn.innerHTML = `<span>${originalText}</span>`;
            applyBtn.classList.remove('btn-success');
            applyBtn.disabled = false;
        }, 2000);
    }, 1000);
    
    showNotification('Filters applied successfully!', 'success');
    
    // Collect filter values
    const filters = collectFilterValues();
    console.log('Applied filters:', filters);
    
    // Here you would typically send the filters to the backend
    // and update the search results
}

function handleFilterChange(select) {
    const filterName = select.previousElementSibling.textContent;
    const filterValue = select.value;
    
    if (filterValue) {
        showNotification(`${filterName} filter updated to: ${filterValue}`, 'info');
    }
}

function initializeAgeRangeSlider() {
    const rangeTrack = document.querySelector('.range-track');
    const rangeFill = document.querySelector('.range-fill');
    const leftHandle = document.querySelector('.range-handle-left');
    const rightHandle = document.querySelector('.range-handle-right');
    const minAgeInput = document.getElementById('min-age');
    const maxAgeInput = document.getElementById('max-age');
    
    if (!rangeTrack || !rangeFill || !leftHandle || !rightHandle) return;
    
    let isDragging = false;
    let currentHandle = null;
    
    // Initialize with input values
    updateSliderFromInputs();
    
    // Input field event listeners
    if (minAgeInput && maxAgeInput) {
        minAgeInput.addEventListener('input', function() {
            const value = parseInt(this.value);
            if (value >= 18 && value <= 80) {
                updateSliderFromInputs();
                updateRangeFill();
                triggerLiveSearch();
            }
        });
        
        maxAgeInput.addEventListener('input', function() {
            const value = parseInt(this.value);
            if (value >= 18 && value <= 80) {
                updateSliderFromInputs();
                updateRangeFill();
                triggerLiveSearch();
            }
        });
        
        // Validate input on blur
        [minAgeInput, maxAgeInput].forEach(input => {
            input.addEventListener('blur', function() {
                validateAgeInputs();
            });
        });
    }
    
    // Mouse events for handles
    [leftHandle, rightHandle].forEach(handle => {
        handle.addEventListener('mousedown', function(e) {
            isDragging = true;
            currentHandle = this;
            this.classList.add('active');
            e.preventDefault();
        });
    });
    
    // Mouse move for dragging
    document.addEventListener('mousemove', function(e) {
        if (!isDragging || !currentHandle) return;
        
        const rect = rangeTrack.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const percentage = Math.max(0, Math.min(100, (x / rect.width) * 100));
        
        if (currentHandle.classList.contains('range-handle-left')) {
            const rightValue = parseInt(rightHandle.querySelector('.handle-value').textContent);
            if (percentage < rightValue - 5) {
                updateHandlePosition(currentHandle, percentage);
                updateRangeFill();
                updateInputsFromSlider();
                triggerLiveSearch();
            }
        } else {
            const leftValue = parseInt(leftHandle.querySelector('.handle-value').textContent);
            if (percentage > leftValue + 5) {
                updateHandlePosition(currentHandle, percentage);
                updateRangeFill();
                updateInputsFromSlider();
                triggerLiveSearch();
            }
        }
    });
    
    // Mouse up to stop dragging
    document.addEventListener('mouseup', function() {
        if (currentHandle) {
            currentHandle.classList.remove('active');
        }
        isDragging = false;
        currentHandle = null;
    });
    
    // Touch events for mobile
    [leftHandle, rightHandle].forEach(handle => {
        handle.addEventListener('touchstart', function(e) {
            isDragging = true;
            currentHandle = this;
            this.classList.add('active');
        });
    });
    
    document.addEventListener('touchmove', function(e) {
        if (!isDragging || !currentHandle) return;
        
        const rect = rangeTrack.getBoundingClientRect();
        const touch = e.touches[0];
        const x = touch.clientX - rect.left;
        const percentage = Math.max(0, Math.min(100, (x / rect.width) * 100));
        
        if (currentHandle.classList.contains('range-handle-left')) {
            const rightValue = parseInt(rightHandle.querySelector('.range-handle-right .handle-value').textContent);
            if (percentage < rightValue - 5) {
                updateHandlePosition(currentHandle, percentage);
                updateRangeFill();
                updateInputsFromSlider();
                triggerLiveSearch();
            }
        } else {
            const leftValue = parseInt(leftHandle.querySelector('.range-handle-left .handle-value').textContent);
            if (percentage > leftValue + 5) {
                updateHandlePosition(currentHandle, percentage);
                updateRangeFill();
                updateInputsFromSlider();
                triggerLiveSearch();
            }
        }
    });
    
    document.addEventListener('touchend', function() {
        if (currentHandle) {
            currentHandle.classList.remove('active');
        }
        isDragging = false;
        currentHandle = null;
    });
    
    // Keyboard navigation
    [leftHandle, rightHandle].forEach(handle => {
        handle.addEventListener('keydown', function(e) {
            const currentValue = parseInt(this.querySelector('.handle-value').textContent);
            let newValue = currentValue;
            
            switch(e.key) {
                case 'ArrowLeft':
                    newValue = Math.max(18, currentValue - 1);
                    break;
                case 'ArrowRight':
                    newValue = Math.min(80, currentValue + 1);
                    break;
                case 'ArrowUp':
                    newValue = Math.max(18, currentValue - 5);
                    break;
                case 'ArrowDown':
                    newValue = Math.min(80, currentValue + 5);
                    break;
                case 'Enter':
                case ' ':
                    this.focus();
                    return;
                default:
                    return;
            }
            
            e.preventDefault();
            updateHandleByAge(this, newValue);
            updateRangeFill();
            updateInputsFromSlider();
            triggerLiveSearch();
        });
    });
    
    // Click on track to jump to position
    rangeTrack.addEventListener('click', function(e) {
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const percentage = (x / this.offsetWidth) * 100;
        const age = Math.round(18 + (percentage * 0.62)); // Map 0-100% to 18-80 years
        
        // Determine which handle to move
        const leftAge = parseInt(leftHandle.querySelector('.handle-value').textContent);
        const rightAge = parseInt(rightHandle.querySelector('.handle-value').textContent);
        
        if (Math.abs(age - leftAge) < Math.abs(age - rightAge)) {
            updateHandleByAge(leftHandle, age);
        } else {
            updateHandleByAge(rightHandle, age);
        }
        
        updateRangeFill();
        updateInputsFromSlider();
        triggerLiveSearch();
    });
    
    // Make step indicators clickable
    const ageSteps = document.querySelectorAll('.age-step');
    ageSteps.forEach(step => {
        step.addEventListener('click', function() {
            const ageText = this.textContent;
            let targetAge;
            
            if (ageText === '65+') {
                targetAge = 65;
            } else {
                targetAge = parseInt(ageText);
            }
            
            // Determine which handle to move based on current values
            const leftAge = parseInt(leftHandle.querySelector('.handle-value').textContent);
            const rightAge = parseInt(rightHandle.querySelector('.handle-value').textContent);
            
            if (Math.abs(targetAge - leftAge) < Math.abs(targetAge - rightAge)) {
                updateHandleByAge(leftHandle, targetAge);
            } else {
                updateHandleByAge(rightHandle, targetAge);
            }
            
            updateRangeFill();
            updateInputsFromSlider();
            triggerLiveSearch();
        });
    });
}

function updateHandlePosition(handle, percentage) {
    handle.style.left = percentage + '%';
    
    // Update the displayed value
    const valueDisplay = handle.querySelector('.handle-value');
    const age = Math.round(18 + (percentage * 0.62)); // Map 0-100% to 18-80 years
    valueDisplay.textContent = age;
}

function updateHandleByAge(handle, age) {
    const percentage = ((age - 18) / 62) * 100; // Map 18-80 years to 0-100%
    handle.style.left = percentage + '%';
    
    const valueDisplay = handle.querySelector('.handle-value');
    valueDisplay.textContent = age;
}

function updateSliderFromInputs() {
    const minAgeInput = document.getElementById('min-age');
    const maxAgeInput = document.getElementById('max-age');
    
    if (minAgeInput && maxAgeInput) {
        const minAge = parseInt(minAgeInput.value);
        const maxAge = parseInt(maxAgeInput.value);
        
        if (minAge >= 18 && maxAge <= 80 && minAge <= maxAge) {
            updateHandleByAge(document.querySelector('.range-handle-left'), minAge);
            updateHandleByAge(document.querySelector('.range-handle-right'), maxAge);
            updateRangeFill();
        }
    }
}

function updateInputsFromSlider() {
    const minAgeInput = document.getElementById('min-age');
    const maxAgeInput = document.getElementById('max-age');
    const leftAge = document.querySelector('.range-handle-left .handle-value').textContent;
    const rightAge = document.querySelector('.range-handle-right .handle-value').textContent;
    
    if (minAgeInput && maxAgeInput) {
        minAgeInput.value = leftAge;
        maxAgeInput.value = rightAge;
    }
}

function validateAgeInputs() {
    const minAgeInput = document.getElementById('min-age');
    const maxAgeInput = document.getElementById('max-age');
    
    if (minAgeInput && maxAgeInput) {
        let minAge = parseInt(minAgeInput.value);
        let maxAge = parseInt(maxAgeInput.value);
        
        // Ensure values are within bounds
        minAge = Math.max(18, Math.min(80, minAge));
        maxAge = Math.max(18, Math.min(80, maxAge));
        
        // Ensure min doesn't exceed max
        if (minAge > maxAge) {
            if (minAgeInput === document.activeElement) {
                maxAge = minAge;
            } else {
                minAge = maxAge;
            }
        }
        
        // Update inputs with validated values
        minAgeInput.value = minAge;
        maxAgeInput.value = maxAge;
        
        // Update slider to match
        updateSliderFromInputs();
        updateRangeFill();
    }
}

function triggerLiveSearch() {
    // Debounce the search to avoid too many requests
    if (window.liveSearchTimeout) {
        clearTimeout(window.liveSearchTimeout);
    }
    
    window.liveSearchTimeout = setTimeout(() => {
        const filters = collectFilterValues();
        console.log('Live search triggered with filters:', filters);
        
        // Show a subtle indicator that search is happening
        const searchIndicator = document.querySelector('.results-title');
        if (searchIndicator) {
            const originalText = searchIndicator.textContent;
            searchIndicator.innerHTML = originalText + ' <i class="bi bi-arrow-clockwise spin"></i>';
            
            setTimeout(() => {
                searchIndicator.innerHTML = originalText;
            }, 1000);
        }
        
        // Here you would typically make an AJAX call to update results
        // For now, we'll just log the filters
    }, 300);
}

function updateRangeFill() {
    const leftHandle = document.querySelector('.range-handle-left');
    const rightHandle = document.querySelector('.range-handle-right');
    const rangeFill = document.querySelector('.range-fill');
    
    if (!leftHandle || !rightHandle || !rangeFill) return;
    
    const leftPos = parseFloat(leftHandle.style.left) || 0;
    const rightPos = parseFloat(rightHandle.style.left) || 100;
    
    rangeFill.style.left = leftPos + '%';
    rangeFill.style.width = (rightPos - leftPos) + '%';
}

function updateAgeRangeDisplay() {
    // Set initial positions with better spacing (20-40 age range)
    const leftHandle = document.querySelector('.range-handle-left');
    const rightHandle = document.querySelector('.range-handle-right');
    
    if (leftHandle && rightHandle) {
        // Calculate percentages for age range 20-40
        const leftPercentage = ((20 - 18) / 62) * 100; // ~3.2%
        const rightPercentage = ((40 - 18) / 62) * 100; // ~35.5%
        
        leftHandle.style.left = leftPercentage + '%';
        rightHandle.style.left = rightPercentage + '%';
        updateRangeFill();
    }
}

function handleResultCardClick(card) {
    const profileName = card.querySelector('.result-name').textContent;
    showNotification(`Viewing profile: ${profileName}`, 'info');
    
    // Navigate to profile detail page
    setTimeout(() => {
        window.location.href = 'profile-detail.php';
    }, 1000);
}

function collectFilterValues() {
    const filters = {};
    
    // Location
    const locationSelect = document.querySelector('select[value*="Location"]');
    if (locationSelect) filters.location = locationSelect.value;
    
    // Age range
    const leftAge = document.querySelector('.range-handle-left .handle-value');
    const rightAge = document.querySelector('.range-handle-right .handle-value');
    if (leftAge && rightAge) {
        filters.ageRange = {
            min: parseInt(leftAge.textContent),
            max: parseInt(rightAge.textContent)
        };
    }
    
    // Education
    const educationSelect = document.querySelector('select[value*="Education"]');
    if (educationSelect) filters.education = educationSelect.value;
    
    // Profession
    const professionSelect = document.querySelector('select[value*="Profession"]');
    if (professionSelect) filters.profession = professionSelect.value;
    
    // Interests
    const interestsSelect = document.querySelector('select[value*="Interests"]');
    if (interestsSelect) filters.interests = interestsSelect.value;
    
    return filters;
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
window.searchPage = {
    handleApplyFilters,
    handleFilterChange,
    handleResultCardClick,
    collectFilterValues,
    showNotification,
    updateAgeRangeDisplay,
    triggerLiveSearch,
    validateAgeInputs
};
