# PHP User Management System

This project is a user management system developed with PHP and MySQL. It includes functionalities such as user registration, login, updating profile information, and uploading profile images.

## Features

- **User Registration**: Users can create a new account by providing an email and password. The password is hashed using PHP's built-in password hashing.
- **User Login**: Users can log in using their email and password.
- **Profile Management**: Users can update their personal information, such as name, bio, and phone number.
- **Image Upload**: Users can upload their profile image. Images are restricted to certain formats (JPEG, PNG) and size limits.

## Installation

1. Clone this repository to your local machine.
2. Create a MySQL database named `formulario_hebert`.
3. Import the database schema (if provided) or manually create the necessary tables.
4. Update the database connection details in the PHP files as needed.
5. Run the project using a PHP server like Apache, making sure the server has necessary permissions for the image upload functionality.

## Usage

1. **Registration**: Navigate to the registration page and fill in the email and password to create an account.
2. **Login**: Once registered, users can log in using their email and password.
3. **Update Profile**: Logged-in users can update their profile details.
4. **Upload Image**: Users can also upload a profile image, which is saved in the `uploads/` directory.

## Dependencies

- PHP 7 or later
- MySQL
- GD library for image processing (if applicable)

## Known Issues

- The code may require specific permissions to write images to the `uploads/` directory. Make sure the directory exists and is writable.

## Contributing

Feel free to fork this repository, make changes, and open pull requests. Any contributions are welcome!

## License

This project is open-source and available under the MIT License.

---

Feel free to modify or add to this README as needed! Let me know if there's anything else you'd like assistance with.
