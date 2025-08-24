// My Profile Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    initializeMyProfile();
});

// Initialize the My Profile page
function initializeMyProfile() {
    // Set up tab navigation
    setupTabNavigation();
    
    // Load profile data
    loadProfileData();
    
    // Set up event listeners
    setupEventListeners();
}

// Set up tab navigation
function setupTabNavigation() {
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    tabLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all tabs
            tabLinks.forEach(l => l.classList.remove('active'));
            tabPanes.forEach(p => p.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Show corresponding tab content
            const targetTab = this.getAttribute('data-tab');
            document.getElementById(targetTab).classList.add('active');
        });
    });
}

// Load profile data from localStorage or API
function loadProfileData() {
    // In a real application, this would fetch from an API
    // For now, we'll use localStorage or default values
    
    const profileData = JSON.parse(localStorage.getItem('profileData')) || {
        name: 'Jannat Orpa',
        age: 28,
        location: 'Dhaka, Bangladesh',
        education: 'Bachelor\'s in Computer Science',
        profession: 'Software Engineer',
        income: '$50,000 - $75,000',
        marital_status: 'Never Married',
        height: '5\'4"',
        diet: 'Non-Vegetarian',
        smoking: 'Never',
        drinking: 'Socially',
        hobbies: 'Reading, Traveling, Cooking',
        languages: 'Bengali, English, Hindi',
        age_range: '25-35',
        education_level: 'Bachelor\'s or Higher',
        profession_pref: 'Any Professional',
        marital_pref: 'Never Married'
    };
    
    // Update the UI with profile data
    updateProfileUI(profileData);
}

// Update profile UI with data
function updateProfileUI(data) {
    // Update profile header
    document.getElementById('profile-name').textContent = data.name;
    document.getElementById('profile-location').textContent = `${data.age}, ${data.location}`;
    
    // Update about section
    updateInfoField('age', data.age);
    updateInfoField('height', data.height);
    updateInfoField('education', data.education);
    updateInfoField('profession', data.profession);
    updateInfoField('income', data.income);
    updateInfoField('marital_status', data.marital_status);
    
    // Update lifestyle section
    updateInfoField('diet', data.diet);
    updateInfoField('smoking', data.smoking);
    updateInfoField('drinking', data.drinking);
    updateInfoField('hobbies', data.hobbies);
    updateInfoField('languages', data.languages);
    
    // Update preferences section
    updateInfoField('age_range', data.age_range);
    updateInfoField('education_level', data.education_level);
    updateInfoField('location', data.location);
    updateInfoField('profession_pref', data.profession_pref);
    updateInfoField('marital_pref', data.marital_pref);
}

// Update individual info field
function updateInfoField(fieldName, value) {
    const fieldElement = document.querySelector(`[data-field="${fieldName}"]`);
    if (fieldElement) {
        fieldElement.textContent = value;
    }
}

// Set up event listeners
function setupEventListeners() {
    // Profile photo upload
    const photoUpload = document.getElementById('photo-upload');
    if (photoUpload) {
        photoUpload.addEventListener('change', function(e) {
            updateProfilePhoto(this);
        });
    }
}

// Edit profile function
function editProfile() {
    // Populate modal with current data
    const profileData = JSON.parse(localStorage.getItem('profileData')) || {};
    
    document.getElementById('editName').value = profileData.name || '';
    document.getElementById('editAge').value = profileData.age || '';
    document.getElementById('editLocation').value = profileData.location || '';
    document.getElementById('editEducation').value = profileData.education || '';
    document.getElementById('editProfession').value = profileData.profession || '';
    document.getElementById('editIncome').value = profileData.income || '';
    
    // Show the modal
    const modal = new bootstrap.Modal(document.getElementById('editProfileModal'));
    modal.show();
}

