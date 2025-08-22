<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - ShongiSondhan</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>
<body class="login-page" style="background: #fbf4ef;">
    <!-- Background Elements -->
    <div class="login-bg">
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
                <a href="register.php" class="btn rounded-pill px-4 me-2" style="background: #aa0e2f; color: white; border: 2px solid #aa0e2f;">Register</a>
                <a href="index.php" class="btn rounded-pill px-4" style="background: transparent; color: #6b2a1a; border: 2px solid #6b2a1a;">Back to Home</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <!-- Login Card -->
                    <div class="login-card" style="background: white; border: 2px solid #fde8da; box-shadow: 0 20px 60px rgba(170, 14, 47, 0.1);">
                        <div class="login-header text-center mb-4">
                            <div class="login-heart-badge mb-3" style="background: #aa0e2f; color: white;">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                            <h1 class="h3 fw-bold mb-2" style="color: #6b2a1a;">Welcome Back</h1>
                            <p class="mb-0" style="color: #6b2a1a;">Continue your journey to find love</p>
                        </div>

                        <form id="loginForm" action="auth.php" method="post" novalidate>
                            <div class="mb-3">
                                <label for="email" class="form-label" style="color: #6b2a1a; font-weight: 600;">Email Address</label>
                                <div class="input-with-icon" style="position: relative;">
                                    <i class="bi bi-envelope" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #aa0e2f; z-index: 2; font-size: 18px;"></i>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px 12px 12px 45px; font-size: 16px;" />
                                </div>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label" style="color: #6b2a1a; font-weight: 600;">Password</label>
                                <div class="input-with-icon" style="position: relative;">
                                    <i class="bi bi-lock" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #aa0e2f; z-index: 2; font-size: 18px;"></i>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required style="border: 2px solid #fde8da; border-radius: 12px; color: #6b2a1a; background-color: white; padding: 12px 12px 12px 45px; font-size: 16px;" />
                                </div>
                                <div class="invalid-feedback">Please enter your password.</div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" name="remember_me" style="accent-color: #aa0e2f;">
                                    <label class="form-check-label" for="rememberMe" style="color: #6b2a1a;">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="text-decoration-none small" style="color: #aa0e2f;">Forgot Password?</a>
                            </div>

                            <button type="submit" class="btn w-100 mb-4" style="background: #aa0e2f; color: white; border: none; border-radius: 12px; padding: 12px; font-weight: 600; box-shadow: 0 8px 24px rgba(170, 14, 47, 0.3);">
                                <i class="bi bi-arrow-right me-2"></i>Sign In
                            </button>

                            <div class="text-center">
                                <p class="mb-3" style="color: #6b2a1a;">Don't have an account?</p>
                                <a href="register.php" class="btn w-100" style="background: #fde8da; color: #6b2a1a; border: 2px solid #fde8da; border-radius: 12px; padding: 12px; font-weight: 600;">
                                    <i class="bi bi-person-plus me-2"></i>Create New Account
                                </a>
                            </div>
                        </form>

                        <div class="login-footer text-center mt-4">
                            <p class="small mb-0" style="color: #6b2a1a;">
                                By continuing, you agree to our 
                                <a href="#" class="text-decoration-none" style="color: #aa0e2f;">Terms of Service</a> and 
                                <a href="#" class="text-decoration-none" style="color: #aa0e2f;">Privacy Policy</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Login JS -->
    <script src="assets/js/login.js"></script>
</body>
</html>
