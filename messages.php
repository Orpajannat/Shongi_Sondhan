<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Messages - ShongiSondhan</title>

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
<body class="messages-page" style="background: #fbf4ef; font-family: Inter, 'Noto Sans', sans-serif;">
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
                    <a class="nav-link" href="ai-matches.php" style="color: #6b2a1a; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.color='#aa0e2f';" onmouseout="this.style.transform='translateY(0)'; this.style.color='#6b2a1a';">AI Matches</a>
                    <a class="nav-link active" href="messages.php" style="color: #aa0e2f; font-weight: 600; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.color='#a60e2d';" onmouseout="this.style.transform='translateY(0)'; this.style.color='#aa0e2f';">Messages</a>
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

    <!-- Main Content -->
    <div class="messages-container" style="margin-top: 80px; padding: 24px; min-height: calc(100vh - 80px);">
        <div class="layout-container">
            <!-- Main Content Area -->
            <div class="main-content" style="display: flex; gap: 24px; justify-content: center; padding: 24px 0;">
                <!-- Left Sidebar - Chat List -->
                <div class="chat-sidebar" style="width: 320px; background: white; border: 2px solid #fde8da; border-radius: 16px; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1); overflow: hidden;">
                    <!-- Search Bar -->
                    <div class="search-bar" style="padding: 20px; border-bottom: 2px solid #fde8da;">
                        <div class="search-container" style="position: relative;">
                            <div class="search-icon" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: #aa0e2f; z-index: 2;">
                                <i class="bi bi-search" style="font-size: 18px;"></i>
                            </div>
                            <input
                                type="text"
                                placeholder="Search conversations..."
                                class="search-input" style="width: 100%; padding: 14px 14px 14px 45px; border: 2px solid #fde8da; border-radius: 12px; background: white; color: #6b2a1a; font-size: 16px; transition: all 0.3s ease;" onmouseover="this.style.borderColor='#aa0e2f';" onmouseout="this.style.borderColor='#fde8da';" onfocus="this.style.borderColor='#aa0e2f'; this.style.boxShadow='0 0 0 3px rgba(170, 14, 47, 0.1)';" onblur="this.style.borderColor='#fde8da'; this.style.boxShadow='none';"
                            />
                        </div>
                    </div>

                    <!-- Chat List -->
                    <div class="chat-item" style="display: flex; align-items: center; gap: 16px; padding: 16px 20px; min-height: 72px; cursor: pointer; transition: all 0.3s ease; border-bottom: 1px solid #fde8da;" onmouseover="this.style.background='#fde8da'; this.style.transform='translateX(8px)';" onmouseout="this.style.background='white'; this.style.transform='translateX(0)';">
                        <img src="assets/brunette-businesswoman-showing-her-tablet.jpg" alt="Ayesha Rahman" class="chat-avatar" style="width: 56px; height: 56px; border-radius: 50%; object-fit: cover; border: 2px solid #fde8da;">
                        <div class="chat-info" style="flex: 1;">
                            <p class="chat-name" style="color: #aa0e2f; font-size: 16px; font-weight: 600; margin-bottom: 4px;">Ayesha Rahman</p>
                            <p class="chat-preview" style="color: #6b2a1a; font-size: 14px; margin-bottom: 0; opacity: 0.8;">Hi there! How are you doing?</p>
                        </div>
                    </div>

                    <div class="chat-item" style="display: flex; align-items: center; gap: 16px; padding: 16px 20px; min-height: 72px; cursor: pointer; transition: all 0.3s ease; border-bottom: 1px solid #fde8da;" onmouseover="this.style.background='#fde8da'; this.style.transform='translateX(8px)';" onmouseout="this.style.background='white'; this.style.transform='translateX(0)';">
                        <img src="assets/successful-business-woman-blue-suit.jpg" alt="Fatima Khan" class="chat-avatar" style="width: 56px; height: 56px; border-radius: 50%; object-fit: cover; border: 2px solid #fde8da;">
                        <div class="chat-info" style="flex: 1;">
                            <p class="chat-name" style="color: #aa0e2f; font-size: 16px; font-weight: 600; margin-bottom: 4px;">Fatima Khan</p>
                            <p class="chat-preview" style="color: #6b2a1a; font-size: 14px; margin-bottom: 0; opacity: 0.8; background: #fde8da; padding: 8px 12px; border-radius: 8px; border: 1px solid #fde8da;">I'm good, thanks! How about you?</p>
                        </div>
                    </div>

                    <div class="chat-item" style="display: flex; align-items: center; gap: 16px; padding: 16px 20px; min-height: 72px; cursor: pointer; transition: all 0.3s ease; border-bottom: 1px solid #fde8da;" onmouseover="this.style.background='#fde8da'; this.style.transform='translateX(8px)';" onmouseout="this.style.background='white'; this.style.transform='translateX(0)';">
                        <img src="assets/successful-business-woman-blue-suit.jpg" alt="Nadia Islam" class="chat-avatar" style="width: 56px; height: 56px; border-radius: 50%; object-fit: cover; border: 2px solid #fde8da;">
                        <div class="chat-info" style="flex: 1;">
                            <p class="chat-name" style="color: #aa0e2f; font-size: 16px; font-weight: 600; margin-bottom: 4px;">Nadia Islam</p>
                            <p class="chat-preview" style="color: #6b2a1a; font-size: 14px; margin-bottom: 0; opacity: 0.8;">I'm doing well, just finished work.</p>
                        </div>
                    </div>

                    <div class="chat-item" style="display: flex; align-items: center; gap: 16px; padding: 16px 20px; min-height: 72px; cursor: pointer; transition: all 0.3s ease; border-bottom: 1px solid #fde8da;" onmouseover="this.style.background='#fde8da'; this.style.transform='translateX(8px)';" onmouseout="this.style.background='white'; this.style.transform='translateX(0)';">
                        <img src="assets/successful-business-woman-blue-suit.jpg" alt="Zara Ahmed" class="chat-avatar" style="width: 56px; height: 56px; border-radius: 50%; object-fit: cover; border: 2px solid #fde8da;">
                        <div class="chat-info" style="flex: 1;">
                            <p class="chat-name" style="color: #aa0e2f; font-size: 16px; font-weight: 600; margin-bottom: 4px;">Zara Ahmed</p>
                            <p class="chat-preview" style="color: #6b2a1a; font-size: 14px; margin-bottom: 0; opacity: 0.8;">That's great! What do you do?</p>
                        </div>
                    </div>

                    <div class="chat-item" style="display: flex; align-items: center; gap: 16px; padding: 16px 20px; min-height: 72px; cursor: pointer; transition: all 0.3s ease; border-bottom: 1px solid #fde8da;" onmouseover="this.style.background='#fde8da'; this.style.transform='translateX(8px)';" onmouseout="this.style.background='white'; this.style.transform='translateX(0)';">
                        <img src="assets/successful-business-woman-blue-suit.jpg" alt="Rina Chowdhury" class="chat-avatar" style="width: 56px; height: 56px; border-radius: 50%; object-fit: cover; border: 2px solid #fde8da;">
                        <div class="chat-info" style="flex: 1;">
                            <p class="chat-name" style="color: #aa0e2f; font-size: 16px; font-weight: 600; margin-bottom: 4px;">Rina Chowdhury</p>
                            <p class="chat-preview" style="color: #6b2a1a; font-size: 14px; margin-bottom: 0; opacity: 0.8;">I'm a software engineer.</p>
                        </div>
                    </div>

                    <div class="chat-item" style="display: flex; align-items: center; gap: 16px; padding: 16px 20px; min-height: 72px; cursor: pointer; transition: all 0.3s ease; border-bottom: 1px solid #fde8da;" onmouseover="this.style.background='#fde8da'; this.style.transform='translateX(8px)';" onmouseout="this.style.background='white'; this.style.transform='translateX(0)';">
                        <img src="assets/successful-business-woman-blue-suit.jpg" alt="Sima Ali" class="chat-avatar" style="width: 56px; height: 56px; border-radius: 50%; object-fit: cover; border: 2px solid #fde8da;">
                        <div class="chat-info" style="flex: 1;">
                            <p class="chat-name" style="color: #aa0e2f; font-size: 16px; font-weight: 600; margin-bottom: 4px;">Sima Ali</p>
                            <p class="chat-preview" style="color: #6b2a1a; font-size: 14px; margin-bottom: 0; opacity: 0.8;">Nice! I'm a teacher.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Chat Area -->
                <div class="chat-area" style="flex: 1; max-width: 960px; background: white; border: 2px solid #fde8da; border-radius: 16px; box-shadow: 0 8px 32px rgba(170, 14, 47, 0.1); overflow: hidden;">
                    <!-- Chat Header -->
                    <div class="chat-header" style="padding: 24px; border-bottom: 2px solid #fde8da; background: #fde8da;">
                        <div class="header-content" style="display: flex; align-items: center; gap: 20px;">
                            <img src="assets/brunette-businesswoman-showing-her-tablet.jpg" alt="Ayesha Rahman" class="chat-profile-photo" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; border: 3px solid white;">
                            <div class="chat-profile-info">
                                <p class="chat-profile-name" style="color: #aa0e2f; font-size: 24px; font-weight: 700; margin-bottom: 8px;">Ayesha Rahman</p>
                                <p class="chat-status" style="color: #6b2a1a; font-size: 16px; margin-bottom: 0; opacity: 0.8;">Active now</p>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Messages -->
                    <div class="chat-messages" style="padding: 24px; flex: 1; overflow-y: auto;">
                        <div class="message-item" style="display: flex; align-items: flex-end; gap: 12px; margin-bottom: 20px;">
                            <img src="assets/brunette-businesswoman-showing-her-tablet.jpg" alt="Ayesha Rahman" class="message-avatar" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid #fde8da; flex-shrink: 0;">
                            <div class="message-content" style="flex: 1; max-width: 360px;">
                                <p class="message-sender" style="color: #aa0e2f; font-size: 13px; font-weight: 600; margin-bottom: 4px;">Ayesha Rahman</p>
                                <p class="message-text" style="background: #fde8da; color: #6b2a1a; padding: 12px 16px; border-radius: 16px; margin-bottom: 0; font-size: 16px; line-height: 1.4; border: 1px solid #fde8da;">Hi there! How are you doing?</p>
                            </div>
                        </div>

                    <div class="flex items-end gap-3 p-4 justify-end">
                        <div class="flex flex-1 flex-col gap-1 items-end">
                            <p class="text-[#49739c] text-[13px] font-normal leading-normal max-w-[360px] text-right">Me</p>
                            <p class="text-base font-normal leading-normal flex max-w-[360px] rounded-lg px-4 py-3 bg-[#0d80f2] text-slate-50">I'm good, thanks! How about you?</p>
                        </div>
                        <div
                            class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                            style="background-image: url('https://via.placeholder.com/40x40/ff6fa5/ffffff?text=U');"
                        ></div>
                    </div>

                        <div class="message-item" style="display: flex; align-items: flex-end; gap: 12px; margin-bottom: 20px;">
                            <img src="assets/brunette-businesswoman-showing-her-tablet.jpg" alt="Ayesha Rahman" class="message-avatar" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid #fde8da; flex-shrink: 0;">
                            <div class="message-content" style="flex: 1; max-width: 360px;">
                                <p class="message-sender" style="color: #aa0e2f; font-size: 13px; font-weight: 600; margin-bottom: 4px;">Ayesha Rahman</p>
                                <p class="message-text" style="background: #fde8da; color: #6b2a1a; padding: 12px 16px; border-radius: 16px; margin-bottom: 0; font-size: 16px; line-height: 1.4; border: 1px solid #fde8da;">I'm doing well, just finished work.</p>
                            </div>
                        </div>

                        <div class="message-item user-message" style="display: flex; align-items: flex-end; gap: 12px; margin-bottom: 20px; justify-content: flex-end;">
                            <div class="message-content" style="flex: 1; max-width: 360px; text-align: right;">
                                <p class="message-sender" style="color: #aa0e2f; font-size: 13px; font-weight: 600; margin-bottom: 4px;">Me</p>
                                <p class="message-text" style="background: linear-gradient(135deg, #aa0e2f, #a60e2d); color: white; padding: 12px 16px; border-radius: 16px; margin-bottom: 0; font-size: 16px; line-height: 1.4; border: 1px solid #aa0e2f; display: inline-block;">That's great! What do you do?</p>
                            </div>
                            <img src="assets/cool-neon-blue-profile-picture-u9y9ydo971k9mdcf.jpg" alt="You" class="message-avatar" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid #fde8da; flex-shrink: 0;">
                        </div>

                        <div class="message-item" style="display: flex; align-items: flex-end; gap: 12px; margin-bottom: 20px;">
                            <img src="assets/brunette-businesswoman-showing-her-tablet.jpg" alt="Ayesha Rahman" class="message-avatar" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid #fde8da; flex-shrink: 0;">
                            <div class="message-content" style="flex: 1; max-width: 360px;">
                                <p class="message-sender" style="color: #aa0e2f; font-size: 13px; font-weight: 600; margin-bottom: 4px;">Ayesha Rahman</p>
                                <p class="message-text" style="background: #fde8da; color: #6b2a1a; padding: 12px 16px; border-radius: 16px; margin-bottom: 0; font-size: 16px; line-height: 1.4; border: 1px solid #fde8da;">I'm a software engineer.</p>
                            </div>
                        </div>

                        <div class="message-item user-message" style="display: flex; align-items: flex-end; gap: 12px; margin-bottom: 20px; justify-content: flex-end;">
                            <div class="message-content" style="flex: 1; max-width: 360px; text-align: right;">
                                <p class="message-sender" style="color: #aa0e2f; font-size: 13px; font-weight: 600; margin-bottom: 4px;">Me</p>
                                <p class="message-text" style="background: linear-gradient(135deg, #aa0e2f, #a60e2d); color: white; padding: 12px 16px; border-radius: 16px; margin-bottom: 0; font-size: 16px; line-height: 1.4; border: 1px solid #aa0e2f; display: inline-block;">Nice! I'm a teacher.</p>
                            </div>
                            <img src="assets/cool-neon-blue-profile-picture-u9y9ydo971k9mdcf.jpg" alt="You" class="message-avatar" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid #fde8da; flex-shrink: 0;">
                        </div>

                    <!-- Message Input -->
                    <div class="message-input-container" style="padding: 24px; border-top: 2px solid #fde8da; background: #fde8da;">
                        <div class="input-wrapper" style="display: flex; align-items: center; gap: 16px;">
                            <div class="input-field" style="flex: 1; position: relative;">
                                <input
                                    type="text"
                                    placeholder="Type a message..."
                                    class="message-input" style="width: 100%; padding: 16px 20px; border: 2px solid #fde8da; border-radius: 16px; background: white; color: #6b2a1a; font-size: 16px; transition: all 0.3s ease;" onmouseover="this.style.borderColor='#aa0e2f';" onmouseout="this.style.borderColor='#fde8da';" onfocus="this.style.borderColor='#aa0e2f'; this.style.boxShadow='0 0 0 3px rgba(170, 14, 47, 0.1)';" onblur="this.style.borderColor='#fde8da'; this.style.boxShadow='none';"
                                    id="message-input"
                                />
                            </div>
                            <div class="input-actions" style="display: flex; align-items: center; gap: 12px;">
                                <button class="action-btn" style="background: white; border: 2px solid #fde8da; color: #aa0e2f; padding: 12px; border-radius: 12px; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.background='#aa0e2f'; this.style.color='white'; this.style.transform='scale(1.1)';" onmouseout="this.style.background='white'; this.style.color='#aa0e2f'; this.style.transform='scale(1)';" title="Attach Image">
                                    <i class="bi bi-image" style="font-size: 18px;"></i>
                                </button>
                                <button class="action-btn" style="background: white; border: 2px solid #fde8da; color: #aa0e2f; padding: 12px; border-radius: 12px; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.background='#aa0e2f'; this.style.color='white'; this.style.transform='scale(1.1)';" onmouseout="this.style.background='white'; this.style.color='#aa0e2f'; this.style.transform='scale(1)';" title="Emoji">
                                    <i class="bi bi-emoji-smile" style="font-size: 18px;"></i>
                                </button>
                                <button class="send-btn" style="background: linear-gradient(135deg, #aa0e2f, #a60e2d); color: white; border: 2px solid #aa0e2f; border-radius: 16px; padding: 16px 24px; font-weight: 600; font-size: 16px; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 8px 24px rgba(170, 14, 47, 0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 32px rgba(170, 14, 47, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(170, 14, 47, 0.3)';" id="send-button">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Messages Page JS -->
    <script src="assets/js/messages.js"></script>
</body>
</html>
