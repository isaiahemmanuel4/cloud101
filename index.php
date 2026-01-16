<?php
// A simple dynamic aspect: Change the active class based on the URL parameter
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bizmarrow Technologies - Class Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <header>
        <div class="container">
            <div class="logo">
                <h1>Bizmarrow <span class="highlight">Tech</span></h1>
            </div>
            <nav>
                <ul id="menu">
                    <li><a href="?page=home" class="<?php echo $page == 'home' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="?page=about-us" class="<?php echo $page == 'about-us' ? 'active' : ''; ?>">About Us</a></li>
                    <li><a href="?page=services" class="<?php echo $page == 'services' ? 'active' : ''; ?>">Services</a></li>
                    <li><a href="?page=training" class="<?php echo $page == 'training' ? 'active' : ''; ?>">Training</a></li>
                    <li><a href="?page=contact-us" class="<?php echo $page == 'contact-us' ? 'active' : ''; ?>">Contact Us</a></li>
                </ul>
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <?php
        switch ($page) {
            case 'home':
                ?>
                <section class="hero">
                    <div class="hero-content">
                        <h2>Practical Hands-on ICT Training</h2>
                        <p>Empowering Nigerians with Digital Economy Skills. We offer personalized 1-on-1 training to help you master the tech world.</p>
                        <a href="?page=services" class="btn btn-red">Our Services</a>
                        <a href="?page=contact-us" class="btn btn-blue">Join Us Today</a>
                    </div>
                </section>

                <section class="features container">
                    <div class="feature-box">
                        <i class="fas fa-laptop-code"></i>
                        <h3>Practical Training</h3>
                        <p>We don't just teach theory; we focus on hands-on projects so you learn by doing.</p>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-user-friends"></i>
                        <h3>1-on-1 Mentorship</h3>
                        <p>Get personalized attention from expert trainers who care about your specific learning pace.</p>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-certificate"></i>
                        <h3>Certification</h3>
                        <p>Receive a recognized certificate upon completion of your project-based training.</p>
                    </div>
                </section>
                <?php
                break;

            case 'about-us':
                ?>
                <section class="container page-content">
                    <h2>About Bizmarrow Technologies</h2>
                    <p><strong>Bizmarrow Technologies</strong> is a leading ICT and computer training institute in Abuja, Nigeria. Unlike traditional schools, we focus on **Project-Based Learning**.</p>
                    
                    <div class="about-grid">
                        <div class="about-item">
                            <h3>Our Mission</h3>
                            <p>To help our students see the practical real-life benefit of ICT and computer knowledge that can be applied easily to their chosen career path or businesses.</p>
                        </div>
                        <div class="about-item">
                            <h3>Why Choose Us?</h3>
                            <p>We offer unmatched practical hands-on training. Whether you are a total beginner or looking to upgrade your skills, our 1-on-1 coaching method ensures you get value for your money.</p>
                        </div>
                    </div>
                </section>
                <?php
                break;

            case 'services':
                ?>
                <section class="container page-content">
                    <h2>Our Services</h2>
                    <div class="services-grid">
                        <div class="service-card">
                            <i class="fas fa-code"></i>
                            <h3>Web Development</h3>
                            <p>Master Frontend and Backend technologies. We teach HTML, CSS, JavaScript, Python, PHP, and Content Management Systems like WordPress.</p>
                        </div>
                        <div class="service-card">
                            <i class="fas fa-cloud"></i>
                            <h3>Cloud Computing</h3>
                            <p>Future-proof your career with our cloud training. Learn how to manage data and services over the internet using modern cloud infrastructure.</p>
                        </div>
                        <div class="service-card">
                            <i class="fas fa-chart-line"></i>
                            <h3>Data Analysis</h3>
                            <p>Learn to visualize and analyze data for business intelligence. Courses include Python for Data Science, Excel, and Visualization tools.</p>
                        </div>
                        <div class="service-card">
                            <i class="fas fa-shield-alt"></i>
                            <h3>Cyber Security</h3>
                            <p>Ethical Hacking and Security training. Learn how to protect systems, networks, and programs from digital attacks.</p>
                        </div>
                    </div>
                </section>
                <?php
                break;

            case 'training':
                ?>
                <section class="container page-content">
                    <h2>Training Programs</h2>
                    <p>Our training is designed for individuals, corporate bodies, and schools. We adopt a **"Show me, don't tell me"** approach.</p>
                    
                    <ul class="training-list">
                        <li><strong>Web Design & Development:</strong> Full stack web development (MERN, LAMP stacks).</li>
                        <li><strong>Mobile App Development:</strong> Android (Java/Kotlin) and iOS.</li>
                        <li><strong>Digital Marketing:</strong> SEO, Social Media Marketing, and Content Strategy.</li>
                        <li><strong>Software Engineering:</strong> Python, Java, C#, and more.</li>
                    </ul>
                </section>
                <?php
                break;

            case 'contact-us':
                ?>
                <section class="container page-content">
                    <h2>Contact Us</h2>
                    <div class="contact-wrapper">
                        <div class="contact-info">
                            <h3>Visit Our Centers</h3>
                            <p><i class="fas fa-map-marker-alt"></i> <strong>Central Area:</strong> Suite B106 Millennium Plaza, opposite NNPC Towers, Abuja.</p>
                            <p><i class="fas fa-map-marker-alt"></i> <strong>Gwarinpa:</strong> Suite SF5/11 Anafaraa Plaza, 1st Avenue, Gwarinpa, Abuja.</p>
                            <p><i class="fas fa-phone"></i> 08088996437, 09096669196</p>
                            <p><i class="fas fa-envelope"></i> info@bizmarrow.com</p>
                        </div>
                        
                        <form class="contact-form" action="" method="POST">
                            <h3>Send a Message</h3>
                            <input type="text" name="name" placeholder="Your Name" required>
                            <input type="email" name="email" placeholder="Your Email" required>
                            <select name="interest">
                                <option value="Web Development">Web Development</option>
                                <option value="Cloud Computing">Cloud Computing</option>
                                <option value="Data Analysis">Data Analysis</option>
                                <option value="Cyber Security">Cyber Security</option>
                            </select>
                            <textarea name="message" placeholder="Your Message" rows="5"></textarea>
                            <button type="submit" name="submit" class="btn btn-red">Submit Project Inquiry</button>
                        </form>
                        
                        <?php
                        // Simple PHP Form Handling (Dynamic Part)
                        if(isset($_POST['submit'])){
                            $name = htmlspecialchars($_POST['name']);
                            echo "<div class='alert success'>Thanks $name! Your message has been received (Simulation).</div>";
                        }
                        ?>
                    </div>
                </section>
                <?php
                break;

            default:
                echo "<h2>Page not found</h2>";
                break;
        }
        ?>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Bizmarrow Technologies Class Project.</p>
            <p>Colors: White, Blue, Red | Dynamic PHP Project</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
