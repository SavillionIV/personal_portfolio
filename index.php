<?php
require "includes/db.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Tells the browser what character set to use -->
    <meta charset="UTF-8">

    <!-- Makes the page scale properly on phones and tablets -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title shown in the browser tab -->
    <title>Saville's Website</title>

    <!-- Connects this HTML file to the CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- =========================
         HEADER
         Intro section at top
    ========================== -->
    <header class="header">
        <h1>Saville's Website</h1>
        <p class="subtitle">Learning programming to build websites, games, and applications.</p>
    </header>

    <!-- =========================
         NAVBAR
         Main site navigation
    ========================== -->
    <nav class="navbar">
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="#projects">Projects</a>
            <a href="#goals">Goals</a>
            <a href="#contact">Contact</a>
        </div>

        <!-- Search area -->
        <div class="nav-search">
            <input 
                type="search" 
                id="searchInput" 
                class="search" 
                placeholder="Search goals or projects..."
            >
        </div>
    </nav>

 <!-- =========================
     MAIN CONTENT
========================= -->
<main class="main">

    <!-- About Me card -->
    <section class="card aboutme">
        <img src="images/profile.png" alt="Profile picture of Saville">

        <h2>About Me</h2>
        <p>
            I am learning programming so I can build websites, games, and applications.
            I also enjoy learning languages and working toward bigger creative projects.
        </p>

        <h2>Introduction</h2>
        <p>
            I’m someone who digs deeper than most. I don’t settle for surface-level answers—I want
            to understand how things really work, whether it’s human behavior, societal systems,
            survival strategies, or my own development.
        </p>

        <p>
            I’m grounded and self-aware. I know my limits, but I continue to push for growth where
            it matters. There’s a thoughtful intensity to how I analyze people and systems, and a
            solitude in how I approach the world—like I’m quietly laying the groundwork for something
            better.
        </p>

        <p>
            Whether it's preparing for a future family, building resilience, or seeking peace, I do
            it deliberately and on my own terms.
        </p>

        <p>
            You could call me a <strong>quiet builder</strong>—someone who sees the flaws in things
            but doesn’t give up on trying to fix what I can. Even when life stacks the odds
            financially, mentally, or socially, I recalibrate. I adapt. I keep going.
        </p>

        <p>
            In a world that prizes flash and speed, quiet builders often go unnoticed. But we build
            foundations that last.
        </p>

        <h2>Work History</h2>

        <div class="job">
            <h3>Elwood Staffing</h3>
            <p>
                Performed various assignments including warehouse operations, packaging, order
                picking, and general labor roles across multiple industries.
            </p>
        </div>

        <div class="job">
            <h3>Nestlé / Spherion</h3>
            <p>
                Worked primarily as a General Laborer, with additional roles as a Palletizing
                Operator, Automated Caser Operator, and Linen Room Attendant—supporting production,
                sanitation, and logistics functions.
            </p>
        </div>

        <div class="job">
            <h3>Little Giant Ladder Systems</h3>
            <p>
                Held the role of Pultrusionist, operating specialized machinery to produce fiberglass
                railings for ladders. Responsibilities included machine setup, maintenance,
                troubleshooting, and full breakdown and reassembly during repairs.
            </p>
        </div>

        <div class="job">
            <h3>Northern Gold Foods</h3>
            <p>
                Employed as a Mixer, handling bulk ingredients, following food safety protocols, and
                ensuring precise batch formulation for product consistency. I also worked in wrapping
                and casing areas.
            </p>
        </div>

        <div class="job">
            <h3>Buy 2</h3>
            <p>
                Worked as a Customer Service Representative, Fry Cook, Cashier, and Pump Attendant,
                managing food prep, customer interactions, and front-line retail service.
            </p>
        </div>

        <div class="job">
            <h3>Pierce Fittings</h3>
            <p>
                Served as an Assembler in the manufacturing department, with additional
                responsibilities in the Galvanizing Department, handling coating and finishing
                processes for metal parts.
            </p>
        </div>

        <div class="job">
            <h3>Express Employment</h3>
            <p>
                Performed order picking, packaging, and general warehouse tasks for various
                short-term industrial clients.
            </p>
        </div>

        <div class="job">
            <h3>Tony’s Window Cleaning</h3>
            <p>
                Worked as a Lawn Care Specialist, performing tasks such as mowing, weeding, and leaf
                removal. Also assisted in residential and commercial window cleaning.
            </p>
        </div>

        <p>
            <strong>Other Experience:</strong> I’ve also worked in call centers, restaurants, and
            construction—gaining broad exposure to hands-on environments, team collaboration, and
            problem-solving under pressure.
        </p>

        <h2>Certifications, Permits, and Licenses</h2>

        <h3>Safety &amp; Emergency Preparedness</h3>
        <ul>
            <li>CPR / First Aid / AED</li>
            <li>OSHA 10 &amp; OSHA 30</li>
            <li>HAZWOPER (Hazardous Waste Operations)</li>
            <li>Wilderness First Responder</li>
            <li>Community Emergency Response Team (CERT – FEMA)</li>
            <li>Confined Space Entry</li>
            <li>Lockout/Tagout</li>
            <li>Firearm Safety / Concealed Carry Permit</li>
            <li>Basic Self-Defense &amp; Martial Arts Certification</li>
            <li>HAM Radio License (Technician Class)</li>
        </ul>

        <h3>Transport &amp; Industry</h3>
        <ul>
            <li>Forklift Operator Certification</li>
            <li>CDL (Commercial Driver's License)</li>
            <li>TWIC Card</li>
            <li>Basic Auto Repair / Diesel Engine Certification</li>
        </ul>

        <h3>Professional &amp; Technical</h3>
        <ul>
            <li>Lean Six Sigma (Yellow &amp; Green Belt)</li>
            <li>Google IT Support / Coursera Tech Certificates</li>
            <li>Digital Marketing (Google, HubSpot, Meta)</li>
            <li>Bookkeeping / QuickBooks</li>
            <li>Small Business Administration (SBA) Courses</li>
            <li>Trade Licenses: Landscaping, Lawncare, Window Cleaning</li>
            <li>Business License / EIN / Resale Certificate</li>
            <li>Food Handler’s Permit</li>
        </ul>

        <h2>Skills and Talents</h2>
        <ul>
            <li>Machine Operation &amp; General Labor</li>
            <li>Forklift, Hand Tools, and Assembly</li>
            <li>Team Coordination &amp; Customer Service</li>
            <li>Basic Computer Operations</li>
            <li>Problem Solving &amp; Conflict Resolution</li>
            <li>Survival Training (Urban/Wilderness)</li>
            <li>Bilingual (Novice-level German &amp; Spanish)</li>
            <li>Auto Maintenance &amp; Repair</li>
            <li>Entrepreneurship / Small Business Management</li>
            <li>IT Support &amp; Digital Marketing</li>
            <li>Emergency Communications &amp; Logistics</li>
        </ul>

        <h2>Hobbies and Interests</h2>
        <p>
            I enjoy playing video games, watching movies and series, and collecting trading cards.
        </p>

        <h3>Favorite Movies and Series</h3>
        <ul>
            <li>The Lord of the Rings / The Hobbit</li>
            <li>The MCU</li>
            <li>Star Trek</li>
        </ul>

        <h3>Favorite Games</h3>
        <ul>
            <li>Skyrim</li>
            <li>Fallout</li>
            <li>Fable</li>
            <li>The Lord of the Rings: The Third Age</li>
            <li>Minecraft</li>
        </ul>

        <h3>Trading Card Collections</h3>
        <p>
            I primarily collect Yu-Gi-Oh!, Magic: The Gathering, and Pokémon.
        </p>
        <p>My collection is organized into four sections:</p>
        <ol>
            <li>Sealed product kept in original packaging</li>
            <li>Binders for free-floating cards, without duplicate copies</li>
            <li>A box of playable cards for visiting family and friends</li>
            <li>A box for trading or selling</li>
        </ol>

        <p>
            I also love camping, hiking, and exploring the outdoors—activities that reconnect me
            with simplicity, survival, and peace of mind.
        </p>
    </section>
</main>

        <!-- Goals section -->
        <section class="card" id="goals">
            <h2>My Goals</h2>

            <!-- 
                Each item has the class "filter-item"
                JavaScript will use this class when searching
            -->
            <ul class="goal-list">
                <li class="filter-item">Build websites</li>
                <li class="filter-item">Create games</li>
                <li class="filter-item">Develop software</li>
                <li class="filter-item">Make music tools</li>
            </ul>
        </section>

        <!-- Projects section -->
        <section class="card" id="projects">
            <h2>Other Projects</h2>

            <!-- These paragraphs can also be searched -->
            <p class="filter-item">
                I am working on programming lessons in HTML, CSS, JavaScript, PHP, and MySQL.
            </p>

            <p class="filter-item">
                I am also learning German and Spanish to improve communication and open more opportunities.
            </p>

            <p class="filter-item">
                Another long-term goal is building websites, interactive tools, and eventually games and software.
            </p>
        </section>

        <!-- Contact form -->
        <section class="card contact" id="contact">
            <h2>Contact Me</h2>

            <!--
                "novalidate" turns off the browser's default popup validation
                so we can practice making our own in JavaScript
            -->
            <form id="contactForm" novalidate>
                <label for="name">Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Enter your name"
                >

                <label for="email">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Enter your email"
                >

                <label for="message">Message</label>
                <textarea 
                    id="message" 
                    name="message" 
                    rows="5" 
                    placeholder="Write your message here"
                ></textarea>

                <button type="submit">Submit</button>

                <!-- JavaScript will place messages here -->
                <p id="formMessage" class="form-message"></p>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2026 Saville's Website</p>
    </footer>

    <!-- Connects HTML to JavaScript -->
    <script src="script.js"></script>
</body>
</html>