// Show About section edit modal
function showAboutEditModal() {
    const profileData = JSON.parse(localStorage.getItem('profileData')) || {};
    
    // Create and show the modal
    const modal = createEditModal('Edit About Information', [
        { id: 'editHeight', label: 'Height', type: 'text', value: profileData.height || '', required: true },
        { id: 'editMaritalStatus', label: 'Marital Status', type: 'select', value: profileData.marital_status || '', required: true, options: [
            'Never Married', 'Divorced', 'Widowed', 'Awaiting Divorce'
        ]},
        { id: 'editEducation', label: 'Education', type: 'text', value: profileData.education || '', required: true },
        { id: 'editProfession', label: 'Profession', type: 'text', value: profileData.profession || '', required: true },
        { id: 'editIncome', label: 'Income Range', type: 'select', value: profileData.income || '', required: true, options: [
            'Below $25,000', '$25,000 - $50,000', '$50,000 - $75,000', '$75,000 - $100,000', 'Above $100,000'
        ]}
    ], 'saveAboutChanges');
    
    document.body.appendChild(modal);
    const bootstrapModal = new bootstrap.Modal(modal);
    bootstrapModal.show();
}

// Show Lifestyle section edit modal
function showLifestyleEditModal() {
    const profileData = JSON.parse(localStorage.getItem('profileData')) || {};
    
    // Create and show the modal
    const modal = createEditModal('Edit Lifestyle Information', [
        { id: 'editDiet', label: 'Diet', type: 'select', value: profileData.diet || '', required: true, options: [
            'Vegetarian', 'Non-Vegetarian', 'Vegan', 'Jain', 'Other'
        ]},
        { id: 'editSmoking', label: 'Smoking', type: 'select', value: profileData.smoking || '', required: true, options: [
            'Never', 'Occasionally', 'Regularly', 'Quit'
        ]},
        { id: 'editDrinking', label: 'Drinking', type: 'select', value: profileData.drinking || '', required: true, options: [
            'Never', 'Socially', 'Occasionally', 'Regularly', 'Quit'
        ]},
        { id: 'editHobbies', label: 'Hobbies', type: 'text', value: profileData.hobbies || '', required: false },
        { id: 'editLanguages', label: 'Languages', type: 'text', value: profileData.languages || '', required: false }
    ], 'saveLifestyleChanges');
    
    document.body.appendChild(modal);
    const bootstrapModal = new bootstrap.Modal(modal);
    bootstrapModal.show();
}

// Show Preferences section edit modal
function showPreferencesEditModal() {
    const profileData = JSON.parse(localStorage.getItem('profileData')) || {};
    
    // Create and show the modal
    const modal = createEditModal('Edit Partner Preferences', [
        { id: 'editAgeRange', label: 'Age Range', type: 'text', value: profileData.age_range || '', required: true, placeholder: 'e.g., 25-35' },
        { id: 'editEducationLevel', label: 'Education Level', type: 'select', value: profileData.education_level || '', required: true, options: [
            'High School', 'Some College', 'Bachelor\'s Degree', 'Master\'s Degree', 'PhD', 'Any'
        ]},
        { id: 'editLocationPref', label: 'Preferred Location', type: 'text', value: profileData.location || '', required: true },
        { id: 'editProfessionPref', label: 'Profession Preference', type: 'select', value: profileData.profession_pref || '', required: true, options: [
            'Any Professional', 'Engineer', 'Doctor', 'Teacher', 'Business', 'Other', 'No Preference'
        ]},
        { id: 'editMaritalPref', label: 'Marital Status Preference', type: 'select', value: profileData.marital_pref || '', required: true, options: [
            'Never Married', 'Divorced', 'Widowed', 'Any'
        ]}
    ], 'savePreferencesChanges');
    
    document.body.appendChild(modal);
    const bootstrapModal = new bootstrap.Modal(modal);
    bootstrapModal.show();
}

