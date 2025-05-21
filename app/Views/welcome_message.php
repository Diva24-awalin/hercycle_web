<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hercycle - Menstrual & Pregnancy Cycle Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #F4A4A4;
            --secondary-color: #DDC5F5;
            --white-color: #FFFFFF;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        
        .navbar {
            background-color: var(--white-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.8rem;
        }
        
        .nav-link {
            color: #555 !important;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 500;
        }
        
        .btn-primary:hover {
            background-color: #e89292;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(244, 164, 164, 0.3);
        }
        
        .btn-secondary {
            background-color: var(--secondary-color);
            border: none;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 500;
            color: #333;
        }
        
        .btn-secondary:hover {
            background-color: #d1b0f0;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(221, 197, 245, 0.3);
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--white-color) 0%, #fef0f0 100%);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
        }
        
        .hero-image {
            max-width: 100%;
            height: auto;
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        /* About Section */
        .about-section {
            padding: 100px 0;
            background-color: var(--white-color);
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background: var(--primary-color);
            bottom: -10px;
            left: 0;
            border-radius: 2px;
        }
        
        .about-content {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }
        
        .about-image {
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }
        
        .about-image:hover {
            transform: scale(1.03);
        }
        
        /* Features Section */
        .features-section {
            padding: 100px 0;
            background-color: #f9f9f9;
        }
        
        .feature-card {
            background-color: var(--white-color);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            height: 100%;
            border-top: 4px solid var(--primary-color);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .feature-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #333;
        }
        
        .feature-description {
            color: #666;
            line-height: 1.7;
        }
        
        /* Team Section */
        .team-section {
            padding: 100px 0;
            background-color: var(--white-color);
        }
        
        .team-card {
            background-color: var(--white-color);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            margin-bottom: 30px;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .team-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .team-info {
            padding: 20px;
            text-align: center;
        }
        
        .team-name {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }
        
        .team-position {
            color: var(--primary-color);
            font-weight: 500;
            margin-bottom: 15px;
        }
        
        .team-social {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .team-social a {
            color: #666;
            transition: all 0.3s;
        }
        
        .team-social a:hover {
            color: var(--primary-color);
        }
        
        /* Footer */
        .footer {
            background-color: #333;
            color: var(--white-color);
            padding: 60px 0 20px;
        }
        
        .footer-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--white-color);
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-icons a {
            color: var(--white-color);
            background-color: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: #bbb;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Hercycle</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                </ul>
                <div class="ms-lg-3 mt-3 mt-lg-0">
                    <a href="#" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="hero-title">Take Control of Your Reproductive Health</h1>
                    <p class="hero-subtitle">Hercycle helps you track your menstrual cycle, predict ovulation, monitor pregnancy, and understand your body better.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-download me-2"></i> Download Now
                        </a>
                        <a href="#" class="btn btn-secondary">
                            <i class="fas fa-play me-2"></i> Watch Demo
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="https://illustrations.popsy.co/white/woman-holding-a-heart.svg" alt="Hercycle App" class="hero-image img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">About Hercycle</h2>
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="About Hercycle" class="about-image img-fluid">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-content">
                        <p>Hercycle is a comprehensive menstrual cycle and pregnancy management app designed to empower women with knowledge about their reproductive health.</p>
                        <p>Our mission is to provide accurate, personalized insights about your menstrual cycle, fertility window, and pregnancy progress, all while maintaining the highest standards of privacy and data security.</p>
                        <p>With Hercycle, you can:</p>
                        <ul>
                            <li>Track your menstrual cycles with precision</li>
                            <li>Predict ovulation and fertile days</li>
                            <li>Monitor pregnancy week by week</li>
                            <li>Receive personalized health insights</li>
                            <li>Connect with a community of women</li>
                        </ul>
                        <p>Developed by a team of women's health experts and technologists, Hercycle combines medical accuracy with user-friendly design.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Amazing Features</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h3 class="feature-title">Cycle Tracking</h3>
                        <p class="feature-description">Accurately track your menstrual cycles, log symptoms, and receive predictions for your next period.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-egg"></i>
                        </div>
                        <h3 class="feature-title">Ovulation Prediction</h3>
                        <p class="feature-description">Get precise ovulation predictions based on your unique cycle patterns and fertility indicators.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h3 class="feature-title">Pregnancy Tracker</h3>
                        <p class="feature-description">Follow your pregnancy week by week with personalized information about your baby's development.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="feature-title">Health Analytics</h3>
                        <p class="feature-description">Visualize patterns in your cycle, symptoms, and moods with comprehensive charts and reports.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <h3 class="feature-title">Smart Reminders</h3>
                        <p class="feature-description">Never forget to take your pills or track important dates with customizable reminders.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3 class="feature-title">Privacy Protection</h3>
                        <p class="feature-description">Your data is encrypted and never shared without your explicit permission.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h3 class="feature-title">Community Support</h3>
                        <p class="feature-description">Connect with other women, share experiences, and get support in our private community.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3 class="feature-title">Expert Advice</h3>
                        <p class="feature-description">Access articles and tips from women's health professionals curated just for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section" id="team">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Meet Our Team</h2>
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <img src="<?= base_url('assets\diva.jpg') ?>" alt="Team Member" class="team-img">
                        <div class="team-info">
                            <h4 class="team-name">Diva Awalin Taluna</h4>
                            <p class="team-position">Web Developer</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Team Member" class="team-img">
                        <div class="team-info">
                            <h4 class="team-name">Michael Chen</h4>
                            <p class="team-position">Lead Developer</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Team Member" class="team-img">
                        <div class="team-info">
                            <h4 class="team-name">Emma Rodriguez</h4>
                            <p class="team-position">UX Designer</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Team Member" class="team-img">
                        <div class="team-info">
                            <h4 class="team-name">Lisa Park</h4>
                            <p class="team-position">Product Manager</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up">
                    <h3 class="footer-title">Hercycle</h3>
                    <p>Empowering women with knowledge about their reproductive health through accurate tracking and personalized insights.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="footer-title">Features</h3>
                    <ul class="footer-links">
                        <li><a href="#">Cycle Tracking</a></li>
                        <li><a href="#">Ovulation</a></li>
                        <li><a href="#">Pregnancy</a></li>
                        <li><a href="#">Health Analytics</a></li>
                        <li><a href="#">Reminders</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="footer-title">Newsletter</h3>
                    <p>Subscribe to our newsletter for the latest updates and health tips.</p>
                    <form class="mt-4">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" aria-label="Your Email">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Hercycle. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS animation
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>