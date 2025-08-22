<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AI Matches - ShongiSondhan</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet" />
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>
<body class="ai-matches-page" style="background: #fbf4ef; font-family: Inter, 'Noto Sans', sans-serif;">
    <!-- Main Content -->
    <div class="ai-matches-container">
        <div class="layout-container">
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
                    <a class="nav-link" href="dashboard.php" style="color: #6b2a1a; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.color='#aa0e2f';" onmouseout="this.style.transform='translateY(0)'; this.style.color='#6b2a1a';">Home</a>
                    <a class="nav-link" href="search.php" style="color: #6b2a1a; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.color='#aa0e2f';" onmouseout="this.style.transform='translateY(0)'; this.style.color='#6b2a1a';">Search</a>
                    <a class="nav-link active" href="ai-matches.php" style="color: #aa0e2f; font-weight: 600; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.color='#a60e2d';" onmouseout="this.style.transform='translateY(0)'; this.style.color='#aa0e2f';">AI Matches</a>
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

            <!-- Main Content Area -->
            <div class="main-content" style="margin-top: 80px; padding: 32px 24px;">
                <div class="container mx-auto" style="max-width: 1200px;">
                                         <!-- Page Header -->
                     <div class="page-header" style="margin-bottom: 32px; text-align: center;">
                         <h1 class="page-title" style="color: #aa0e2f; font-size: 2.5rem; font-weight: 700; margin-bottom: 16px; text-shadow: 0 2px 4px rgba(170, 14, 47, 0.1);">Your AI-Powered Matches</h1>
                         <p class="page-subtitle" style="color: #6b2a1a; font-size: 1.25rem; font-weight: 500; margin-bottom: 0;">Discover your perfect match with our advanced AI algorithm</p>
                     </div>

                    <!-- AI Match Cards Grid -->
                    <div class="match-cards-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 24px; margin-bottom: 32px;">
                                                 <!-- Match Card 1 -->
                         <div class="match-card" style="background: white; border: 2px solid #fde8da; border-radius: 16px; padding: 24px; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1); transition: all 0.3s ease; cursor: pointer; overflow: hidden;" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='#aa0e2f'; this.style.boxShadow='0 16px 48px rgba(170, 14, 47, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#fde8da'; this.style.boxShadow='0 8px 32px rgba(170, 14, 47, 0.1)';">
                             <div class="card-content">
                                 <div class="card-header" style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 20px;">
                                     <div class="card-info" style="flex: 1;">
                                         <h3 class="match-name" style="color: #aa0e2f; font-size: 1.5rem; font-weight: 700; margin-bottom: 12px;">Ayesha Rahman, 28</h3>
                                         <p class="match-profession" style="color: #6b2a1a; font-size: 1.1rem; margin-bottom: 16px;">Software Engineer</p>
                                         <div class="match-tags" style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
                                             <span class="match-percentage" style="background: #fde8da; color: #aa0e2f; font-size: 0.875rem; padding: 6px 12px; border-radius: 20px; font-weight: 600;">95% Match</span>
                                             <span class="ai-recommended" style="background: #fde8da; color: #aa0e2f; font-size: 0.875rem; padding: 6px 12px; border-radius: 20px; font-weight: 600;">AI Recommended</span>
                                         </div>
                                     </div>
                                     <img src="assets/brunette-businesswoman-showing-her-tablet.jpg" alt="Ayesha Rahman" class="match-photo" style="width: 96px; height: 96px; border-radius: 50%; object-fit: cover; border: 3px solid #fde8da; flex-shrink: 0;">
                                 </div>
                                 <button
                                     class="view-profile-btn" style="width: 100%; background: linear-gradient(135deg, #aa0e2f, #a60e2d); color: white; border: 2px solid #aa0e2f; border-radius: 12px; padding: 14px; font-weight: 600; font-size: 16px; transition: all 0.3s ease; box-shadow: 0 8px 24px rgba(170, 14, 47, 0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 32px rgba(170, 14, 47, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(170, 14, 47, 0.3)';"
                                     onclick="viewProfile('ayesha-rahman')"
                                 >
                                     View Profile
                                 </button>
                             </div>
                         </div>

                                                 <!-- Match Card 2 -->
                         <div class="match-card" style="background: white; border: 2px solid #fde8da; border-radius: 16px; padding: 24px; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1); transition: all 0.3s ease; cursor: pointer; overflow: hidden;" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='#aa0e2f'; this.style.boxShadow='0 16px 48px rgba(170, 14, 47, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#fde8da'; this.style.boxShadow='0 8px 32px rgba(170, 14, 47, 0.1)';">
                             <div class="card-content">
                                 <div class="card-header" style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 20px;">
                                     <div class="card-info" style="flex: 1;">
                                         <h3 class="match-name" style="color: #aa0e2f; font-size: 1.5rem; font-weight: 700; margin-bottom: 12px;">Farhan Ahmed, 30</h3>
                                         <p class="match-profession" style="color: #6b2a1a; font-size: 1.1rem; margin-bottom: 16px;">Business Analyst</p>
                                         <div class="match-tags" style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
                                             <span class="match-percentage" style="background: #fde8da; color: #aa0e2f; font-size: 0.875rem; padding: 6px 12px; border-radius: 20px; font-weight: 600;">92% Match</span>
                                             <span class="ai-recommended" style="background: #fde8da; color: #aa0e2f; font-size: 0.875rem; padding: 6px 12px; border-radius: 20px; font-weight: 600;">AI Recommended</span>
                                         </div>
                                     </div>
                                     <img src="assets/successful-business-woman-blue-suit.jpg" alt="Farhan Ahmed" class="match-photo" style="width: 96px; height: 96px; border-radius: 50%; object-fit: cover; border: 3px solid #fde8da; flex-shrink: 0;">
                                 </div>
                                 <button
                                     class="view-profile-btn" style="width: 100%; background: linear-gradient(135deg, #aa0e2f, #a60e2d); color: white; border: 2px solid #aa0e2f; border-radius: 12px; padding: 14px; font-weight: 600; font-size: 16px; transition: all 0.3s ease; box-shadow: 0 8px 24px rgba(170, 14, 47, 0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 32px rgba(170, 14, 47, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(170, 14, 47, 0.3)';"
                                     onclick="viewProfile('farhan-ahmed')"
                                 >
                                     View Profile
                                 </button>
                             </div>
                         </div>

                                                 <!-- Match Card 3 -->
                         <div class="match-card" style="background: white; border: 2px solid #fde8da; border-radius: 16px; padding: 24px; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1); transition: all 0.3s ease; cursor: pointer; overflow: hidden;" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='#aa0e2f'; this.style.boxShadow='0 16px 48px rgba(170, 14, 47, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#fde8da'; this.style.boxShadow='0 8px 32px rgba(170, 14, 47, 0.1)';">
                             <div class="card-content">
                                 <div class="card-header" style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 20px;">
                                     <div class="card-info" style="flex: 1;">
                                         <h3 class="match-name" style="color: #aa0e2f; font-size: 1.5rem; font-weight: 700; margin-bottom: 12px;">Nadia Islam, 27</h3>
                                         <p class="match-profession" style="color: #6b2a1a; font-size: 1.1rem; margin-bottom: 16px;">Graphic Designer</p>
                                         <div class="match-tags" style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
                                             <span class="match-percentage" style="background: #fde8da; color: #aa0e2f; font-size: 0.875rem; padding: 6px 12px; border-radius: 20px; font-weight: 600;">89% Match</span>
                                             <span class="ai-recommended" style="background: #fde8da; color: #aa0e2f; font-size: 0.875rem; padding: 6px 12px; border-radius: 20px; font-weight: 600;">AI Recommended</span>
                                         </div>
                                     </div>
                                     <img src="assets/successful-business-woman-blue-suit.jpg" alt="Nadia Islam" class="match-photo" style="width: 96px; height: 96px; border-radius: 50%; object-fit: cover; border: 3px solid #fde8da; flex-shrink: 0;">
                                 </div>
                                 <button
                                     class="view-profile-btn" style="width: 100%; background: linear-gradient(135deg, #aa0e2f, #a60e2d); color: white; border: 2px solid #aa0e2f; border-radius: 12px; padding: 14px; font-weight: 600; font-size: 16px; transition: all 0.3s ease; box-shadow: 0 8px 24px rgba(170, 14, 47, 0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 32px rgba(170, 14, 47, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(170, 14, 47, 0.3)';"
                                     onclick="viewProfile('nadia-islam')"
                                 >
                                     View Profile
                                 </button>
                             </div>
                         </div>

                                                 <!-- Match Card 4 -->
                         <div class="match-card" style="background: white; border: 2px solid #fde8da; border-radius: 16px; padding: 24px; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1); transition: all 0.3s ease; cursor: pointer; overflow: hidden;" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='#aa0e2f'; this.style.boxShadow='0 16px 48px rgba(170, 14, 47, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#fde8da'; this.style.boxShadow='0 8px 32px rgba(170, 14, 47, 0.1)';">
                             <div class="card-content">
                                 <div class="card-header" style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 20px;">
                                     <div class="card-info" style="flex: 1;">
                                         <h3 class="match-name" style="color: #aa0e2f; font-size: 1.5rem; font-weight: 700; margin-bottom: 12px;">Rafiul Karim, 29</h3>
                                         <p class="match-profession" style="color: #6b2a1a; font-size: 1.1rem; margin-bottom: 16px;">Doctor</p>
                                         <div class="match-tags" style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
                                             <span class="match-percentage" style="background: #fde8da; color: #aa0e2f; font-size: 0.875rem; padding: 6px 12px; border-radius: 20px; font-weight: 600;">87% Match</span>
                                             <span class="ai-recommended" style="background: #fde8da; color: #aa0e2f; font-size: 0.875rem; padding: 6px 12px; border-radius: 20px; font-weight: 600;">AI Recommended</span>
                                         </div>
                                     </div>
                                     <img src="assets/cool-neon-blue-profile-picture-u9y9ydo971k9mdcf.jpg" alt="Rafiul Karim" class="match-photo" style="width: 96px; height: 96px; border-radius: 50%; object-fit: cover; border: 3px solid #fde8da; flex-shrink: 0;">
                                 </div>
                                 <button
                                     class="view-profile-btn" style="width: 100%; background: linear-gradient(135deg, #aa0e2f, #a60e2d); color: white; border: 2px solid #aa0e2f; border-radius: 12px; padding: 14px; font-weight: 600; font-size: 16px; transition: all 0.3s ease; box-shadow: 0 8px 24px rgba(170, 14, 47, 0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 32px rgba(170, 14, 47, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(170, 14, 47, 0.3)';"
                                     onclick="viewProfile('rafiul-karim')"
                                 >
                                     View Profile
                                 </button>
                             </div>
                         </div>
                    </div>

                                         <!-- Load More Button -->
                     <div class="text-center">
                         <button
                             class="load-more-btn" style="background: linear-gradient(135deg, #aa0e2f, #a60e2d); color: white; border: 2px solid #aa0e2f; border-radius: 16px; padding: 16px 32px; font-weight: 600; font-size: 18px; transition: all 0.3s ease; box-shadow: 0 8px 24px rgba(170, 14, 47, 0.3);" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 16px 40px rgba(170, 14, 47, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(170, 14, 47, 0.3)';"
                             onclick="loadMoreMatches()"
                         >
                             Load More Matches
                         </button>
                     </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- AI Matches Page JS -->
    <script src="assets/js/ai-matches.js"></script>
</body>
</html>
