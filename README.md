# Name&Age Web 
# Table of Contents

- Overview 
- Methods 
- HTML & PHP 
- CSS 
- Java Script 
- XAMPP 
- Features 
- Output 
- Live Demo

---

# Overview

This is Task Two under the Webs & Applications Programming track,
submitted to Smart Methods company for 2025 Summer Internship. This task
depicts a registration web page that collects username and age. It also
integrates a database to store the input data and incorporates dynamic
features with visually appealing color effects.

---

# Methods

First of all, the main environment is Visual Studio as this program
provides the required tools for the task. Four different programming
languages are utilized to build the page, including HTML, CSS, Java
Script, and PHP, Integrating with XAMPP to provide the database and
servers.

## HTML & PHP

HTML is used to build the structure of the page. It includes a form
with fields for “Name” and “Age” that the user must fill out before
clicking the submit button. The form is linked to PHP, which handles
the data by inserting it into a database. If data is submitted, the
page displays a table with five columns: ID, Name, Age, Status, and
Action, allowing users to view and interact with the stored records.

> **Note:** The code is attached as a separate file in the repository.

## CSS

The CSS is used to style the page by defining layout, sizes, fonts,
colors, and backgrounds. It centers the content both vertically and
horizontally using Flexbox, giving the page a clean and balanced
appearance. The form and table are styled with shadows, rounded
corners, and spacing to improve readability, while buttons and
messages are enhanced with color transitions and hover effects for a
more interactive user experience.

> **Note:** The CSS code is attached as a separate file in the repository.

## Java Script

JavaScript adds dynamic behavior to the page. For illustration, when a
user submits their information, the page updates the status without
reloading. It sends a request to the server, then smoothly updates the
status text with a fade effect. In case of success or failure, a
notification appears briefly with color-coded feedback before fading
out.

> **Note:** The Java Script code is attached as a separate file in the
repository.

## XAMPP

XAMPP provides the necessary environment to run the program, including
the required servers: MySQL for the database and Apache for hosting
the PHP files locally. The database includes a table with fields such
as ID, Name, Age, Status, and Action, each with its appropriate data
type. XAMPP also allows PHP code locally, such as the toggle switch
functionality, which updates a user’s status from 0 to 1.

> **Note:** The PHP codes are attached as separate files in the repository.

<p align="center">
  <img src="Registeration Page .jpg" alt="Registration Page" />
</p>
<p align="center"><i>Figure 1: Registration Page</i></p>

---

# Features

- Once the user clicks the "Submit" button, the entered data is saved
  in the database
- The page then displays all records from the database in a table
- The table includes a toggle switch for each user to update their
  status instantly

---

# Output

The following figure shows how the page results will be shown:

<p align="center">
  <img src="Output .jpg" alt="Page Output" />
</p>
<p align="center"><i>Figure 2: Page Output</i></p>

---

# Live Demo

The following GIF demonstrates the entire process from start to finish,
showcasing the user interface experience, page features, and the
resulting outputs.

<p align="center">
  <img src="Live Demo.gif" alt="Live Demo" />
</p>
<p align="center"><i>Live Demo</i></p>
