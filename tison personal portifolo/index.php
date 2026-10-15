<?php
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Tison Tola - Software Engineering student portfolio showcasing full-stack projects, technical skills, and software engineering experience."
    />
    <title>Tison Tola | Software Engineering Student</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="site-header">
      <div class="container nav">
        <div class="brand">TT</div>
        <nav class="nav-links" aria-label="Main navigation">
          <a href="#about">About</a>
          <a href="#skills">Skills</a>
          <a href="#projects">Projects</a>
          <a href="#experience">Experience</a>
          <a href="#contact">Contact</a>
        </nav>
        <a href="#contact" class="btn btn-primary">Hire Me</a>
      </div>
    </header>

    <main>
      <section class="hero">
        <div class="container hero-grid">
          <div class="hero-content">
            <p class="eyebrow">Hello, I’m</p>
            <h1>Tison Tola</h1>
            <h2>Fourth-Year Software Engineering Student</h2>
            <p class="lead">
              I design and build software solutions that are practical, scalable, and user-focused,
              turning ideas into clean, efficient digital products.
            </p>
            <div class="cta-row">
              <a href="#projects" class="btn btn-primary">View My Work</a>
              <a href="#contact" class="btn btn-secondary">Contact Me</a>
            </div>
            <ul class="quick-stats" aria-label="Career statistics">
              <li><strong>4th Year</strong><span>Software Engineering</span></li>
              <li><strong>4+</strong><span>Projects Built</span></li>
              <li><strong>PHP</strong><span>Core Web Stack</span></li>
            </ul>
          </div>

          <div class="hero-card" aria-label="Profile summary card">
            <div class="profile-photo-wrap">
              <img
                src="assets/profile.jpg"
                alt="Tison Tola portrait"
                class="profile-photo"
                onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';"
              />
              <div class="profile-fallback" aria-label="Profile placeholder">TT</div>
            </div>
            <div class="mini-panel">
              <span class="label">Focus</span>
              <strong>Full-Stack Development</strong>
            </div>
            <div class="mini-panel">
              <span class="label">Main Stack</span>
              <strong>PHP, HTML, CSS, JavaScript</strong>
            </div>
            <div class="mini-panel">
              <span class="label">Interests</span>
              <strong>Web Apps, Systems, UX</strong>
            </div>
          </div>
        </div>
      </section>

      <section id="about" class="section">
        <div class="container">
          <div class="section-heading">
            <p class="eyebrow">About Me</p>
            <h3>Software engineering student with a passion for building useful digital systems.</h3>
          </div>

          <div class="about-grid">
            <div class="about-card">
              <p>
                I am Tison Tola, a fourth-year software engineering student with a strong interest in
                developing practical systems that solve real-world problems. I enjoy learning modern
                technologies, writing efficient code, and creating software that is both functional and
                easy to use.
              </p>
              <p>
                Through academic projects and personal development, I have gained experience in web
                development, system design, database management, problem-solving, and team collaboration.
                I am especially interested in creating full-stack applications, student and business
                management systems, and user-friendly interfaces.
              </p>
            </div>
            <div class="about-highlights">
              <div class="highlight-box">
                <span class="count">4+</span>
                <span>Major academic/project builds</span>
              </div>
              <div class="highlight-box">
                <span class="count">3</span>
                <span>System design projects</span>
              </div>
              <div class="highlight-box">
                <span class="count">100%</span>
                <span>Driven to learn and improve</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="skills" class="section alt-bg">
        <div class="container">
          <div class="section-heading center">
            <p class="eyebrow">Skills</p>
            <h3>Technologies I use to build modern software solutions.</h3>
          </div>

          <div class="skills-grid">
            <div class="skill-card">
              <h4>Languages</h4>
              <div class="tag-list">
                <span>PHP</span>
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
                <span>Java</span>
                <span>Python</span>
              </div>
            </div>

            <div class="skill-card">
              <h4>Frontend</h4>
              <div class="tag-list">
                <span>Responsive UI</span>
                <span>Bootstrap</span>
                <span>CSS3</span>
                <span>UI Design</span>
              </div>
            </div>

            <div class="skill-card">
              <h4>Backend</h4>
              <div class="tag-list">
                <span>PHP</span>
                <span>MySQL</span>
                <span>REST Logic</span>
                <span>Form Handling</span>
              </div>
            </div>

            <div class="skill-card">
              <h4>Tools</h4>
              <div class="tag-list">
                <span>Git</span>
                <span>GitHub</span>
                <span>VS Code</span>
                <span>Figma</span>
                <span>Postman</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="projects" class="section">
        <div class="container">
          <div class="section-heading center">
            <p class="eyebrow">Featured Projects</p>
            <h3>Projects that reflect my problem-solving mindset and software development skills.</h3>
          </div>

          <div class="project-grid">
            <article class="project-card">
              <div class="project-header">
                <span class="project-type">Expense Tracker</span>
                <span class="project-stack">PHP • HTML • CSS</span>
              </div>
              <h4>Expense Tracker</h4>
              <p>
                A practical personal finance system for tracking income, expenses, and monthly totals.
                It helps users manage spending habits and understand their financial records more clearly.
              </p>
              <ul>
                <li>Budget tracking and summary reporting</li>
                <li>Expense categorization</li>
                <li>Clean dashboard for daily financial review</li>
              </ul>
            </article>

            <article class="project-card">
              <div class="project-header">
                <span class="project-type">Rental System</span>
                <span class="project-stack">PHP • MySQL • CSS</span>
              </div>
              <h4>Online Rental System</h4>
              <p>
                A rental management application designed for listing properties, managing bookings, and
                tracking availability in a simple digital workflow.
              </p>
              <ul>
                <li>Property listing and status management</li>
                <li>Rental request handling</li>
                <li>Database-driven record organization</li>
              </ul>
            </article>

            <article class="project-card">
              <div class="project-header">
                <span class="project-type">Library Management</span>
                <span class="project-stack">PHP • HTML • CSS • MySQL</span>
              </div>
              <h4>Library Management System</h4>
              <p>
                A system for managing books, members, lending records, and return operations in a digital
                library environment.
              </p>
              <ul>
                <li>Book catalog and member management</li>
                <li>Issue and return tracking</li>
                <li>Efficient record maintenance</li>
              </ul>
            </article>

            <article class="project-card">
              <div class="project-header">
                <span class="project-type">Utility App</span>
                <span class="project-stack">HTML • CSS • JavaScript</span>
              </div>
              <h4>Calculator</h4>
              <p>
                A simple but polished calculator application built to demonstrate front-end logic,
                responsive layout, and clean user interaction design.
              </p>
              <ul>
                <li>Basic arithmetic operations</li>
                <li>Responsive interface</li>
                <li>Clear and intuitive UI design</li>
              </ul>
            </article>
          </div>
        </div>
      </section>

      <section id="experience" class="section alt-bg">
        <div class="container">
          <div class="section-heading">
            <p class="eyebrow">Experience</p>
            <h3>Academic and practical experiences that strengthened my engineering skills.</h3>
          </div>

          <div class="timeline">
            <div class="timeline-item">
              <span class="date">2022 - Present</span>
              <div class="timeline-content">
                <h4>Software Engineering Student</h4>
                <p>
                  Building practical projects and strengthening my foundation in software architecture,
                  web development, and database-driven application design.
                </p>
              </div>
            </div>

            <div class="timeline-item">
              <span class="date">Academic Projects</span>
              <div class="timeline-content">
                <h4>Web and System Development</h4>
                <p>
                  Created applications such as expense tracking, library management, and rental systems to
                  address real user needs and improve digital workflows.
                </p>
              </div>
            </div>

            <div class="timeline-item">
              <span class="date">Growth</span>
              <div class="timeline-content">
                <h4>Problem Solving & Collaboration</h4>
                <p>
                  Improved my ability to analyze requirements, design modules, write maintainable code, and
                  work effectively in team-based development environments.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="section contact-section">
        <div class="container contact-box">
          <div>
            <p class="eyebrow">Contact</p>
            <h3>Let’s build something meaningful together.</h3>
            <p>
              I’m open to internship opportunities, software projects, collaborations, and junior developer roles.
            </p>
          </div>

          <div class="contact-links">
            <a href="tel:+251953192373">0953192373</a>
            <a href="mailto:tisontola4@gmail.com">tisontola4@gmail.com</a>
            <a href="https://github.com/tsiontola" target="_blank" rel="noreferrer">GitHub</a>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container footer-inner">
        <p>© <?php echo $year; ?> Tison Tola</p>
        <p>Built with PHP, HTML, and CSS</p>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
