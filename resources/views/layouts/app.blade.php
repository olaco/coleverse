<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TinkerHub Portfolio')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #121212;
            color: white;
            font-family: 'Inter', sans-serif;
        }

        /* Logo Styling */
        .logo-text {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.2rem;
            font-weight: 700;
            color: #4361EE;
            letter-spacing: 2px;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.5); /* distance / depth feel */
        }

        /* Navbar styling */
        .navbar {
            background-color: rgba(17, 24, 39, 0.85);
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff;
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #4361EE;
        }

        /* Banner / Hero Section */
        #banner {
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
        }
        #particles-js {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: 0;
        }
        #banner .content {
            position: relative;
            z-index: 10;
            max-width: 800px;
        }
        #banner h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            color: #4361EE;
            letter-spacing: 2px;
            text-shadow: 3px 3px 10px rgba(0,0,0,0.6); /* distance / depth feel */
        }
        #banner h2 {
            font-weight: 600;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        #banner p {
            font-size: 1.1rem;
            color: #CCCCCC;
            margin-bottom: 2rem;
        }
        .divider {
            width: 60px;
            height: 4px;
            background-color: #4361EE;
            margin: 1rem auto;
            border-radius: 2px;
        }
        .portfolio-button {
            background-color: #4361EE;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .portfolio-button:hover {
            background-color: #2f49b7;
        }

        /* Projects Section */
        .project-card {
            background-color: #1a1a1a;
            border: none;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-5px);
        }
        .project-card .card-body {
            color: #fff;
        }

        /* Footer Styling */
        footer {
            background-color: #1a1a1a;
            padding: 3rem 0;
            color: #CCCCCC;
        }
        footer a {
            color: #4361EE;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .footer-logo {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: #4361EE;
            letter-spacing: 1.5px;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
        }
    </style>

    @stack('styles')
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand logo-text" href="{{route('home')}}">TinkerHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('projects.index')}}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.index')}}">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero / Banner Section -->
    <section id="banner">
        <div id="particles-js"></div>
        <div class="content">
            <h1 class="logo-text">TinkerHub</h1>
            <div class="divider"></div>
            <h2><span id="typed"></span></h2>
            <p>I design and implement seamless automations that connect Discord communities with thousands of apps through Zapier, saving time and boosting engagement.</p>
            <a href="#projects" class="portfolio-button">Explore My Portfolio</a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container py-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container text-center text-md-start">
            <div class="row">
                <!-- Logo / Brand -->
                <div class="col-md-4 mb-3">
                    <div class="footer-logo">TinkerHub</div>
                    <p class="mt-2">Building automations, Discord bots, Web3 tools, and Python applications to simplify life and work.</p>
                </div>

                <!-- Contact -->
                <div class="col-md-4 mb-3">
                    <h6>Contact</h6>
                    <p>Email: <a href="mailto:oladapo@example.com">oladapocole@gmail.com</a></p>
                    <p>Phone: +234 070 6351 5693</p>
                </div>

                <!-- Social Links -->
                <div class="col-md-4 mb-3">
                    <h6>Follow Me</h6>
                    <a href="#" target="https://github.com/olaco/coleverse">GitHub</a> |
                    <a href="#" target="https://www.linkedin.com/in/oladapo-cole-6aa01a37/">LinkedIn</a> |
                    <a href="#" target="_blank">Twitter</a>
                </div>
            </div>
            <hr class="border-secondary">
            <p class="text-center mt-3">&copy; {{ date('Y') }} TinkerHub. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <script>
        // Typed.js effect
        var typed = new Typed("#typed", {
            strings: [
                "Discord & Zapier Automation Specialist ⚡",
                "Python & Web3 Developer 🐍",
                "Cloud & DevOps Builder ☁️"
            ],
            typeSpeed: 60,
            backSpeed: 40,
            backDelay: 1500,
            loop: true
        });

        // Particles.js background
        particlesJS("particles-js", {
            "particles": {
                "number": { "value": 80, "density": { "enable": true, "value_area": 800 } },
                "color": { "value": "#ffffff" },
                "shape": { "type": "circle" },
                "opacity": { "value": 0.5 },
                "size": { "value": 3, "random": true },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": { "enable": true, "speed": 4, "direction": "none", "out_mode": "out" }
            },
            "interactivity": {
                "events": {
                    "onhover": { "enable": true, "mode": "grab" },
                    "onclick": { "enable": true, "mode": "push" }
                },
                "modes": {
                    "grab": { "distance": 140, "line_linked": { "opacity": 1 } },
                    "push": { "particles_nb": 4 }
                }
            },
            "retina_detect": true
        });
    </script>

    @stack('scripts')
</body>
</html>
