# CS438_Project_Group3
## Quiz App
By:
* Abdullah Sulaiman Alsudais	 (438012355)
* Abdulrahman Saad Alsakran	 (438011736)
* Ibrahim Faiz Babgi             (438011611)
* Abdulmalik AlNajidi            (437013642)

Supervisor: Dr. Abdulrahman alosaimy


# Table of content
- **[Overview](#overview)**
- **[User Interaction](#User-Interaction)**
- **[Web application testing](#Web-application-testing)**


## Overview
The quiz app is a quiz play that contains a collection of questions for a specific domain of interest. The quiz app has a specific number of questions in the game, where the quiz app will select randomly the questions from the open trivia database API. The player should have an account to allow him to play the quiz. At the beginning of the quiz game, the system displays one question at a time to the player with four choices, and the player should be select one of the options to go to the next question. At end of the quiz, the player score will be ranked in high score based on the player score that it is token in game. The player can see his ranking on the high score page and see the ranking of other players.



## Goals
* Retrieve questions from open trivia database API.
* Save high scores in Local Storage.
* Provide a progress bar, it should be incremented by the number of questions.
* Provide a spinning loader icon when the player presses the refresh.
* Provide Dynamic loading questions in HTML based on the number of questions in javascript.
* We will be ranking the player based on the score in the game.
* We will add the user authentication to the website.




## Interface and layout design
##### On the first page of our website, it is a signIn page where the player should enter his email and password if it has an account to enter the home page or should be creating a new account throw the register button as shown in the figure below.
<img src="https://github.com/AbdullahAlsudais1/CS438_Project_Group3/blob/main/images/loginPage.jpg" width="350" height="350" />

##### On this page, the player creates a new account by providing his first name, last name, email, and password as shown in the figure below, then the system will create an account in the database.
<img src="https://github.com/AbdullahAlsudais1/CS438_Project_Group3/blob/main/images/registerPage.jpg" width="350" height="350" />

##### After the player is logged in, the home page will appear with the player profile, the option to start the game, and the option of top scores in the game as shown in the figure below. The Logout button will log the player out from the website and take the user to the login page.
<img src="https://github.com/AbdullahAlsudais1/CS438_Project_Group3/blob/main/images/homepage.jpg" width="650" height="450" />

##### On the quiz page, will appear the questions and  four choices that the player should select one of them to go to the next question and finish the game. On top of the page, we have a progress bar it determined the number of questions that remain and also the score that player taken from the questions until now.
<img src="https://github.com/AbdullahAlsudais1/CS438_Project_Group3/blob/main/images/quizPage.jpg" width="650" height="450" />

##### On the high score page, we see the ranking of players in order from highest to lowest as shown in the figure below.
<img src="https://github.com/AbdullahAlsudais1/CS438_Project_Group3/blob/main/images/scorePage.jpg" width="350" height="350" />




## Underlying technologies
The underlying technologies that we are used to designing our system are:
* **PHP**: We used PHP for connecting and retrieving data from the database. PHP is a server-side scripting language that is used to develop dynamic and interactive websites.
* **JavaScript**: We used Javascript to enhance the functionality and appearance of a web page. Javascript is a client-side language that helps us to build dynamic web pages such as response to the event, user input.
* **HTML**: It is used to specify the content and structure of web pages.
* **CSS**: It is used to specify the presentation and styling the element on web pages.
* **JSON**: It is a simple way to receive data from a web server. Also to represent the javascript object as a string and for passing data between the client and the server.
* **Ajax**: it is used in javascript to request information from the server.
In Ajax, the web applications can send and retrieve data from a server asynchronously without the need to reload the entire page.
* **phpMyAdmin**: Database management is used to store data.
* **XAMPP**: It is a web server that allows us to test our work on localhost. It consists of the Apache Server, MySql, and PHP where XAMPP is considered the most popular PHP development environment to run PHP code.




## User Interaction



## Web application testing