// Create a dynamic edit modal
function createEditModal(title, fields, saveFunction) {
    const modal = document.createElement('div');
    modal.className = 'modal fade';
    modal.id = 'dynamicEditModal';
    modal.tabIndex = '-1';
    modal.setAttribute('aria-labelledby', 'dynamicEditModalLabel');
    modal.setAttribute('aria-hidden', 'true');
    
    let fieldsHTML = '';
    fields.forEach(field => {
        if (field.type === 'select') {
            let optionsHTML = '<option value="">Select ' + field.label + '</option>';
            field.options.forEach(option => {
                const selected = option === field.value ? 'selected' : '';
                optionsHTML += `<option value="${option}" ${selected}>${option}</option>`;
            });
            fieldsHTML += `
                <div class="col-md-6 mb-3">
                    <label for="${field.id}" class="form-label">${field.label}</label>
                    <select class="form-select" id="${field.id}" name="${field.id}" ${field.required ? 'required' : ''}>
                        ${optionsHTML}
                    </select>
                </div>
            `;
        } else {
            fieldsHTML += `
                <div class="col-md-6 mb-3">
                    <label for="${field.id}" class="form-label">${field.label}</label>
                    <input type="${field.type}" class="form-control" id="${field.id}" name="${field.id}" 
                           value="${field.value}" ${field.required ? 'required' : ''} 
                           ${field.placeholder ? 'placeholder="' + field.placeholder + '"' : ''}>
                </div>
            `;
        }
    });
    
    modal.innerHTML = `
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dynamicEditModalLabel">${title}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="dynamicEditForm">
                        <div class="row">
                            ${fieldsHTML}
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="${saveFunction}()">Save Changes</button>
                </div>
            </div>
        </div>
    `;
    
    return modal;
}

// Save profile changes
function saveProfileChanges() {
    const form = document.getElementById('editProfileForm');
    const formData = new FormData(form);
    
    // Get form values
    const profileData = {
        name: formData.get('name'),
        age: parseInt(formData.get('age')),
        location: formData.get('location'),
        education: formData.get('education'),
        profession: formData.get('profession'),
        income: formData.get('income')
    };
    
    // Validate form
    if (!profileData.name || !profileData.age || !profileData.location) {
        showNotification('Please fill in all required fields.', 'error');
        return;
    }
    
    // Save to localStorage (in real app, this would be an API call)
    const existingData = JSON.parse(localStorage.getItem('profileData')) || {};
    const updatedData = { ...existingData, ...profileData };
    localStorage.setItem('profileData', JSON.stringify(updatedData));
    
    // Update UI
    updateProfileUI(updatedData);
    
    // Close modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('editProfileModal'));
    modal.hide();
    
    // Show success message
    showNotification('Profile updated successfully!', 'success');
}

// Save About section changes
function saveAboutChanges() {
    const form = document.getElementById('dynamicEditForm');
    const formData = new FormData(form);
    
    // Get form values
    const aboutData = {
        height: formData.get('editHeight'),
        marital_status: formData.get('editMaritalStatus'),
        education: formData.get('editEducation'),
        profession: formData.get('editProfession'),
        income: formData.get('editIncome')
    };
    
    // Validate form
    if (!aboutData.height || !aboutData.marital_status || !aboutData.education || !aboutData.profession || !aboutData.income) {
        showNotification('Please fill in all required fields.', 'error');
        return;
    }
    
    // Save to localStorage
    const existingData = JSON.parse(localStorage.getItem('profileData')) || {};
    const updatedData = { ...existingData, ...aboutData };
    localStorage.setItem('profileData', JSON.stringify(updatedData));
    
    // Update UI
    updateProfileUI(updatedData);
    
    // Close modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('dynamicEditModal'));
    modal.hide();
    
    // Remove modal from DOM
    modal.remove();
    
    // Show success message
    showNotification('About information updated successfully!', 'success');
}

