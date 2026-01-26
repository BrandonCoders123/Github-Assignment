<?php
/**
 * Xbox Dark Theme Configuration
 */

$theme = [
    'site_title' => 'Xbox Profile',
    'primary_color' => '#107c10',
    'background_color' => '#0e0e0e',
    'card_background' => '#1a1a1a',
    'text_color' => '#ffffff',
    'text_muted' => '#aaaaaa',
    'border_color' => '#333333',
    'border_radius' => '4px',
    'spacing_small' => '10px',
    'spacing_medium' => '20px',
    'spacing_large' => '40px'
];

function getThemeStyles($theme) {
    return '
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            background-color: ' . $theme['background_color'] . ';
            color: ' . $theme['text_color'] . ';
        }

        a {
            color: ' . $theme['primary_color'] . ';
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
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
            color: ' . $theme['text_muted'] . ';
            font-size: 0.9rem;
            text-decoration: none;
        }

        .icon:hover {
            color: ' . $theme['text_color'] . ';
            text-decoration: none;
        }

        .icon span {
            display: block;
            font-size: 1.5rem;
            margin-bottom: 6px;
            color: ' . $theme['primary_color'] . ';
        }

        /* ===== FORM CONTAINER ===== */
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: ' . $theme['spacing_large'] . ';
        }

        .form-container h2 {
            color: ' . $theme['primary_color'] . ';
            margin-bottom: ' . $theme['spacing_medium'] . ';
            text-align: center;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            color: ' . $theme['text_muted'] . ';
            font-size: 0.9rem;
        }

        .form-container input[type="text"],
        .form-container input[type="date"] {
            width: 100%;
            padding: 12px;
            margin-bottom: ' . $theme['spacing_small'] . ';
            background-color: ' . $theme['card_background'] . ';
            border: 1px solid ' . $theme['border_color'] . ';
            border-radius: ' . $theme['border_radius'] . ';
            color: ' . $theme['text_color'] . ';
            font-size: 1rem;
        }

        .form-container input:focus {
            outline: none;
            border-color: ' . $theme['primary_color'] . ';
        }

        .btn-primary {
            width: 100%;
            background-color: ' . $theme['primary_color'] . ';
            border: none;
            color: white;
            padding: 14px 28px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: ' . $theme['border_radius'] . ';
            margin-top: ' . $theme['spacing_medium'] . ';
        }

        .btn-primary:hover {
            background-color: #0e6e0e;
        }

        .success-message {
            background-color: ' . $theme['primary_color'] . ';
            color: white;
            padding: ' . $theme['spacing_small'] . ';
            border-radius: ' . $theme['border_radius'] . ';
            margin-bottom: ' . $theme['spacing_medium'] . ';
            text-align: center;
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
            background-color: ' . $theme['primary_color'] . ';
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
            background-color: ' . $theme['card_background'] . ';
            border-radius: ' . $theme['border_radius'] . ';
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
    ';
}
