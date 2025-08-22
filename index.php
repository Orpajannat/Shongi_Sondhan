<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ShongiSondhan – Smart Matchmaking</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

    <!-- Tailwind via CDN (scoped with tw- prefix to avoid conflicts) -->
    <script>
      window.tailwind = {
        config: {
          prefix: 'tw-',
          theme: {
            extend: {
              colors: {
                brandPink: '#ff3d81',
                brandPinkDark: '#e22368',
                brandWhite: '#ffffff'
              }
            }
          }
        }
      }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>
<body class="bg-dark text-light">
    <!-- Header Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background: linear-gradient(180deg, rgba(0,0,0,0.6), rgba(0,0,0,0));">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span class="me-2 d-inline-block" aria-hidden="true">
                    <!-- Simple vector logo -->
                    <svg width="36" height="36" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="g" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#ff6fa5" />
                                <stop offset="100%" stop-color="#ff3d81" />
                            </linearGradient>
                        </defs>
                        <path d="M32 54c-1.4 0-2.8-.5-3.9-1.5C17 43.6 8 35.4 8 24.9 8 17 14.1 11 22 11c4.2 0 8.1 2 10 5.1C34.9 13 38.8 11 43 11c7.9 0 14 6 14 13.9 0 10.5-9 18.7-20.1 27.6-1.1 1-2.5 1.5-3.9 1.5z" fill="url(#g)"/>
                    </svg>
                </span>
                <span class="fw-bold fs-5 text-white">ShongiSondhan</span>
            </a>
            <div class="ms-auto d-flex align-items-center">
                <span class="text-white-50 me-2 d-none d-md-inline">Already have an account?</span>
                <a href="login.php" class="btn btn-outline-light rounded-pill px-4">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <!-- Global full-page background slider -->
    <div class="hero-bg w-100 h-100">
        <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1522673607200-164d1b6ce486?q=80&w=1600&auto=format&fit=crop');"></div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=1600&auto=format&fit=crop');"></div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1520848315518-b991dd16a6cf?q=80&w=1600&auto=format&fit=crop');"></div>
    </div>

    <main class="min-vh-100 d-flex">
        <div class="container-fluid flex-fill p-0">
            <div class="row g-0 min-vh-100">
                <!-- Left caption overlay -->
                <div class="col-12 col-lg-7 position-relative order-2 order-lg-1">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 p-lg-5 text-white">
                        <h1 class="display-5 fw-bold text-shadow">Find your most compatible life partner</h1>
                        <p class="lead mb-0 text-shadow">Smart, secure, and personalized matchmaking for Bangladesh.</p>
                    </div>
                </div>

                <!-- Registration card on right -->
                <div class="col-12 col-lg-5 d-flex align-items-center justify-content-lg-end justify-content-center order-1 order-lg-2">
                    <div class="card shadow-lg border-0 rounded-4 my-5 ms-3 me-3 me-lg-5 form-card">
                        <span class="blob pink"></span>
                        <span class="blob purple"></span>
                        <div class="card-body p-4 p-md-5 position-relative">
                            <div class="d-flex justify-content-center mb-3">
                                <span class="badge bg-light text-dark badge-pill">Step 1 of 3 • Quick Start</span>
                            </div>
                            <h2 class="h4 fw-bold mb-4 text-center">Create your Matrimony Profile</h2>

                            <form id="quickRegisterForm" action="register.php" method="post" novalidate>
                                <div class="mb-3 input-with-icon">
                                    <label for="profileFor" class="form-label">Matrimony Profile For</label>
                                    <i class=""></i>
                                    <select id="profileFor" name="profile_for" class="form-select" required>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="bride">Bride</option>
                                        <option value="groom">Groom</option>
                                        <option value="relative">Relative/Guardian</option>
                                    </select>
                                    <div class="invalid-feedback">Please select one option.</div>
                                </div>

                                <div class="mb-3 input-with-icon">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <i class=" "></i>
                                    <input type="text" class="form-control" id="fullName" name="full_name" placeholder="Enter your name" required minlength="2" maxlength="80" />
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>

                                <div class="mb-4 input-with-icon">
                                    <label for="mobileNumber" class="form-label">Mobile Number</label>
                                    <i class=""></i>
                                    <input type="tel" class="form-control" id="mobileNumber" name="mobile" placeholder="01XXXXXXXXX" pattern="^(\+?88)?01[3-9]\d{8}$" required />
                                    <div class="form-text">Format: 01XXXXXXXXX (Bangladesh)</div>
                                    <div class="invalid-feedback">Please enter a valid BD mobile number.</div>
                                </div>

                                <!-- Swipe Register Button -->
                                <div class="swipe-register" id="swipeRegister">
                                    <div class="swipe-track">
                                        <div class="swipe-fill"></div>
                                        <span class="swipe-text">Swipe to Register</span>
                                        <div class="swipe-handle" role="button" aria-label="Swipe to register"></div>
                                    </div>
                                </div>

                                <!-- Fallback submit for non-pointer devices -->
                                <button type="submit" class="btn btn-primary w-100 mt-3 d-none" id="fallbackSubmit">Register</button>
                            </form>

                            <p class="text-center small text-muted mt-4 mb-0"><i class="bi bi-shield-lock me-1"></i>By continuing, you agree to our Terms & Privacy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Features (Elite style) -->
    <section class="py-5 features-elite text-dark">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <!-- Left illustrative image with unique layered design -->
                <div class="col-12 col-lg-6">
                    <div class="elite-figure mx-auto mx-lg-0">
                        <div class="elite-image-container">
                            <img src="https://imgs.bharatmatrimony.com/bmimgs/homepage-revamp-images/bm-1030/elite-banner-img.png" alt="Happy couple" class="elite-photo" />
                            <div class="elite-frame-outer"></div>
                            <div class="elite-frame-inner"></div>
                            <div class="elite-floating-elements">
                                <div class="floating-dot dot-1"></div>
                                <div class="floating-dot dot-2"></div>
                                <div class="floating-dot dot-3"></div>
                                <div class="floating-heart">❤️</div>
                            </div>
                        </div>
                       
                    </div>
                </div>

                <!-- Right content -->
                <div class="col-12 col-lg-6">
                    <div class="d-flex align-items-center mb-2">
                        <span class="elite-badge me-2"><i class="bi bi-flower1"></i></span>
                        <h2 class="fw-bold mb-0">Elite Matrimony</h2>
                    </div>
                    <p class="lead text-danger fw-bold mb-3">The largest and most successful matrimony service for elites</p>

                    <div class="d-flex align-items-start mb-3 elite-item">
                        <div class="icon-wrap me-3"><i class="bi bi-people"></i></div>
                        <div>
                            <div class="fw-bold">Largest pool of truly elite profiles</div>
                            <div class="text-muted small">Increased chances of finding the right match through our exclusive database.</div>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3 elite-item">
                        <div class="icon-wrap me-3"><i class="bi bi-person-gear"></i></div>
                        <div>
                            <div class="fw-bold">Experienced Relationship Managers</div>
                            <div class="text-muted small">A dedicated manager shares handpicked matches as per your preferences.</div>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4 elite-item">
                        <div class="icon-wrap me-3"><i class="bi bi-shield-lock"></i></div>
                        <div>
                            <div class="fw-bold">100% confidential service</div>
                            <div class="text-muted small">Strict privacy & confidentiality ensured throughout the service.</div>
                        </div>
                    </div>

                    <a href="#quickRegisterForm" class="btn btn-cta rounded-pill px-4 py-2">
                        Know More <span class="ms-1">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="py-5 how-it-works text-dark" style="background: #fbf4ef;">
        <div class="container">
            <div class="text-center mb-5">
                <div class="how-badge mb-3" style="background: #aa0e2f; color: white;">
                    <i class="bi bi-arrow-repeat"></i>
                </div>
                <h2 class="fw-bold display-6" style="color: #6b2a1a;">How It Works</h2>
                <p class="text-muted mb-0 fs-5" style="color: #6b2a1a;">Simple steps to find your best match</p>
            </div>
            
            <div class="row g-4 g-lg-5 justify-content-center">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="how-step-card" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                        <div class="step-number" style="background: #aa0e2f; color: white;">1</div>
                        <div class="step-icon" style="background: #fde8da; color: #6b2a1a;">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-3" style="color: #6b2a1a;">Create a Profile</h3>
                        <p class="mb-0 text-muted" style="color: #6b2a1a;">Share your background, values, and preferences to get started.</p>
                        <div class="step-arrow d-none d-lg-block">
                            <i class="bi bi-arrow-right" style="color: #aa0e2f;"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="how-step-card" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                        <div class="step-number" style="background: #aa0e2f; color: white;">2</div>
                        <div class="step-icon" style="background: #fde8da; color: #6b2a1a;">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-3" style="color: #6b2a1a;">Get Verified</h3>
                        <p class="mb-0 text-muted" style="color: #6b2a1a;">Boost trust with ID and phone verification for safety.</p>
                        <div class="step-arrow d-none d-lg-block">
                            <i class="bi bi-arrow-right" style="color: #aa0e2f;"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="how-step-card" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                        <div class="step-number" style="background: #aa0e2f; color: white;">3</div>
                        <div class="step-icon" style="background: #fde8da; color: #6b2a1a;">
                            <i class="bi bi-robot"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-3" style="color: #6b2a1a;">AI Matches</h3>
                        <p class="mb-0 text-muted" style="color: #6b2a1a;">Get smart compatibility recommendations with explanations.</p>
                        <div class="step-arrow d-none d-lg-block">
                            <i class="bi bi-arrow-right" style="color: #aa0e2f;"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="how-step-card" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                        <div class="step-number" style="background: #aa0e2f; color: white;">4</div>
                        <div class="step-icon" style="background: #fde8da; color: #6b2a1a;">
                            <i class="bi bi-chat-heart"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-3" style="color: #6b2a1a;">Connect & Chat</h3>
                        <p class="mb-0 text-muted" style="color: #6b2a1a;">Start meaningful conversations in a secure environment.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <div class="how-cta">
                    <span class="text-muted me-3" style="color: #6b2a1a;">Ready to begin?</span>
                    <a href="#quickRegisterForm" class="btn rounded-pill px-4" style="background: #a60e2d; color: white; border: none; box-shadow: 0 8px 24px rgba(166, 14, 45, 0.3);">Start Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust & Safety -->
    <section class="py-5 trust-safety text-dark" style="background: #fbf4ef;">
        <div class="container">
            <div class="text-center mb-5">
                <div class="trust-heart-badge mb-3" style="background: #aa0e2f; color: white;">
                    <i class="bi bi-heart-fill"></i>
                </div>
                <h2 class="fw-bold display-6" style="color: #6b2a1a;">Trust & Safety</h2>
                <p class="text-muted mb-0 fs-5" style="color: #6b2a1a;">Your security and privacy are our top priorities</p>
            </div>
            
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="trust-features">
                        <div class="trust-item" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                            <div class="trust-icon-wrapper">
                                <div class="trust-icon" style="background: #fde8da; color: #6b2a1a;">
                                    <i class="bi bi-person-check"></i>
                                </div>
                                <div class="icon-ripple" style="background: #aa0e2f;"></div>
                            </div>
                            <div class="trust-content">
                                <h4 class="fw-bold mb-2" style="color: #6b2a1a;">Profile & Phone Verification</h4>
                                <p class="mb-0 text-muted" style="color: #6b2a1a;">Multi-layer verification ensures authentic profiles and genuine connections.</p>
                            </div>
                        </div>
                        
                        <div class="trust-item" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                            <div class="trust-icon-wrapper">
                                <div class="trust-icon" style="background: #fde8da; color: #6b2a1a;">
                                    <i class="bi bi-shield-exclamation"></i>
                                </div>
                                <div class="icon-ripple" style="background: #aa0e2f;"></div>
                            </div>
                            <div class="trust-content">
                                <h4 class="fw-bold mb-2" style="color: #6b2a1a;">Report & Block Tools</h4>
                                <p class="mb-0 text-muted" style="color: #6b2a1a;">Advanced safety features to maintain a respectful community environment.</p>
                            </div>
                        </div>
                        
                        <div class="trust-item" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                            <div class="trust-icon-wrapper">
                                <div class="trust-icon" style="background: #fde8da; color: #6b2a1a;">
                                    <i class="bi bi-chat-dots"></i>
                                </div>
                                <div class="icon-ripple" style="background: #aa0e2f;"></div>
                            </div>
                            <div class="trust-content">
                                <h4 class="fw-bold mb-2" style="color: #6b2a1a;">Privacy-First Messaging</h4>
                                <p class="mb-0 text-muted" style="color: #6b2a1a;">Secure communication channels that protect your personal information.</p>
                            </div>
                        </div>
                        
                        <div class="trust-item" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                            <div class="trust-icon-wrapper">
                                <div class="trust-icon" style="background: #fde8da; color: #6b2a1a;">
                                    <i class="bi bi-lock-fill"></i>
                                </div>
                                <div class="icon-ripple" style="background: #aa0e2f;"></div>
                            </div>
                            <div class="trust-content">
                                <h4 class="fw-bold mb-2" style="color: #6b2a1a;">End-to-End Encryption</h4>
                                <p class="mb-0 text-muted" style="color: #6b2a1a;">Military-grade encryption protects your data at rest and in transit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-lg-6">
                    <div class="trust-highlights">
                        <div class="highlight-card" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                            <div class="highlight-icon" style="background: #fde8da; color: #6b2a1a;">
                                <i class="bi bi-robot"></i>
                            </div>
                            <div class="highlight-content">
                                <h4 class="fw-bold mb-2" style="color: #6b2a1a;">Explainable AI</h4>
                                <p class="mb-0 text-muted" style="color: #6b2a1a;">Transparent matchmaking with clear explanations for every recommendation.</p>
                                <div class="highlight-stats">
                                    <span class="stat-item" style="color: #aa0e2f;">
                                        <strong>99.8%</strong> Accuracy
                                    </span>
                                    <span class="stat-item" style="color: #aa0e2f;">
                                        <strong>24/7</strong> Monitoring
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="highlight-card" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                            <div class="highlight-icon" style="background: #fde8da; color: #6b2a1a;">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <div class="highlight-content">
                                <h4 class="fw-bold mb-2" style="color: #6b2a1a;">Secure by Design</h4>
                                <p class="mb-0 text-muted" style="color: #6b2a1a;">Built with industry-leading security standards and regular audits.</p>
                                <div class="security-badges">
                                    <span class="badge me-2" style="background: #aa0e2f; color: white;">ISO 27001</span>
                                    <span class="badge" style="background: #a60e2d; color: white;">GDPR Compliant</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="highlight-card" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                            <div class="highlight-icon" style="background: #fde8da; color: #6b2a1a;">
                                <i class="bi bi-globe"></i>
                            </div>
                            <div class="highlight-content">
                                <h4 class="fw-bold mb-2" style="color: #6b2a1a;">Global Standards</h4>
                                <p class="mb-0 text-muted" style="color: #6b2a1a;">Respectful experience across cultures, regions, and backgrounds.</p>
                                <div class="global-indicator">
                                    <span class="indicator-dot active" style="background: #aa0e2f;"></span>
                                    <span class="indicator-dot active" style="background: #aa0e2f;"></span>
                                    <span class="indicator-dot active" style="background: #aa0e2f;"></span>
                                    <span class="indicator-dot" style="background: #fde8da;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 text-dark" style="background: #fbf4ef;">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold" style="color: #6b2a1a;">Success Stories</h2>
                <p class="text-muted mb-0" style="color: #6b2a1a;">Real couples who found meaningful connections</p>
            </div>
            <div id="testimonials" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8">
                                <div class="p-4 border rounded-4">
                                    <p class="mb-2">“The AI recommendations felt truly personal. We connected over shared values.”</p>
                                    <div class="small text-muted">— Ayesha & Rafi, Dhaka</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8">
                                <div class="p-4 border rounded-4">
                                    <p class="mb-2">“Verification and privacy features made our families comfortable.”</p>
                                    <div class="small text-muted">— Nusrat & Imran, Chattogram</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8">
                                <div class="p-4 border rounded-4">
                                    <p class="mb-2">“Easy filters saved us so much time finding compatible matches.”</p>
                                    <div class="small text-muted">— Sadia & Arman, Sylhet</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Band -->
    <section class="py-5 text-center text-white" style="background: linear-gradient(90deg, #aa0e2f, #a60e2d);">
        <div class="container">
            <h2 class="fw-bold mb-3">Ready to find your most compatible partner?</h2>
            <p class="mb-4">Create your profile now and start your journey with confidence.</p>
            <a href="#quickRegisterForm" class="btn rounded-pill px-4" style="background: #fde8da; color: #6b2a1a; border: none; box-shadow: 0 8px 24px rgba(253, 232, 218, 0.3);">Get Started</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 text-light" style="background: #6b2a1a;">
        <div class="container text-center">
            <div class="mb-3">
                <div class="small">© <span id="year"></span> ShongiSondhan. All rights reserved.</div>
            </div>
            <div class="small">
                <a href="#" class="text-decoration-none me-3" style="color: #fde8da;">Privacy</a>
                <a href="#" class="text-decoration-none me-3" style="color: #fde8da;">Terms</a>
                <a href="#" class="text-decoration-none" style="color: #fde8da;">Support</a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script>
      document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>
</html>


