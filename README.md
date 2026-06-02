# Errors and Validations - Level 1

This repository contains the solutions for the Level 1 exercises of the Errors and Validations module.

## Sprint 1 - Tasca 7

The main goal of this activity was to practice error handling and validations in PHP using `try-catch` blocks and exceptions.

## Exercise 1 - Division by Zero Validation

In this exercise, I created a simple program to validate a division operation.

The program receives two numbers and checks if the divisor is zero. If the second number is zero, an exception is thrown and an error message is displayed.

Concepts practiced:

* `try-catch`
* `throw new Exception()`
* Basic validations
* Division by zero control

## Exercise 2 - Form Validation

In this exercise, I created a basic form with two inputs:

* Username
* Email

The form sends the data using the `POST` method to a validation file.

The validation file checks if the submitted fields are empty. If the username or email is empty, an exception is thrown and an error message is displayed.

If the data is valid, the values are stored in a session and displayed on another page.

Concepts practiced:

* HTML forms
* `$_POST`
* `$_SESSION`
* `session_start()`
* `try-catch`
* `throw new Exception()`
* `include`

## Technologies

* PHP 8+
* HTML

## Installation and Execution

1. Clone the repository:

```bash
git clone <repository-url>
```

2. Navigate to the project folder:

```bash
cd project-folder
```

3. Start the PHP built-in server:

```bash
php -S localhost:8000 01-exercise/index.php

php -S localhost:8000 02-exercise/form.php
```

4. Open the project in your browser:

```bash
http://localhost:8000
```

## Learning Objectives

* Understand how `try-catch` works in PHP.
* Learn how to throw exceptions using `throw new Exception()`.
* Use `$_POST` to receive form data.
* Use `$_SESSION` to store validated data.
* Understand the importance of the `include` position in the execution flow.
