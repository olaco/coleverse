<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home - TinkerHub Portfolio')

@section('content')
<!-- Projects Section -->
<section id="projects">
    <h2 class="text-center mb-5">My Projects</h2>
    <div class="row g-4">

        <!-- Project 1 -->
        <div class="col-md-4">
            <div class="card project-card p-3">
                <div class="card-body">
                    <h5 class="card-title">Discord Automation Bot</h5>
                    <p class="card-text">Automates moderation and notifications for a large Discord community.</p>
                    <p class="card-text"><small>Tools: Discord API, Python, Zapier</small></p>
                    <a href="#" class="btn portfolio-button btn-sm">View Project</a>
                </div>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="col-md-4">
            <div class="card project-card p-3">
                <div class="card-body">
                    <h5 class="card-title">Zapier Workflow Suite</h5>
                    <p class="card-text">Connects multiple apps to automate repetitive business processes efficiently.</p>
                    <p class="card-text"><small>Tools: Zapier, Google Sheets, Slack</small></p>
                    <a href="#" class="btn portfolio-button btn-sm">View Project</a>
                </div>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="col-md-4">
            <div class="card project-card p-3">
                <div class="card-body">
                    <h5 class="card-title">Web3 Python Tool</h5>
                    <p class="card-text">Python application interacting with smart contracts to track token data.</p>
                    <p class="card-text"><small>Tools: Python, Web3.py, Ethereum</small></p>
                    <a href="#" class="btn portfolio-button btn-sm">View Project</a>
                </div>
            </div>
        </div>

        <!-- Project 4 -->
        <div class="col-md-4">
            <div class="card project-card p-3">
                <div class="card-body">
                    <h5 class="card-title">File Finder App</h5>
                    <p class="card-text">Python desktop app to quickly locate files across multiple directories.</p>
                    <p class="card-text"><small>Tools: Python, Tkinter</small></p>
                    <a href="#" class="btn portfolio-button btn-sm">View Project</a>
                </div>
            </div>
        </div>

        <!-- Project 5 -->
        <div class="col-md-4">
            <div class="card project-card p-3">
                <div class="card-body">
                    <h5 class="card-title">Pygame Educational Game</h5>
                    <p class="card-text">A Python game designed to teach programming concepts interactively.</p>
                    <p class="card-text"><small>Tools: Python, Pygame</small></p>
                    <a href="#" class="btn portfolio-button btn-sm">View Project</a>
                </div>
            </div>
        </div>

        <!-- Project 6 -->
        <div class="col-md-4">
            <div class="card project-card p-3">
                <div class="card-body">
                    <h5 class="card-title">Discord Ticketing System</h5>
                    <p class="card-text">Automates support ticket creation and resolution in Discord servers.</p>
                    <p class="card-text"><small>Tools: Discord API, Python, MongoDB</small></p>
                    <a href="#" class="btn portfolio-button btn-sm">View Project</a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
