<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matthis Pourcelot</title>
    <link rel="stylesheet" href="./assets/css/style.css?v=1.2">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@2.15.1/devicon.min.css">
</head>

<body>
    <!-- ************************* Navbar ************************* -->
    <header class="header">
        <a href="#" class="logo">Matthis's Portfolio</a>
        <i class='bx bx-menu' id="menu" style='color:#ffffff'></i>
        <nav class="navbar">
            <a href="#home" style="--vlr:1" class="active">Home</a>
            <a href="#projects" style="--vlr:2">Projects</a>
            <a href="#skills" style="--vlr:3">Skills</a>
            <a href="#Timeline" style="--vlr:4">Timeline</a>
            <a href="#contact" style="--vlr:5">Contact Me</a>
        </nav>
    </header>

    <!-- ************************* Home Section ************************* -->
    <section class="home" id="home">
        <div class="text-content">
            <h1>I'm Matthis Pourcelot</h1>
            <div class="text-animation">
                <h2>Student Developer</h2>
            </div>
            <p>Second-year student in a Bachelor's Degree in Computer Science (BUT Informatique), currently seeking a
                web development internship from April 7 to May 30, 2025, to apply the knowledge gained in programming.</p>
            <div class="btn-section">
                <a href="#contact" class="btn">Contact me</a>
                <a href="./assets/pdf/cv.pdf" class="btn" download="Matthis_Pourcelot_CV.pdf">Download my CV</a>
            </div>
            <div class="social-media">
                <a href="https://www.linkedin.com/in/matthis-pourcelot-15b1a22b6/" target="blank">
                    <i class='bx bxl-linkedin' style="--vlr:7"></i>
                </a>
                <a href="https://github.com/Sihtta" target="blank">
                    <i class='bx bxl-github' style="--vlr:8"></i>
                </a>
            </div>
        </div>
        <div class="about2" id="about2">
            <img src="./assets/images/Me.png" alt="Image" />
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects" id="projects">
        <h4 class="title">My <span>Projects</span></h4>
        <div class="projects-grid">
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="card-content">
                            <h2>Interactive Portfolio</h2>
                            <p>An intuitive and elegant portfolio, designed to highlight the talent of a graphic designer or designer.</p>
                            <p>Tech Stack: SYMFONY, PHP, CSS</p>
                        </div>
                    </div>
                    <div class="card-back">
                        <p>View the project:</p>
                        <div class="card-icons">
                            <a href="https://votre-domaine.com/InteractivePortfolio/public/" target="_blank">
                                <i class="fas fa-link"></i>
                            </a>
                            <a href="https://github.com/Sihtta/portfolio.git" target="_blank"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="card-content">
                            <h2>Finna</h2>
                            <p>The ideal app to manage your finances smoothly and effortlessly.</p>
                            <p>Tech Stack: PHP, HTML, CSS</p>
                        </div>
                    </div>
                    <div class="card-back">
                        <p>View the project:</p>
                        <div class="card-icons">
                            <a href="http://localhost/Finna/app/vue/" target="_blank"><i class="fas fa-link"></i></a>
                            <a href="https://github.com/Sihtta/Finna-" target="_blank"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="card-content">
                            <h2>ToDoList</h2>
                            <p>An intuitive todolist to organize your tasks.</p>
                            <p>Tech Stack: PHP, CSS</p>
                        </div>
                    </div>
                    <div class="card-back">
                        <p>View the project:</p>
                        <div class="card-icons">
                            <a href="http://localhost/ToDoList/vue/toDoList.php" target="_blank"><i class="fas fa-link"></i></a>
                            <a href="https://github.com/Sihtta/ToDoList" target="_blank"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="card-content">
                            <h2>Project 4</h2>
                            <p>Brief description</p>
                            <p>Tech Stack: TypeScript, React</p>
                        </div>
                    </div>
                    <div class="card-back">
                        <p>View the project:</p>
                        <div class="card-icons">
                            <a href="#" target="_blank"><i class="fas fa-link"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Skills Section -->
    <section class="skills" id="skills">
        <h4 class="title">My <span>Skills</span></h4>
        <div class="skills-grid">
            <div class="skill-card">
                <i class="skill-icon fa-brands fa-html5"></i>
                <h3>HTML</h3>
                <div class="progress-circle" data-percentage="90" style="--percentage: 90;"></div>
            </div>
            <div class="skill-card">
                <i class="skill-icon fa-brands fa-css3-alt"></i>
                <h3>CSS</h3>
                <div class="progress-circle" data-percentage="80" style="--percentage: 80;"></div>
            </div>
            <div class="skill-card">
                <i class="devicon-typescript-plain skill-icon"></i>
                <h3>TypeScript</h3>
                <div class="progress-circle" data-percentage="60" style="--percentage: 60;"></div>
            </div>

            <div class="skill-card">
                <i class="skill-icon fa-brands fa-php"></i>
                <h3>PHP</h3>
                <div class="progress-circle" data-percentage="60" style="--percentage: 60;"></div>
            </div>
            <div class="skill-card">
                <i class="skill-icon fa-brands fa-python"></i>
                <h3>Python</h3>
                <div class="progress-circle" data-percentage="60" style="--percentage: 60;"></div>
            </div>
            <div class="skill-card">
                <i class="skill-icon fa-solid fa-database"></i>
                <h3>SQL</h3>
                <div class="progress-circle" data-percentage="50" style="--percentage: 50;"></div>
            </div>
            <div class="skill-card">
                <i class="skill-icon fa-solid fa-c"></i>
                <h3>C</h3>
                <div class="progress-circle" data-percentage="50" style="--percentage: 50;"></div>
            </div>
            <div class="skill-card">
                <i class="skill-icon fa-brands fa-symfony"></i>
                <h3>Symfony</h3>
                <div class="progress-circle" data-percentage="50" style="--percentage: 50;"></div>
            </div>
        </div>
    </section>

    <!-- ************************* Timeline ************************* -->
    <section class="Timeline" id="Timeline">
        <h4 class="title">My <span>Education and Experience</span></h4>
        <div class="row">
            <!-- Education Section -->
            <div class="column">
                <h2>Education</h2>
                <div class="box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year">2023-Now <i class='bx bxs-calendar'></i></div>
                            <h3>French Bachelor's Degree in Computer Science and Technology (BUT Informatique)</h3>
                            <p>IUT of Metz, University of Lorraine.</p>
                            <p>Application Development Track: Design, Development, Validation.</p>
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year">2020-23 <i class='bx bxs-calendar'></i></div>
                            <h3>French Baccalauréat</h3>
                            <p>Lycée Louis-Vincent, Metz.</p>
                            <p> General Baccalaureate with Honors (Good).</p>
                            <p>Specializations : Computer Science, Mathematics, Physics-Chemistry.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience Section -->
            <div class="column">
                <h2>Experience</h2>
                <div class="box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year">Summer 2024, 9 weeks <i class='bx bxs-calendar'></i></div>
                            <h3>Seasonal factor</h3>
                            <p>The Post Office, Metz Sorting mail and packages, preparing routes, daily distribution, digital tracking of deliveries and interacting with customers to ensure quality service.</p>
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year">From August 2021 to October 2022 <i class='bx bxs-calendar'></i></div>
                            <h3>SNU</h3>
                            <p>Fort Wagner, Verny. I contributed to the preservation of Fort Wagner by improving my public speaking and collaboration skills within diverse groups.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ************************* Contact Section ************************* -->
    <section class="contact" id="contact">
        <h4 class="title">Contact <span>Me</span></h4>

        <?php
        if (isset($_GET['success']) && $_GET['success'] == 'true') {
            echo '<div class="success-message">Message bien envoyé, merci !</div>';
        }
        ?>


        <form action="backend/send-email.php" method="POST">
            <div class="input-box">
                <input type="text" name="name" required placeholder="Full Name">
                <input type="email" name="email" required placeholder="Email">
            </div>
            <div class="input-box">
                <input type="tel" name="phone" required placeholder="Mobile Number">
                <input type="text" name="subject" required placeholder="Subject">
            </div>
            <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <input type="submit" value="Send Message" class="btn2">
        </form>
    </section>

    <footer>
        <div class="text">
            <p>Copyright @ 2024 by Matthis Pourcelot</p>
        </div>
        <a href="#"> <i class='bx bx-up-arrow-alt'></i></a>
    </footer>

    <script src="./assets/js/script.js"></script>

</body>

</html>