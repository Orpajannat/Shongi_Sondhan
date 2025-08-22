<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register - ShongiSondhan</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>
<body class="register-page" style="background: #fbf4ef;">
    <!-- Background Elements -->
    <div class="register-bg">
        <div class="floating-hearts">
            <i class="bi bi-heart-fill heart-1" style="color: rgba(170, 14, 47, 0.15);"></i>
            <i class="bi bi-heart-fill heart-2" style="color: rgba(170, 14, 47, 0.15);"></i>
            <i class="bi bi-heart-fill heart-3" style="color: rgba(170, 14, 47, 0.15);"></i>
            <i class="bi bi-heart-fill heart-4" style="color: rgba(170, 14, 47, 0.15);"></i>
            <i class="bi bi-heart-fill heart-5" style="color: rgba(170, 14, 47, 0.15);"></i>
        </div>
    </div>

    <!-- Header -->
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background: linear-gradient(180deg, rgba(170, 14, 47, 0.1), rgba(166, 14, 45, 0.05), rgba(107, 42, 26, 0.03));">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <span class="me-2 d-inline-block" aria-hidden="true">
                    <svg width="36" height="36" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="g" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#fde8da" />
                                <stop offset="100%" stop-color="#aa0e2f" />
                            </linearGradient>
                        </defs>
                        <path d="M32 54c-1.4 0-2.8-.5-3.9-1.5C17 43.6 8 35.4 8 24.9 8 17 14.1 11 22 11c4.2 0 8.1 2 10 5.1C34.9 13 38.8 11 43 11c7.9 0 14 6 14 13.9 0 10.5-9 18.7-20.1 27.6-1.1 1-2.5 1.5-3.9 1.5z" fill="url(#g)"/>
                    </svg>
                </span>
                <span class="fw-bold fs-5" style="color: #6b2a1a;">ShongiSondhan</span>
            </a>
            <div class="ms-auto d-flex align-items-center">
                <a href="login.php" class="btn rounded-pill px-4 me-2" style="background: #aa0e2f; color: white; border: 2px solid #aa0e2f;">Login</a>
                <a href="index.php" class="btn rounded-pill px-4" style="background: transparent; color: #6b2a1a; border: 2px solid #6b2a1a;">Back to Home</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-vh-100 d-flex align-items-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Registration Card -->
                    <div class="register-card" style="background: linear-gradient(135deg, #fbf4ef 0%, #fde8da 100%); border: 2px solid #aa0e2f; box-shadow: 0 20px 60px rgba(170, 14, 47, 0.2);">
                        <div class="register-header text-center mb-4">
                            <div class="register-heart-badge mb-3" style="background: #aa0e2f; color: white; box-shadow: 0 8px 24px rgba(170, 14, 47, 0.4);">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                            <h1 class="h3 fw-bold mb-2" style="color: #aa0e2f; text-shadow: 0 2px 4px rgba(170, 14, 47, 0.1);">Create Your Matrimony Profile</h1>
                            <p class="mb-0" style="color: #6b2a1a; font-weight: 500;">Start your journey to find your perfect match</p>
                        </div>

                        <!-- Progress Bar -->
                        <div class="progress-container mb-4">
                            <div class="progress" style="height: 10px; background-color: #fde8da; border-radius: 8px; box-shadow: inset 0 2px 4px rgba(170, 14, 47, 0.1);">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background: linear-gradient(90deg, #aa0e2f, #a60e2d); border-radius: 8px; box-shadow: 0 2px 8px rgba(170, 14, 47, 0.3);" id="progressBar"></div>
                            </div>
                            <div class="progress-steps">
                                <span class="step active" data-step="1" style="color: #aa0e2f; font-weight: 600; text-shadow: 0 1px 2px rgba(170, 14, 47, 0.2);">Basic Info</span>
                                <span class="step" data-step="2" style="color: #6b2a1a; font-weight: 500;">Personal Details</span>
                                <span class="step" data-step="3" style="color: #6b2a1a; font-weight: 500;">Preferences</span>
                                <span class="step" data-step="4" style="color: #6b2a1a; font-weight: 500;">Complete</span>
                            </div>
                        </div>

                        <form id="registrationForm" action="process_registration.php" method="post" enctype="multipart/form-data" novalidate>
                            <!-- Step 1: Basic Information -->
                            <div class="form-step active" id="step1">
                                <h3 class="h5 mb-3" style="color: #aa0e2f; font-weight: 600; text-shadow: 0 1px 2px rgba(170, 14, 47, 0.1);">Basic Information</h3>
                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <label for="profileFor" class="form-label" style="color: #6b2a1a; font-weight: 600;">Profile For</label>
                                        <select id="profileFor" name="profile_for" class="form-select" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="bride">Bride</option>
                                            <option value="groom">Groom</option>
                                            <option value="relative">Relative/Guardian</option>
                                        </select>
                                        <div class="invalid-feedback">Please select profile type.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="fullName" class="form-label" style="color: #6b2a1a; font-weight: 600;">Full Name</label>
                                        <input type="text" class="form-control" id="fullName" name="full_name" placeholder="Enter your full name" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px;" />
                                        <div class="invalid-feedback">Please enter your full name.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="email" class="form-label" style="color: #6b2a1a; font-weight: 600;">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px;" />
                                        <div class="invalid-feedback">Please enter a valid email.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="mobile" class="form-label" style="color: #6b2a1a; font-weight: 600;">Mobile Number</label>
                                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="01XXXXXXXXX" pattern="^(\+?88)?01[3-9]\d{8}$" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px;" />
                                        <div class="invalid-feedback">Please enter a valid BD mobile number.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="password" class="form-label" style="color: #6b2a1a; font-weight: 600;">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Create a strong password" required minlength="8" style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px;" />
                                        <div class="invalid-feedback">Password must be at least 8 characters.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="confirmPassword" class="form-label" style="color: #6b2a1a; font-weight: 600;">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmPassword" name="confirm_password" placeholder="Confirm your password" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px;" />
                                        <div class="invalid-feedback">Password must be at least 8 characters.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Personal Details -->
                            <div class="form-step" id="step2">
                                <h3 class="h5 mb-3" style="color: #aa0e2f; font-weight: 600; text-shadow: 0 1px 2px rgba(170, 14, 47, 0.1);">Personal Details</h3>
                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <label for="dateOfBirth" class="form-label" style="color: #6b2a1a; font-weight: 600;">Date of Birth</label>
                                        <input type="date" class="form-control" id="dateOfBirth" name="date_of_birth" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;" />
                                        <div class="invalid-feedback">Please enter your date of birth.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="age" class="form-label" style="color: #6b2a1a; font-weight: 600;">Age</label>
                                        <input type="number" class="form-control" id="age" name="age" placeholder="Your age" min="18" max="80" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;" />
                                        <div class="invalid-feedback">Please enter your age (18-80).</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="religion" class="form-label" style="color: #6b2a1a; font-weight: 600;">Religion</label>
                                        <select id="religion" name="religion" class="form-select" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="islam">Islam</option>
                                            <option value="hinduism">Hinduism</option>
                                            <option value="christianity">Christianity</option>
                                            <option value="buddhism">Buddhism</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your religion.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="maritalStatus" class="form-label" style="color: #6b2a1a; font-weight: 600;">Marital Status</label>
                                        <select id="maritalStatus" name="marital_status" class="form-select" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="never_married">Never Married</option>
                                            <option value="divorced">Divorced</option>
                                            <option value="widowed">Widowed</option>
                                        </select>
                                        <div class="invalid-feedback">Please select marital status.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="education" class="form-label" style="color: #6b2a1a; font-weight: 600;">Education Level</label>
                                        <select id="education" name="education" class="form-select" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="high_school">High School</option>
                                            <option value="bachelor">Bachelor's Degree</option>
                                            <option value="master">Master's Degree</option>
                                            <option value="phd">PhD</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">Please select education level.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="profession" class="form-label" style="color: #6b2a1a; font-weight: 600;">Profession</label>
                                        <input type="text" class="form-control" id="profession" name="profession" placeholder="Your profession" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;" />
                                        <div class="invalid-feedback">Please enter your profession.</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="city" class="form-label" style="color: #6b2a1a; font-weight: 600;">City</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="Your city" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;" />
                                        <div class="invalid-feedback">Please enter your city.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Preferences -->
                            <div class="form-step" id="step3">
                                <h3 class="h5 mb-3" style="color: #aa0e2f; font-weight: 600; text-shadow: 0 1px 2px rgba(170, 14, 47, 0.1);">Partner Preferences</h3>
                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <label for="preferredAgeMin" class="form-label" style="color: #6b2a1a; font-weight: 600;">Preferred Age Range</label>
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <input type="number" class="form-control" id="preferredAgeMin" name="preferred_age_min" placeholder="Min" min="18" max="80" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;" />
                                            </div>
                                            <div class="col-6">
                                                <input type="number" class="form-control" id="preferredAgeMax" name="preferred_age_max" placeholder="Max" min="18" max="80" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;" />
                                            </div>
                                        </div>
                                        <div class="invalid-feedback">Please enter age range.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="preferredReligion" class="form-label" style="color: #6b2a1a; font-weight: 600;">Preferred Religion</label>
                                        <select id="preferredReligion" name="preferred_religion" class="form-select" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="same">Same as mine</option>
                                            <option value="any">Any religion</option>
                                            <option value="islam">Islam</option>
                                            <option value="hinduism">Hinduism</option>
                                            <option value="christianity">Christianity</option>
                                            <option value="buddhism">Buddhism</option>
                                        </select>
                                        <div class="invalid-feedback">Please select preferred religion.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="preferredEducation" class="form-label" style="color: #6b2a1a; font-weight: 600;">Preferred Education</label>
                                        <select id="preferredEducation" name="preferred_education" class="form-select" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="any">Any education level</option>
                                            <option value="high_school">High School</option>
                                            <option value="bachelor">Bachelor's Degree</option>
                                            <option value="master">Master's Degree</option>
                                            <option value="phd">PhD</option>
                                        </select>
                                        <div class="invalid-feedback">Please select preferred education.</div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="preferredCity" class="form-label" style="color: #6b2a1a; font-weight: 600;">Preferred City</label>
                                        <input type="text" class="form-control" id="preferredCity" name="preferred_city" placeholder="Preferred city" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;" />
                                        <div class="invalid-feedback">Please enter preferred city.</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="aboutMe" class="form-label" style="color: #6b2a1a; font-weight: 600;">About Me</label>
                                        <textarea class="form-control" id="aboutMe" name="about_me" rows="4" placeholder="Tell us about yourself, your interests, and what you're looking for in a partner..." maxlength="500" style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px; font-size: 16px;"></textarea>
                                        <div class="form-text" style="color: #aa0e2f;">Maximum 500 characters</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 4: Complete -->
                            <div class="form-step" id="step4">
                                <h3 class="h3 mb-3" style="color: #aa0e2f; font-weight: 600; text-shadow: 0 1px 2px rgba(170, 14, 47, 0.1);">Complete Registration</h3>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="termsAccepted" name="terms_accepted" required style="accent-color: #aa0e2f;">
                                            <label class="form-check-label" for="termsAccepted" style="color: #6b2a1a;">
                                                I agree to the <a href="#" class="text-decoration-none" style="color: #aa0e2f;">Terms of Service</a> and <a href="#" class="text-decoration-none" style="color: #aa0e2f;">Privacy Policy</a>
                                            </label>
                                            <div class="invalid-feedback">You must agree to the terms.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter" style="accent-color: #aa0e2f;">
                                            <label class="form-check-label" for="newsletter" style="color: #6b2a1a;">
                                                I would like to receive updates and match notifications
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="registration-summary">
                                            <h4 class="h6 mb-3" style="color: #6b2a1a;">Registration Summary</h4>
                                            <div id="summaryContent" class="small" style="color: #aa0e2f;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="form-navigation mt-4">
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn" id="prevBtn" style="display: none; background: #fde8da; color: #6b2a1a; border: 2px solid #aa0e2f; border-radius: 12px; padding: 12px 24px; font-weight: 600; box-shadow: 0 4px 12px rgba(170, 14, 47, 0.15); transition: all 0.3s ease;">
                                        <i class="bi bi-arrow-left me-2"></i>Previous
                                    </button>
                                    <button type="button" class="btn" id="nextBtn" style="background: linear-gradient(135deg, #aa0e2f, #a60e2d); color: white; border: 2px solid #aa0e2f; border-radius: 12px; padding: 12px 24px; font-weight: 600; box-shadow: 0 8px 24px rgba(170, 14, 47, 0.3); transition: all 0.3s ease;">
                                        Next<i class="bi bi-arrow-right ms-2"></i>
                                    </button>
                                    <button type="submit" class="btn" id="submitBtn" style="display: none; background: linear-gradient(135deg, #aa0e2f, #a60e2d); color: white; border: 2px solid #aa0e2f; border-radius: 12px; padding: 12px 24px; font-weight: 600; box-shadow: 0 8px 24px rgba(170, 14, 47, 0.3); transition: all 0.3s ease;">
                                        <i class="bi bi-check-circle me-2"></i>Complete Registration
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="register-footer text-center mt-4">
                            <p class="mb-0" style="color: #6b2a1a; font-weight: 500;">
                                Already have an account? 
                                <a href="login.php" class="text-decoration-none" style="color: #aa0e2f; font-weight: 600; text-shadow: 0 1px 2px rgba(170, 14, 47, 0.1);">Sign In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Registration JS -->
    <script src="assets/js/register.js"></script>
</body>
</html>


