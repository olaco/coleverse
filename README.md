🪐 Coleverse

A unified developer portfolio showcasing multi-stack innovation — from AI-powered Laravel applications to educational Python games and system tools — built with scalability, containerization, and creativity in mind.

🚀 Overview

Coleverse is a central Laravel portfolio hub that showcases independently hosted projects across multiple tech stacks.
It’s Dockerized for deployment on Render, with future integrations for AI, Web3, and educational tools.

🧩 Structure & Projects

myapp/
├── .gitignore
├── README.md
├── Dockerfile
├── docker-compose.yml
├── docker/
│   └── nginx/
│       └── default.conf
├── app/
├── public/
├── resources/
└── .env.example


Project	Stack	Description
Coleverse (Main App- Live)	Laravel + Docker	Core portfolio showing all projects with links, live demos, and screenshots.

Inventory-MGT AI (Upcoming)	Laravel + Python + Tailwind/Bootstrap	AI-powered inventory management system with predictive analytics.

Edutech GameLab	Python (Upcoming)	Educational games showcasing interactivity and logic.
System Tools Suite	Python + AI Automation	Utilities like system info analyzers and cleaners.

Web3 Integrations (Planned)	Laravel + JavaScript + Web3.py	Payment gateways, blockchain data visualization, smart contracts.
🧱 Tech Stack

Backend: Laravel 12 (PHP 8.3)

Frontend: Tailwind CSS / Bootstrap

AI & Automation: Python (Flask, Pandas, Scikit-learn)

Containerization: Docker + Docker Compose

Version Control: Git & GitHub

Deployment: Render


⚙️ Setup & Usage
# Clone the repo
git clone https://github.com/olaco/coleverse.git

# Navigate into project
cd coleverse

# Build and start Docker containers
docker-compose up -d --build

# Access the app
http://localhost:8000

🧠 Vision

Coleverse represents an evolving ecosystem — a bridge between learning, experimentation, and professional delivery.
From AI business tools to interactive edutech games, each project is self-contained, discoverable, and deployable from this central hub.

📜 License

This project is licensed under the MIT License.
