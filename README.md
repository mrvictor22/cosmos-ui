
# Cosmos UI - README

## Project Overview

This repository `cosmos-ui` serves as the frontend implementation for the Cosmos application using **Vue.js** for building the UI components and **Symfony** for serving backend RESTful API requests. The project also integrates **Google OAuth** for user authentication and demonstrates a responsive user interface built with **Material Design** principles.

### Technologies Used:
- **Vue.js 3**: For building the user interface components.
- **Symfony 7**: Backend framework for exposing REST APIs.
- **Chart.js**: To render dynamic charts based on the data fetched from the backend.
- **Vue-Good-Table**: For displaying tabular data from the backend.
- **Google OAuth**: For authentication using Google services.

## Installation Instructions

### Prerequisites
- PHP 8.1 or higher
- Node.js and npm
- Composer
- XAMPP (Optional, if you're using it for the backend server)

### Step 1: Clone the Repository
```bash
git clone https://github.com/your-repository/cosmos-ui.git
cd cosmos-ui
```

### Step 2: Install Backend Dependencies
```bash
composer install
```

### Step 3: Install Frontend Dependencies
```bash
npm install
```

### Step 4: Setup Environment Variables
Create a `.env.local` file and configure the following:

```bash
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name"
```

### Step 5: Start Symfony Server
```bash
symfony server:start
```

### Step 6: Build Vue Assets
```bash
npm run dev
```

## Project Structure

- **/assets**: Vue components and JS files.
- **/src/Controller**: Symfony API controllers.
- **/templates**: Twig templates used in the app.
- **/public**: Public assets and build output.

## API Endpoints

Summary Data API

The API provides summary data from the backend for rendering charts and tables.

**Endpoint:** `/api/summary`
**Method:** GET

Sample Response:
```json
[
    { "id": 1, "total_users": 50, "extraction_date": "2024-09-25" },
    { "id": 2, "total_users": 30, "extraction_date": "2024-09-24" }
]
```

## Features

### User Authentication

- **Google OAuth** integration for authentication using Google services.
- **Google Authenticator** for two-factor authentication (OTP generation).

### Summary Data Table

- Displays summary data from the backend using `vue-good-table`.
- Users can filter data by ID, total users, or extraction date.

### Charts

- Render dynamic charts using **Chart.js** based on the summary data.

## Usage Instructions

1. Navigate to `/login` to authenticate using Google OAuth.
2. View the summary data displayed in both table and chart formats.
3. Filter data using the search bar on the table.

## Known Issues

- Google OAuth errors when running the application in localhost due to missing origin configuration. Ensure your **Google Client ID** is set correctly in the `.env.local` file and registered in the Google Developer Console.

## License

This project is licensed under the MIT License.
```

