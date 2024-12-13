# Travel Booking Website

A dynamic and user-friendly travel booking website built using **PHP**, **CSS**, and **JavaScript**. The website allows users to search, book, and manage travel tickets conveniently.

---

## Table of Contents

- [Overview](#overview)
- [Technologies Used](#technologies-used)
- [Features](#features)
- [Setup and Installation](#setup-and-installation)
- [How to Use](#how-to-use)
- [Project Structure](#project-structure)
- [Future Scope](#future-scope)

---

## Overview

This project demonstrates a complete travel booking system. It is hosted locally using **XAMPP**, with files placed in the `htdocs` directory. Users can search for travel options, view available tickets, and book their trips efficiently.

---

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Local Server:** XAMPP

---

## Features

- Search for travel options by destination, date, and mode of transport.
- User registration and login functionality.
- Secure ticket booking with real-time availability.
- Ticket management: View, cancel, or modify bookings.
- Responsive design for mobile and desktop.
- Dynamic pricing and promotional offers.

---

## Setup and Installation

Follow these steps to set up the project locally:

1. **Download and Install XAMPP**
   - Download XAMPP from the [official website](https://www.apachefriends.org/index.html).
   - Install XAMPP and start the **Apache** and **MySQL** modules.

2. **Clone the Repository**
   ```bash
  https://github.com/Nidhi-dwivedi/php-travel-Booking-website.git
   ```

3. **Place Files in htdocs**
   - Copy the project folder to the `htdocs` directory of your XAMPP installation (e.g., `C:\xampp\htdocs\travel-booking-website`).

4. **Set Up the Database**
   - Open `phpMyAdmin` from the XAMPP control panel.
   - Create a new database (e.g., `travel_booking`).
   - Import the database schema:
     1. Click on the database name.
     2. Go to the **Import** tab.
     3. Select the `database.sql` file from the project folder and click **Go**.

5. **Configure Database Connection**
   - Open the `config.php` file in the project folder.
   - Update the database credentials as per your setup:
     ```php
     <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "travel_booking";
     ?>
     ```

6. **Start the Project**
   - Open a browser and navigate to `http://localhost/travel-booking-website`.

---

## How to Use

1. **Home Page**
   - Search for travel options by entering destination, date, and other details.

2. **User Registration & Login**
   - Register a new account or log in with existing credentials.

3. **Booking Tickets**
   - Select travel options and proceed to book tickets securely.

4. **Manage Bookings**
   - View, cancel, or modify your travel bookings.

---

## Project Structure

```
travel-booking-website/
├── assets/
│   ├── css/            # CSS files for styling
│   ├── js/             # JavaScript files
│   └── images/         # Images used in the project
├── config.php          # Database configuration
├── index.php           # Homepage
├── register.php        # User registration page
├── login.php           # User login page
├── book.php            # Booking page
├── manage.php          # Manage bookings
└── database.sql        # Database schema
```

---

## Future Scope

- Integration with third-party travel APIs for real-time ticket availability and pricing.
- Mobile app version for better accessibility.
- AI-powered travel recommendations and dynamic pricing.
- Secure payment gateway integration.
- Multi-language and multi-currency support.

---

## Contributing

Feel free to submit issues or pull requests to improve this project. Contributions are always welcome!

---

