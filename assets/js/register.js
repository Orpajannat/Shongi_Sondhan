document.addEventListener('DOMContentLoaded', function() {
    let currentStep = 1;
    const totalSteps = 4;
    
    const progressBar = document.getElementById('progressBar');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    
    // Initialize the form
    updateProgress();
    updateNavigation();
    
    // Event listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', nextStep);
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', prevStep);
    }
    
    // Form submission
    const registrationForm = document.getElementById('registrationForm');
    if (registrationForm) {
        registrationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            if (validateCurrentStep()) {
                submitRegistration();
            }
        });
    }
    
    // Auto-calculate age from date of birth
    const dateOfBirth = document.getElementById('dateOfBirth');
    const ageInput = document.getElementById('age');
    
    if (dateOfBirth && ageInput) {
        dateOfBirth.addEventListener('change', function() {
            const birthDate = new Date(this.value);
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            
            ageInput.value = age;
        });
    }
    
    // Password confirmation validation
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    
    if (password && confirmPassword) {
        confirmPassword.addEventListener('input', function() {
            if (this.value !== password.value) {
                this.setCustomValidity('Passwords do not match');
            } else {
                this.setCustomValidity('');
            }
        });
    }
    
    function nextStep() {
        if (validateCurrentStep()) {
            if (currentStep < totalSteps) {
                currentStep++;
                updateProgress();
                updateNavigation();
                showStep(currentStep);
            }
        }
    }
    
    function prevStep() {
        if (currentStep > 1) {
            currentStep--;
            updateProgress();
            updateNavigation();
            showStep(currentStep);
        }
    }
    
    function showStep(step) {
        // Hide all steps
        document.querySelectorAll('.form-step').forEach(stepEl => {
            stepEl.classList.remove('active');
        });
        
        // Show current step
        const currentStepEl = document.getElementById(`step${step}`);
        if (currentStepEl) {
            currentStepEl.classList.add('active');
        }
        
        // Update progress steps
        document.querySelectorAll('.step').forEach((stepEl, index) => {
            if (index + 1 <= step) {
                stepEl.classList.add('active');
            } else {
                stepEl.classList.remove('active');
            }
        });
        
        // Show summary on last step
        if (step === totalSteps) {
            showSummary();
        }
    }
    
    function updateProgress() {
        const progress = ((currentStep - 1) / (totalSteps - 1)) * 100;
        if (progressBar) {
            progressBar.style.width = progress + '%';
        }
    }
    
    function updateNavigation() {
        if (prevBtn) {
            prevBtn.style.display = currentStep === 1 ? 'none' : 'block';
        }
        
        if (nextBtn) {
            nextBtn.style.display = currentStep === totalSteps ? 'none' : 'block';
        }
        
        if (submitBtn) {
            submitBtn.style.display = currentStep === totalSteps ? 'block' : 'none';
        }
    }
    
    function validateCurrentStep() {
        const currentStepEl = document.getElementById(`step${currentStep}`);
        const inputs = currentStepEl.querySelectorAll('input[required], select[required]');
        let isValid = true;
        
        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('is-invalid');
                isValid = false;
            } else {
                input.classList.remove('is-invalid');
                input.classList.add('is-valid');
            }
        });
        
        // Special validations
        if (currentStep === 1) {
            // Password confirmation validation
            if (password && confirmPassword && password.value !== confirmPassword.value) {
                confirmPassword.classList.add('is-invalid');
                isValid = false;
            }
            
            // Email validation
            const email = document.getElementById('email');
            if (email && !isValidEmail(email.value)) {
                email.classList.add('is-invalid');
                isValid = false;
            }
            
            // Mobile validation
            const mobile = document.getElementById('mobile');
            if (mobile && !isValidMobile(mobile.value)) {
                mobile.classList.add('is-invalid');
                isValid = false;
            }
        }
        
        if (currentStep === 2) {
            // Age validation
            const age = document.getElementById('age');
            if (age && (age.value < 18 || age.value > 80)) {
                age.classList.add('is-invalid');
                isValid = false;
            }
        }
        
        if (currentStep === 4) {
            // Terms acceptance validation
            const termsAccepted = document.getElementById('termsAccepted');
            if (termsAccepted && !termsAccepted.checked) {
                termsAccepted.classList.add('is-invalid');
                isValid = false;
            }
        }
        
        return isValid;
    }
    
    function showSummary() {
        const summaryContent = document.getElementById('summaryContent');
        if (summaryContent) {
            const formData = new FormData(registrationForm);
            let summary = '';
            
            // Basic info
            summary += `<div class="mb-2"><strong>Name:</strong> ${formData.get('full_name')}</div>`;
            summary += `<div class="mb-2"><strong>Email:</strong> ${formData.get('email')}</div>`;
            summary += `<div class="mb-2"><strong>Profile For:</strong> ${formData.get('profile_for')}</div>`;
            summary += `<div class="mb-2"><strong>Age:</strong> ${formData.get('age')} years</div>`;
            summary += `<div class="mb-2"><strong>City:</strong> ${formData.get('city')}</div>`;
            summary += `<div class="mb-2"><strong>Religion:</strong> ${formData.get('religion')}</div>`;
            
            summaryContent.innerHTML = summary;
        }
    }
    
    function submitRegistration() {
        // Show loading state
        const submitBtn = document.getElementById('submitBtn');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Creating Account...';
        submitBtn.disabled = true;
        
        // Simulate form submission (replace with actual AJAX call)
        setTimeout(() => {
            // For demo purposes, show success message
            // In real implementation, handle the response from server
            showSuccessMessage();
        }, 2000);
    }
    
    function showSuccessMessage() {
        const registerCard = document.querySelector('.register-card');
        if (registerCard) {
            registerCard.innerHTML = `
                <div class="text-center py-5">
                    <div class="success-heart mb-4">
                        <i class="bi bi-heart-fill text-success" style="font-size: 4rem;"></i>
                    </div>
                    <h2 class="h4 text-white mb-3">Registration Successful!</h2>
                    <p class="text-white-50 mb-4">Your account has been created successfully. Welcome to Matrimony BD!</p>
                    <a href="login.php" class="btn btn-success rounded-pill px-4">
                        <i class="bi bi-arrow-right me-2"></i>Proceed to Login
                    </a>
                </div>
            `;
        }
    }
    
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    function isValidMobile(mobile) {
        const mobileRegex = /^(\+?88)?01[3-9]\d{8}$/;
        return mobileRegex.test(mobile);
    }
    
    // Add floating animation to hearts
    const hearts = document.querySelectorAll('.floating-hearts i');
    hearts.forEach((heart, index) => {
        heart.style.animationDelay = `${index * 0.5}s`;
    });
    
    // Add input focus effects
    const inputs = document.querySelectorAll('.form-control, .form-select');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('focused');
            }
        });
    });
});
