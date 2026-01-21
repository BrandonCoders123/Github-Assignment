<?php
$theme = [
    'site_title' => 'Xbox Gaming Hub',
    'primary_color' => '#107c10',
    'primary_hover' => '#0e6e0e',
    'background_color' => '#0e0e0e',
    'card_background' => '#1a1a1a',
    'text_color' => '#ffffff',
    'text_muted' => '#cccccc',
    'font_family' => '"Segoe UI", Arial, sans-serif',
    'border_radius' => '4px',
    'spacing_small' => '15px',
    'spacing_medium' => '20px',
    'spacing_large' => '40px',
    'border_color' => '#222'
];

function getThemeStyles($theme) {
    return "
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: {$theme['font_family']};
        }

        body {
            background-color: {$theme['background_color']};
            color: {$theme['text_color']};
        }

        .hero {
            background: linear-gradient(
                rgba(0,0,0,0.6),
                rgba(0,0,0,0.9)
            ), url('https://via.placeholder.com/1600x700') center / cover no-repeat;
            padding: 80px 60px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: {$theme['spacing_small']};
        }

        .hero p {
            max-width: 600px;
            font-size: 1.1rem;
            margin-bottom: 25px;
            color: {$theme['text_muted']};
        }

        .hero button, .btn-primary {
            background-color: {$theme['primary_color']};
            border: none;
            color: white;
            padding: 14px 28px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: {$theme['border_radius']};
        }

        .hero button:hover, .btn-primary:hover {
            background-color: {$theme['primary_hover']};
        }

        .icon-bar {
            display: flex;
            justify-content: space-around;
            padding: {$theme['spacing_medium']} {$theme['spacing_large']};
            background-color: #111;
            border-top: 1px solid {$theme['border_color']};
            border-bottom: 1px solid {$theme['border_color']};
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
            color: {$theme['primary_color']};
        }

        .content {
            padding: {$theme['spacing_large']} 60px;
        }

        .content h2 {
            margin-bottom: {$theme['spacing_medium']};
            font-size: 1.8rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: {$theme['spacing_medium']};
        }

        .card {
            background-color: {$theme['card_background']};
            border-radius: {$theme['border_radius']};
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
            padding: {$theme['spacing_small']};
        }

        .card-body h3 {
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        .card-body p {
            font-size: 0.9rem;
            color: #bbb;
        }

        .form-container {
            max-width: 600px;
            margin: {$theme['spacing_large']} auto;
            padding: {$theme['spacing_large']};
            background-color: {$theme['card_background']};
            border-radius: {$theme['border_radius']};
        }

        .form-container h2 {
            margin-bottom: {$theme['spacing_medium']};
            color: {$theme['primary_color']};
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            color: {$theme['text_muted']};
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: {$theme['spacing_small']};
            border: 1px solid {$theme['border_color']};
            border-radius: {$theme['border_radius']};
            background-color: {$theme['background_color']};
            color: {$theme['text_color']};
        }

        .form-container input:focus {
            outline: none;
            border-color: {$theme['primary_color']};
        }

        .success-message {
            background-color: {$theme['primary_color']};
            color: white;
            padding: {$theme['spacing_small']};
            border-radius: {$theme['border_radius']};
            margin-bottom: {$theme['spacing_medium']};
        }

        a {
            color: {$theme['primary_color']};
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    ";
}
?>
