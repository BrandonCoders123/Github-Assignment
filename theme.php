<?php
// Xbox-style theme layout
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Xbox Theme</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            background-color: #0e0e0e;
            color: #ffffff;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            background: linear-gradient(
                rgba(0,0,0,0.6),
                rgba(0,0,0,0.9)
            ), url("https://via.placeholder.com/1600x700") center / cover no-repeat;
            padding: 80px 60px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .hero p {
            max-width: 600px;
            font-size: 1.1rem;
            margin-bottom: 25px;
            color: #cccccc;
        }

        .hero button {
            background-color: #107c10;
            border: none;
            color: white;
            padding: 14px 28px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 3px;
        }

        .hero button:hover {
            background-color: #0e6e0e;
        }

        /* ===== ICON NAV BAR ===== */
        .icon-bar {
            display: flex;
            justify-content: space-around;
            padding: 20px 40px;
            background-color: #111;
            border-top: 1px solid #222;
            border-bottom: 1px solid #222;
        }

        .icon {
            text-align: center;
            color: #aaa;
            font-size: 0.9rem;
        }

        .icon span {
            display: block;
            font-size: 1.5rem;
            margin-bottom: 6px;
            color: #107c10;
        }

        /* ===== CONTENT GRID ===== */
        .content {
            padding: 40px 60px;
        }

        .content h2 {
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #1a1a1a;
            border-radius: 4px;
            overflow: hidden;
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .card img {
            width: 100%;
            display: block;
        }

        .card-body {
            padding: 15px;
        }

        .card-body h3 {
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        .card-body p {
            font-size: 0.9rem;
            color: #bbb;
        }
    </style>
</head>

<body>

    <!-- HERO -->
    <section class="hero">
        <h1>Discover Your Next Favorite Game</h1>
        <p>
            Experience the best in gaming with Xbox. Play the latest titles,
            explore new worlds, and connect with friends.
        </p>
        <button>Join Game Pass</button>
    </section>

    <!-- ICON NAV -->
    <nav class="icon-bar">
        <div class="icon"><span>🎮</span>Games</div>
        <div class="icon"><span>🕹️</span>Game Pass</div>
        <div class="icon"><span>🏆</span>Achievements</div>
        <div class="icon"><span>👥</span>Community</div>
        <div class="icon"><span>⚙️</span>Settings</div>
    </nav>

    <!-- CONTENT -->
    <section class="content">
        <h2>Featured Content</h2>

        <div class="grid">
            <div class="card">
                <img src="https://via.placeholder.com/400x225">
                <div class="card-body">
                    <h3>New Releases</h3>
                    <p>Explore the newest games available now.</p>
                </div>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/400x225">
                <div class="card-body">
                    <h3>Top Rated</h3>
                    <p>Play the highest rated titles on Xbox.</p>
                </div>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/400x225">
                <div class="card-body">
                    <h3>Coming Soon</h3>
                    <p>Get ready for upcoming releases.</p>
                </div>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/400x225">
                <div class="card-body">
                    <h3>Game Pass Picks</h3>
                    <p>Hand-picked games included with Game Pass.</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