// Save Lifestyle section changes
function saveLifestyleChanges() {
    const form = document.getElementById('dynamicEditForm');
    const formData = new FormData(form);
    
    // Get form values
    const lifestyleData = {
        diet: formData.get('editDiet'),
        smoking: formData.get('editSmoking'),
        drinking: formData.get('editDrinking'),
        hobbies: formData.get('editHobbies'),
        languages: formData.get('editLanguages')
    };
    
    // Validate form
    if (!lifestyleData.diet || !lifestyleData.smoking || !lifestyleData.drinking) {
        showNotification('Please fill in all required fields.', 'error');
        return;
    }
    
    // Save to localStorage
    const existingData = JSON.parse(localStorage.getItem('profileData')) || {};
    const updatedData = { ...existingData, ...lifestyleData };
    localStorage.setItem('profileData', JSON.stringify(updatedData));
    
    // Update UI
    updateProfileUI(updatedData);
    
    // Close modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('dynamicEditModal'));
    modal.hide();
    
    // Remove modal from DOM
    modal.remove();
    
    // Show success message
    showNotification('Lifestyle information updated successfully!', 'success');
}

// Save Preferences section changes
function savePreferencesChanges() {
    const form = document.getElementById('dynamicEditForm');
    const formData = new FormData(form);
    
    // Get form values
    const preferencesData = {
        age_range: formData.get('editAgeRange'),
        education_level: formData.get('editEducationLevel'),
        location: formData.get('editLocationPref'),
        profession_pref: formData.get('editProfessionPref'),
        marital_pref: formData.get('editMaritalPref')
    };
    
    // Validate form
    if (!preferencesData.age_range || !preferencesData.education_level || !preferencesData.location || !preferencesData.profession_pref || !preferencesData.marital_pref) {
        showNotification('Please fill in all required fields.', 'error');
        return;
    }
    
    // Save to localStorage
    const existingData = JSON.parse(localStorage.getItem('profileData')) || {};
    const updatedData = { ...existingData, ...preferencesData };
    localStorage.setItem('profileData', JSON.stringify(updatedData));
    
    // Update UI
    updateProfileUI(updatedData);
    
    // Close modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('dynamicEditModal'));
    modal.hide();
    
    // Remove modal from DOM
    modal.remove();
    
    // Show success message
    showNotification('Partner preferences updated successfully!', 'success');
}

// Edit specific section
function editSection(sectionName) {
    // Show the appropriate edit modal based on the section
    switch(sectionName) {
        case 'about':
            showAboutEditModal();
            break;
        case 'lifestyle':
            showLifestyleEditModal();
            break;
        case 'preferences':
            showPreferencesEditModal();
            break;
        case 'photos':
            // Photos are handled separately with add/delete functionality
            break;
        default:
            editProfile();
    }
}

// Update profile photo
function updateProfilePhoto(input) {
    const file = input.files[0];
    if (file) {
        // Validate file type
        if (!file.type.startsWith('image/')) {
            showNotification('Please select a valid image file.', 'error');
            return;
        }
        
        // Validate file size (max 5MB)
        if (file.size > 5 * 1024 * 1024) {
            showNotification('Image size should be less than 5MB.', 'error');
            return;
        }
        
        const reader = new FileReader();
        reader.onload = function(e) {
            // Update profile photo
            document.getElementById('profile-photo').src = e.target.result;
            
            // Save to localStorage (in real app, this would upload to server)
            localStorage.setItem('profilePhoto', e.target.result);
            
            showNotification('Profile photo updated successfully!', 'success');
        };
        reader.readAsDataURL(file);
    }
}

// Add new photo
function addNewPhoto() {
    // Create a file input element
    const fileInput = document.createElement('input');
    fileInput.type = 'file';
    fileInput.accept = 'image/*';
    fileInput.style.display = 'none';
    
    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            // Validate file
            if (!file.type.startsWith('image/')) {
                showNotification('Please select a valid image file.', 'error');
                return;
            }
            
            if (file.size > 5 * 1024 * 1024) {
                showNotification('Image size should be less than 5MB.', 'error');
                return;
            }
            
            // Add photo to photos grid
            addPhotoToGrid(file);
        }
    });
    
    fileInput.click();
}

