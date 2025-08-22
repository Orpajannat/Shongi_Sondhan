document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm()) {
                // Show loading state
                const submitBtn = loginForm.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Signing In...';
                submitBtn.disabled = true;
                
                // Simulate form submission (replace with actual AJAX call)
                setTimeout(() => {
                    // For demo purposes, redirect to dashboard
                    // In real implementation, handle the response from server
                    window.location.href = 'dashboard.php';
                }, 2000);
            }
        });
    }
    
    function validateForm() {
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        let isValid = true;
        
        // Reset previous validation states
        loginForm.classList.remove('was-validated');
        
        // Email validation
        if (!email.value.trim()) {
            email.classList.add('is-invalid');
            isValid = false;
        } else if (!isValidEmail(email.value)) {
            email.classList.add('is-invalid');
            isValid = false;
        } else {
            email.classList.remove('is-invalid');
            email.classList.add('is-valid');
        }
        
        // Password validation
        if (!password.value.trim()) {
            password.classList.add('is-invalid');
            isValid = false;
        } else if (password.value.length < 6) {
            password.classList.add('is-invalid');
            isValid = false;
        } else {
            password.classList.remove('is-invalid');
            password.classList.add('is-valid');
        }
        
        if (!isValid) {
            loginForm.classList.add('was-validated');
        }
        
        return isValid;
    }
    
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Add floating animation to hearts
    const hearts = document.querySelectorAll('.floating-hearts i');
    hearts.forEach((heart, index) => {
        heart.style.animationDelay = `${index * 0.5}s`;
    });
    
    // Add input focus effects
    const inputs = document.querySelectorAll('.form-control');
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
