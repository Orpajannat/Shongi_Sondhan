<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - ShongiSondhan</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>
<body class="dashboard-page" style="background: #fbf4ef;">
    <!-- Floating Hearts Background -->
    <div class="floating-hearts">
        <i class="bi bi-heart-fill heart-1" style="color: rgba(170, 14, 47, 0.15);"></i>
        <i class="bi bi-heart-fill heart-2" style="color: rgba(170, 14, 47, 0.12);"></i>
        <i class="bi bi-heart-fill heart-3" style="color: rgba(170, 14, 47, 0.18);"></i>
        <i class="bi bi-heart-fill heart-4" style="color: rgba(170, 14, 47, 0.10);"></i>
        <i class="bi bi-heart-fill heart-5" style="color: rgba(170, 14, 47, 0.14);"></i>
    </div>

    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top dashboard-navbar" style="background: linear-gradient(180deg, rgba(170, 14, 47, 0.1), rgba(166, 14, 45, 0.05), rgba(107, 42, 26, 0.03));">
        <div class="container-fluid px-5">
            <!-- Logo and Brand -->
            <div class="navbar-brand d-flex align-items-center gap-3">
                <div class="logo-container">
                    <svg width="16" height="16" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_6_543)">
                            <path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.24189 26.4066C7.31369 26.4411 7.64204 26.5637 8.52504 26.3738C9.59462 26.1438 11.0343 25.5311 12.7183 24.4963C14.7583 23.2426 17.0256 21.4503 19.238 19.238C21.4503 17.0256 23.2426 14.7583 24.4963 12.7183C25.5311 11.0343 26.1438 9.59463 26.3738 8.52504C26.5637 7.64204 26.4411 7.31369 26.4066 7.24189C26.345 7.21246 26.143 7.14535 25.6664 7.1918C24.9745 7.25925 23.9954 7.5498 22.7699 8.14278C20.3369 9.32007 17.3369 11.4915 14.4142 14.4142C11.4915 17.3369 9.32007 20.3369 8.14278 22.7699C7.5498 23.9954 7.25925 24.9745 7.1918 25.6664C7.14534 26.143 7.21246 26.345 7.24189 26.4066ZM29.9001 10.7285C29.4519 12.0322 28.7617 13.4172 27.9042 14.8126C26.465 17.1544 24.4686 19.6641 22.0664 22.0664C19.6641 24.4686 17.1544 26.465 14.8126 27.9042C13.4172 28.7617 12.0322 29.4519 10.7285 29.9001L21.5754 40.747C21.6001 40.7606 21.8995 40.931 22.8729 40.7217C23.9424 40.4916 25.3821 39.879 27.0661 38.8441C29.1062 37.5904 31.3734 35.7982 33.5858 33.5858C35.7982 31.3734 37.5904 29.1062 38.8441 27.0661C39.879 25.3821 40.4916 23.9425 40.7216 22.8729C40.931 21.8995 40.7606 21.6001 40.747 21.5754L29.9001 10.7285ZM29.2403 4.41187L43.5881 18.7597C44.9757 20.1473 44.9743 22.1235 44.6322 23.7139C44.2714 25.3919 43.4158 27.2666 42.252 29.1604C40.8128 31.5022 38.8165 34.012 36.4142 36.4142C34.012 38.8165 31.5022 40.8128 29.1604 42.252C27.2666 43.4158 25.3919 44.2714 23.7139 44.6322C22.1235 44.9743 20.1473 44.9757 18.7597 43.5881L4.41187 29.2403C3.29027 28.1187 3.08209 26.5973 3.21067 25.2783C3.34099 23.9415 3.8369 22.4852 4.54214 21.0277C5.96129 18.0948 8.43335 14.7382 11.5858 11.5858C14.7382 8.43335 18.0948 5.9613 21.0277 4.54214C22.4852 3.8369 23.9415 3.34099 25.2783 3.21067C26.5973 3.08209 28.1187 3.29028 29.2403 4.41187Z" fill="currentColor"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_6_543"><rect width="48" height="48" fill="white"></rect></clipPath>
                        </defs>
                    </svg>
                </div>
                                 <h2 class="text-dark text-lg fw-bold mb-0">ShongiSondhan</h2>
            </div>

            <!-- Navigation Links and Right Side Elements -->
            <div class="d-flex flex-grow-1 justify-content-end gap-5">
                <!-- Navigation Links -->
                <div class="d-flex align-items-center gap-5">
                    <a class="nav-link active" href="#dashboard" data-section="dashboard" style="color: #aa0e2f; font-weight: 600; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.color='#a60e2d';" onmouseout="this.style.transform='translateY(0)'; this.style.color='#aa0e2f';">Home</a>
                    <a class="nav-link" href="search.php" style="color: #6b2a1a; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.color='#aa0e2f';" onmouseout="this.style.transform='translateY(0)'; this.style.color='#6b2a1a';">Search</a>
                    <a class="nav-link" href="ai-matches.php" style="color: #6b2a1a; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.color='#aa0e2f';" onmouseout="this.style.transform='translateY(0)'; this.style.color='#6b2a1a';">AI Matches</a>
                    <a class="nav-link" href="messages.php" style="color: #6b2a1a; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.color='#aa0e2f';" onmouseout="this.style.transform='translateY(0)'; this.style.color='#6b2a1a';">Messages</a>
                    <a class="nav-link" href="profile-detail.php" style="color: #6b2a1a; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.color='#aa0e2f';" onmouseout="this.style.transform='translateY(0)'; this.style.color='#6b2a1a';">Profile</a>
                    <a class="nav-link" href="my-profile.php" style="color: #6b2a1a; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.color='#aa0e2f';" onmouseout="this.style.transform='translateY(0)'; this.style.color='#6b2a1a';">My Profile</a>
                </div>
                
                <!-- Notification Bell Button -->
                <button class="btn notification-btn d-flex align-items-center justify-content-center rounded-3 h-10 px-2-5" style="background: #fde8da; border: 2px solid #fde8da; color: #aa0e2f; transition: all 0.3s ease;" onmouseover="this.style.background='#aa0e2f'; this.style.color='white'; this.style.transform='scale(1.1)';" onmouseout="this.style.background='#fde8da'; this.style.color='#aa0e2f'; this.style.transform='scale(1)';">
                    <i class="bi bi-bell"></i>
                </button>
                
                <!-- Profile Avatar -->
                <div class="profile-avatar-container" style="transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';">
                    <img src="assets/cool-neon-blue-profile-picture-u9y9ydo971k9mdcf.jpg" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover; border: 2px solid #fde8da;">
                    <div class="online-indicator" style="background: #28a745; border: 2px solid white;"></div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="dashboard-container">
        <!-- Main Content Area -->
        <main class="dashboard-main">
            <!-- Dashboard Section -->
            <section id="dashboard" class="content-section active">
                <div class="section-header" style="background: white; border: 2px solid #fde8da; border-radius: 16px; padding: 24px; margin-bottom: 24px; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1);">
                    <div class="header-content">
                        <h2 class="section-title" style="color: #aa0e2f; font-weight: 700; margin-bottom: 8px;">Welcome Back! 👋</h2>
                        <p class="section-subtitle" style="color: #6b2a1a; font-size: 18px; margin-bottom: 0;">Your journey to finding true love continues...</p>
                    </div>
                    <div class="header-actions">
                        <button class="btn btn-outline-primary btn-sm" style="border-color: #aa0e2f; color: #aa0e2f; font-weight: 600; transition: all 0.3s ease;" onmouseover="this.style.background='#aa0e2f'; this.style.color='white';" onmouseout="this.style.background='transparent'; this.style.color='#aa0e2f';">
                            <i class="bi bi-plus-circle me-1"></i>New Match
                        </button>
                    </div>
                </div>

                <!-- Enhanced Stats Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-3">
                        <div class="stat-card enhanced" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1); transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 48px rgba(170, 14, 47, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(170, 14, 47, 0.1)';">
                            <div class="stat-icon pulse" style="background: #fde8da; color: #aa0e2f;">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                            <div class="stat-content">
                                <h3 class="stat-number counter" data-target="24" style="color: #aa0e2f;">0</h3>
                                <p class="stat-label" style="color: #6b2a1a;">New Matches</p>
                                <div class="stat-trend positive" style="color: #28a745;">
                                    <i class="bi bi-arrow-up"></i> +12%
                                </div>
                            </div>
                            <div class="stat-decoration" style="background: #fde8da;"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card enhanced" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1); transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 48px rgba(170, 14, 47, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(170, 14, 47, 0.1)';">
                            <div class="stat-icon bounce" style="background: #fde8da; color: #aa0e2f;">
                                <i class="bi bi-eye-fill"></i>
                            </div>
                            <div class="stat-content">
                                <h3 class="stat-number counter" data-target="156" style="color: #aa0e2f;">0</h3>
                                <p class="stat-label" style="color: #6b2a1a;">Profile Views</p>
                                <div class="stat-trend positive" style="color: #28a745;">
                                    <i class="bi bi-arrow-up"></i> +8%
                                </div>
                            </div>
                            <div class="stat-decoration" style="background: #fde8da;"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card enhanced" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1); transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 48px rgba(170, 14, 47, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(170, 14, 47, 0.1)';">
                            <div class="stat-icon shake" style="background: #fde8da; color: #aa0e2f;">
                                <i class="bi bi-chat-fill"></i>
                            </div>
                            <div class="stat-content">
                                <h3 class="stat-number counter" data-target="8" style="color: #aa0e2f;">0</h3>
                                <p class="stat-label" style="color: #6b2a1a;">New Messages</p>
                                <div class="stat-trend positive" style="color: #28a745;">
                                    <i class="bi bi-arrow-up"></i> +25%
                                </div>
                            </div>
                            <div class="stat-decoration" style="background: #fde8da;"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card enhanced" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1); transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 48px rgba(170, 14, 47, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(170, 14, 47, 0.1)';">
                            <div class="stat-icon rotate" style="background: #fde8da; color: #aa0e2f;">
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div class="stat-content">
                                <h3 class="stat-number counter" data-target="4.8" style="color: #aa0e2f;">0</h3>
                                <p class="stat-label" style="color: #6b2a1a;">Profile Rating</p>
                                <div class="stat-trend positive" style="color: #28a745;">
                                    <i class="bi bi-arrow-up"></i> +0.2
                                </div>
                            </div>
                            <div class="stat-decoration" style="background: #fde8da;"></div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Content Grid -->
                <div class="row g-4">
                    <div class="col-md-8">
                        <div class="content-card enhanced" style="background: white; border: 2px solid #fde8da; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1); transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 40px rgba(170, 14, 47, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(170, 14, 47, 0.1)';">
                            <div class="card-header" style="background: #fde8da; border-bottom: 2px solid #fde8da;">
                                <h5 class="card-title" style="color: #6b2a1a;">
                                    <i class="bi bi-activity me-2" style="color: #aa0e2f;"></i>
                                    Recent Activity
                                </h5>
                                <div class="card-actions">
                                    <button class="btn btn-sm btn-outline-secondary" style="border-color: #aa0e2f; color: #aa0e2f;">View All</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="activity-timeline">
                                    <div class="activity-item enhanced" style="border: 1px solid #fde8da; border-radius: 12px; padding: 16px; margin-bottom: 16px; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateX(8px)'; this.style.borderColor='#aa0e2f'; this.style.boxShadow='0 4px 16px rgba(170, 14, 47, 0.1)';" onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='#fde8da'; this.style.boxShadow='none';">
                                        <div class="activity-icon pulse" style="background: #fde8da; color: #aa0e2f;">
                                            <i class="bi bi-heart-fill"></i>
                                        </div>
                                        <div class="activity-content">
                                            <h6 style="color: #6b2a1a;">New Match Found! 💕</h6>
                                            <p style="color: #6b2a1a;">Sarah Ahmed viewed your profile and sent you a like</p>
                                            <div class="activity-meta">
                                                <span class="time" style="color: #aa0e2f;">2 hours ago</span>
                                                <span class="priority high" style="background: #aa0e2f; color: white;">High Priority</span>
                                            </div>
                                        </div>
                                        <div class="activity-actions">
                                            <a href="profile-detail.php" class="btn btn-sm btn-outline-primary" style="border-color: #aa0e2f; color: #aa0e2f;">View Profile</a>
                                        </div>
                                    </div>
                                    <div class="activity-item enhanced" style="border: 1px solid #fde8da; border-radius: 12px; padding: 16px; margin-bottom: 16px; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateX(8px)'; this.style.borderColor='#aa0e2f'; this.style.boxShadow='0 4px 16px rgba(170, 14, 47, 0.1)';" onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='#fde8da'; this.style.boxShadow='none';">
                                        <div class="activity-icon bounce" style="background: #fde8da; color: #aa0e2f;">
                                            <i class="bi bi-chat-fill"></i>
                                        </div>
                                        <div class="activity-content">
                                            <h6 style="color: #6b2a1a;">Message Received 💬</h6>
                                            <p style="color: #6b2a1a;">New message from Fatima Khan: "Hello! I loved your profile..."</p>
                                            <div class="activity-meta">
                                                <span class="time" style="color: #aa0e2f;">4 hours ago</span>
                                                <span class="priority medium" style="background: #fde8da; color: #6b2a1a;">Medium Priority</span>
                                            </div>
                                        </div>
                                        <div class="activity-actions">
                                            <button class="btn btn-sm btn-outline-success" style="border-color: #28a745; color: #28a745;">Reply</button>
                                        </div>
                                    </div>
                                    <div class="activity-item enhanced">
                                        <div class="activity-icon shake">
                                            <i class="bi bi-eye-fill"></i>
                                        </div>
                                        <div class="activity-content">
                                            <h6>Profile Viewed 👀</h6>
                                            <p>Your profile was viewed by 3 people in the last 24 hours</p>
                                            <div class="activity-meta">
                                                <span class="time">1 day ago</span>
                                                <span class="priority low">Low Priority</span>
                                            </div>
                                        </div>
                                        <div class="activity-actions">
                                            <button class="btn btn-sm btn-outline-info">View Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content-card enhanced">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="bi bi-lightning me-2"></i>
                                    Quick Actions
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="quick-actions enhanced">
                                    <a href="#" class="quick-action-btn enhanced" data-action="search">
                                        <div class="action-icon">
                                            <i class="bi bi-search"></i>
                                        </div>
                                        <span>Find Matches</span>
                                        <div class="action-arrow">→</div>
                                    </a>
                                    <a href="#" class="quick-action-btn enhanced" data-action="photos">
                                        <div class="action-icon">
                                            <i class="bi bi-camera"></i>
                                        </div>
                                        <span>Add Photos</span>
                                        <div class="action-arrow">→</div>
                                    </a>
                                    <a href="#" class="quick-action-btn enhanced" data-action="edit">
                                        <div class="action-icon">
                                            <i class="bi bi-pencil"></i>
                                        </div>
                                        <span>Edit Profile</span>
                                        <div class="action-arrow">→</div>
                                    </a>
                                    <a href="#" class="quick-action-btn enhanced" data-action="interest">
                                        <div class="action-icon">
                                            <i class="bi bi-heart"></i>
                                        </div>
                                        <span>Send Interest</span>
                                        <div class="action-arrow">→</div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Daily Inspiration Card -->
                        <div class="content-card enhanced inspiration-card">
                            <div class="card-body text-center">
                                <div class="inspiration-icon">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <blockquote class="inspiration-quote">
                                    "Love is not about finding the perfect person, but about seeing an imperfect person perfectly."
                                </blockquote>
                                <cite class="inspiration-author">- Sam Keen</cite>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Enhanced Matches Section -->
            <section id="matches" class="content-section">
                <div class="section-header">
                    <div class="header-content">
                        <h2 class="section-title">Your Perfect Matches 💝</h2>
                        <p class="section-subtitle">Discover profiles that match your preferences</p>
                    </div>
                    <div class="header-actions">
                        <div class="filter-buttons">
                            <button class="btn btn-outline-primary btn-sm active">All</button>
                            <button class="btn btn-outline-secondary btn-sm">New</button>
                            <button class="btn btn-outline-secondary btn-sm">Premium</button>
                        </div>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="match-card enhanced">
                            <div class="match-photo">
                                <img src="https://via.placeholder.com/300x400/ff6fa5/ffffff?text=Match+1" alt="Match" class="img-fluid">
                                <div class="match-overlay">
                                                                            <div class="match-actions">
                                            <button class="btn btn-light btn-sm me-2 like-btn">
                                                <i class="bi bi-heart"></i> Like
                                            </button>
                                            <a href="profile-detail.php" class="btn btn-outline-light btn-sm">
                                                <i class="bi bi-person"></i> View Profile
                                            </a>
                                        </div>
                                </div>
                                <div class="match-badges">
                                    <span class="badge badge-premium">Premium</span>
                                    <span class="badge badge-verified">Verified</span>
                                </div>
                            </div>
                            <div class="match-info">
                                <div class="match-header">
                                    <h5>Sarah Ahmed, 25</h5>
                                    <div class="match-status online">Online</div>
                                </div>
                                <p class="text-muted">Dhaka • Software Engineer</p>
                                <div class="match-details">
                                    <span class="detail-item"><i class="bi bi-graduation-cap"></i> BSc Computer Science</span>
                                    <span class="detail-item"><i class="bi bi-geo-alt"></i> Dhaka, Bangladesh</span>
                                </div>
                                <div class="compatibility-score">
                                    <div class="score-circle">
                                        <span class="score">95%</span>
                                    </div>
                                    <span class="score-label">Match</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more enhanced match cards here -->
                </div>
            </section>

            <!-- Enhanced Profile Section -->
            <section id="profile" class="content-section">
                <div class="section-header">
                    <h2 class="section-title">My Profile ✨</h2>
                    <p class="section-subtitle">Manage and showcase your best self</p>
                </div>
                
                <div class="content-card enhanced">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="profile-photo-container">
                                    <div class="profile-photo-large mb-3">
                                        <img src="https://via.placeholder.com/200x200/ff6fa5/ffffff?text=Profile" alt="Profile" class="rounded-circle img-fluid">
                                        <div class="photo-overlay">
                                            <i class="bi bi-camera"></i>
                                        </div>
                                    </div>
                                    <div class="profile-actions">
                                        <button class="btn btn-outline-primary me-2">Change Photo</button>
                                        <button class="btn btn-outline-secondary">View Gallery</button>
                                    </div>
                                    <div class="profile-stats mt-3">
                                        <div class="stat-item">
                                            <span class="stat-number">156</span>
                                            <span class="stat-label">Profile Views</span>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-number">24</span>
                                            <span class="stat-label">Likes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="profile-sections">
                                    <div class="profile-section">
                                        <h5><i class="bi bi-person-badge me-2"></i>Basic Information</h5>
                                        <div class="profile-grid">
                                            <div class="profile-field">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" value="User Name" readonly>
                                            </div>
                                            <div class="profile-field">
                                                <label>Age</label>
                                                <input type="text" class="form-control" value="25 years" readonly>
                                            </div>
                                            <div class="profile-field">
                                                <label>Location</label>
                                                <input type="text" class="form-control" value="Dhaka, Bangladesh" readonly>
                                            </div>
                                            <div class="profile-field">
                                                <label>Religion</label>
                                                <input type="text" class="form-control" value="Islam" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Enhanced Messages Section -->
            <section id="messages" class="content-section">
                <div class="section-header">
                    <h2 class="section-title">Messages 💌</h2>
                    <p class="section-subtitle">Connect with your matches through meaningful conversations</p>
                </div>
                
                <div class="content-card enhanced">
                    <div class="card-body">
                        <div class="messages-container">
                            <div class="message-preview">
                                <div class="message-avatar">
                                    <img src="https://via.placeholder.com/50x50/ff6fa5/ffffff?text=S" alt="Sarah" class="rounded-circle">
                                    <div class="online-indicator"></div>
                                </div>
                                <div class="message-content">
                                    <h6>Sarah Ahmed</h6>
                                    <p>Hello! I loved your profile. Would you like to chat?</p>
                                    <small class="text-muted">2 hours ago</small>
                                </div>
                                <div class="message-actions">
                                    <button class="btn btn-sm btn-primary">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Dashboard JS -->
    <script src="assets/js/dashboard.js"></script>
</body>
</html>
