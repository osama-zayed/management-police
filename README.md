# Police Management System

![Police Management System](https://osamazayed.com/images/portfolio-9.webp)

## Overview

The Police Management System is an integrated platform designed to link all police departments in the capital, enhancing efficiency and communication.

### Key Features

- **Internal Network**: 
  - Connects all police departments, facilitating data exchange and incident reporting.

- **Multiple Interfaces**: 
  - Includes report entry, search, audit, and approval interfaces to improve police work efficiency.

- **Citizen Engagement Section**: 
  - Allows citizens to submit complaints or reports, fostering better communication between the police and the community.

- **Statistics and Reports**: 
  - Provides a dedicated section to display approved reports and issues, aiding informed decision-making.

## Requirements

- **PHP Version**: 
  - PHP >= 8.2

## Installation

To install the Police Management System project, follow these steps:

1. Clone the project repository from GitHub:
   ```bash
   git clone https://github.com/osama-zayed/Police-Management.git
   ```

2. Navigate to the downloaded project folder:
   ```bash
   cd Police-Management
   ```

3. Run the database migration:
   ```bash
   php artisan migrate
   ```

4. Seed the default data into the database:
   ```bash
   php artisan db:seed
   ```

5. Start the local development server:
   ```bash
   php artisan serve
   ```

After starting the server, you can access the project through your browser at `http://localhost:8000`.

### Login Information

- **Username**: admin
- **Password**: 123123123