// Add photo to photos grid
function addPhotoToGrid(file) {
    const reader = new FileReader();
    reader.onload = function(e) {
        const photosGrid = document.getElementById('photos-content');
        const addPhotoItem = photosGrid.querySelector('.add-photo');
        
        // Create new photo item
        const photoItem = document.createElement('div');
        photoItem.className = 'photo-item';
        photoItem.innerHTML = `
            <img src="${e.target.result}" alt="Profile Photo" class="profile-photo">
            <div class="photo-actions">
                <button class="btn btn-sm btn-outline-primary" onclick="setAsPrimary(${photosGrid.children.length - 1})" title="Set as Primary">
                    <i class="bi bi-star"></i>
                </button>
                <button class="btn btn-sm btn-outline-info" onclick="editPhotoDescription(${photosGrid.children.length - 1})" title="Edit Description">
                    <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-sm btn-outline-danger" onclick="deletePhoto(${photosGrid.children.length - 1})" title="Delete Photo">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
        `;
        
        // Insert before the add photo button
        photosGrid.insertBefore(photoItem, addPhotoItem);
        
        showNotification('Photo added successfully!', 'success');
    };
    reader.readAsDataURL(file);
}

// Set photo as primary
function setAsPrimary(photoIndex) {
    // Remove primary label from all photos
    const photoLabels = document.querySelectorAll('.photo-label');
    photoLabels.forEach(label => label.remove());
    
    // Add primary label to selected photo
    const photoItems = document.querySelectorAll('.photo-item:not(.add-photo)');
    if (photoItems[photoIndex]) {
        const label = document.createElement('span');
        label.className = 'photo-label primary';
        label.textContent = 'Primary';
        photoItems[photoIndex].appendChild(label);
        
        // Update profile photo
        const photoSrc = photoItems[photoIndex].querySelector('img').src;
        document.getElementById('profile-photo').src = photoSrc;
        
        showNotification('Primary photo updated!', 'success');
    }
}

// Delete photo
function deletePhoto(photoIndex) {
    const photoItems = document.querySelectorAll('.photo-item:not(.add-photo)');
    if (photoItems[photoIndex]) {
        // Check if it's the primary photo
        const isPrimary = photoItems[photoIndex].querySelector('.photo-label.primary');
        
        if (isPrimary) {
            showNotification('Cannot delete primary photo. Set another photo as primary first.', 'error');
            return;
        }
        
        // Remove the photo
        photoItems[photoIndex].remove();
        
        // Reindex remaining photos
        reindexPhotos();
        
        showNotification('Photo deleted successfully!', 'success');
    }
}

// Reindex photos after deletion
function reindexPhotos() {
    const photoItems = document.querySelectorAll('.photo-item:not(.add-photo)');
    photoItems.forEach((item, index) => {
        const setPrimaryBtn = item.querySelector('.btn-outline-primary');
        const editBtn = item.querySelector('.btn-outline-info');
        const deleteBtn = item.querySelector('.btn-outline-danger');
        
        if (setPrimaryBtn) {
            setPrimaryBtn.onclick = () => setAsPrimary(index);
        }
        if (editBtn) {
            editBtn.onclick = () => editPhotoDescription(index);
        }
        if (deleteBtn) {
            deleteBtn.onclick = () => deletePhoto(index);
        }
    });
}

// Edit photo description
function editPhotoDescription(photoIndex) {
    const photoItems = document.querySelectorAll('.photo-item:not(.add-photo)');
    if (photoItems[photoIndex]) {
        const currentDescription = photoItems[photoIndex].getAttribute('data-description') || '';
        
        // Create and show description edit modal
        const modal = createPhotoDescriptionModal(currentDescription, photoIndex);
        document.body.appendChild(modal);
        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();
    }
}

