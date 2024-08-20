# Focal-X-Task-2

# Simple Blog Management System

##   

This is a simple blog management system built using PHP and MySQL. It allows users to create, read, update, and delete
blog posts.

## Setup Instructions

1. **Database Setup:**
    - Import the provided `blog_db.sql` file into your MySQL server to create the `blog_db` database and the `posts`
      table.

2. **PHP Code Setup:**
    - Split PHP files into folders to coordinate work.
    - Models folder: Contains required classes such as Post and Database.
    - Views folder: Contains interfaces that are displayed to the user.
    - Controller folder: Contains handling of CRUD operations within PHP.
    - Make sure that the PHP environment is configured correctly and connected to the MySQL database.

3. **User Guide:**

    - Open `index .php` in the browser to view all posts.
    - Use the buttons within the main interface to create, view, edit or delete posts.

## Additional Notes
- Basic validation is implemented to ensure that the title and content are not empty.
- The system uses prepared statements to prevent SQL injection. Through the following steps:
  1- Prepare the query: Write a SQL query using placeholders instead of actual values. These placeholders are tags such
  as :paramName.
  2- Define the query: The pre-prepared query is sent to the database for analysis and storage without execution. At
  this stage, the database processes the query and stores only its structure.
  3- Pass values: After the query is ready, the actual values that will be used in the query are sent separately.

