# Github-Assignment

## Overview
A simple PHP form application that collects 20 questions worth of personal information and stores the responses in a JSON file.

## Project Structure
- `form.php` - Main form with 20 questions (last name, first name, DOB, hobbies, etc.)
- `index.php` - Redirects to form.php
- `jack.php` - Empty placeholder file
- `db.json` - JSON file storage for form submissions

## Running the Application
The application uses PHP's built-in development server:
```bash
php -S 0.0.0.0:5000
```

Access the form at the root URL or `/form.php`.

## Data Storage
Form submissions are stored in `db.json` as a JSON array. Each submission includes all 20 form fields plus a timestamp.

## Recent Changes
- 2026-01-20: Initial import and setup for Replit environment
- Added index.php redirect to form.php
- Configured PHP 8.4 with built-in web server on port 5000