// Create photo description edit modal
function createPhotoDescriptionModal(currentDescription, photoIndex) {
    const modal = document.createElement('div');
    modal.className = 'modal fade';
    modal.id = 'photoDescriptionModal';
    modal.tabIndex = '-1';
    modal.setAttribute('aria-labelledby', 'photoDescriptionModalLabel');
    modal.setAttribute('aria-hidden', 'true');
    
    modal.innerHTML = `
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="photoDescriptionModalLabel">Edit Photo Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="photoDescriptionForm">
                        <div class="mb-3">
                            <label for="photoDescription" class="form-label">Photo Description</label>
                            <textarea class="form-control" id="photoDescription" name="photoDescription" rows="3" placeholder="Enter a description for this photo...">${currentDescription}</textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="savePhotoDescription(${photoIndex})">Save Description</button>
                </div>
            </div>
        </div>
    `;
    
    return modal;
}

// Save photo description
function savePhotoDescription(photoIndex) {
    const description = document.getElementById('photoDescription').value.trim();
    const photoItems = document.querySelectorAll('.photo-item:not(.add-photo)');
    
    if (photoItems[photoIndex]) {
        // Save description to photo element
        photoItems[photoIndex].setAttribute('data-description', description);
        
        // Add description display if it exists
        let descriptionDisplay = photoItems[photoIndex].querySelector('.photo-description');
        if (description && !descriptionDisplay) {
            descriptionDisplay = document.createElement('div');
            descriptionDisplay.className = 'photo-description';
            descriptionDisplay.textContent = description;
            photoItems[photoIndex].appendChild(descriptionDisplay);
        } else if (descriptionDisplay) {
            if (description) {
                descriptionDisplay.textContent = description;
            } else {
                descriptionDisplay.remove();
            }
        }
        
        // Close modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('photoDescriptionModal'));
        modal.hide();
        
        // Remove modal from DOM
        modal.remove();
        
        showNotification('Photo description updated successfully!', 'success');
    }
}

// Delete profile function
function deleteProfile() {
    // Show delete confirmation modal
    const modal = new bootstrap.Modal(document.getElementById('deleteProfileModal'));
    modal.show();
}

// Confirm profile deletion
function confirmDeleteProfile() {
    // In a real application, this would make an API call to delete the profile
    
    // Clear localStorage
    localStorage.removeItem('profileData');
    localStorage.removeItem('profilePhoto');
    
    // Close modal
    const deleteModal = bootstrap.Modal.getInstance(document.getElementById('deleteProfileModal'));
    deleteModal.hide();
    
    // Show success message
    showNotification('Profile deleted successfully!', 'success');
    
    // Redirect to dashboard or login page
    setTimeout(() => {
        window.location.href = 'dashboard.php';
    }, 2000);
}

// Show notification
function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `alert alert-${type === 'error' ? 'danger' : type} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 100px; right: 20px; z-index: 9999; min-width: 300px;';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    // Add to body
    document.body.appendChild(notification);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 5000);
}

// Export functions for global access
window.editProfile = editProfile;
window.saveProfileChanges = saveProfileChanges;
window.editSection = editSection;
window.updateProfilePhoto = updateProfilePhoto;
window.addNewPhoto = addNewPhoto;
window.setAsPrimary = setAsPrimary;
window.deletePhoto = deletePhoto;
window.deleteProfile = deleteProfile;
window.confirmDeleteProfile = confirmDeleteProfile;

// Export new edit functions
window.showAboutEditModal = showAboutEditModal;
window.showLifestyleEditModal = showLifestyleEditModal;
window.showPreferencesEditModal = showPreferencesEditModal;
window.saveAboutChanges = saveAboutChanges;
window.saveLifestyleChanges = saveLifestyleChanges;
window.savePreferencesChanges = savePreferencesChanges;

// Export photo management functions
window.editPhotoDescription = editPhotoDescription;
window.savePhotoDescription = savePhotoDescription;
