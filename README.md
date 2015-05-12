# Hallabol Site with Predictor implementaion

The source code for the site of Hallabol'15 and the data generated during the events. This source code is made openly available so that people can use it in their personal projects.

This site is an efficient implementation of the required features which has served hundreds of users without crashing for a single instance. The site has viewed more than 3000 users in a single day and has handled more than 25000 visitors in a period of 10 days.

> The source code for the site of hallabol has become so messy over the period of 3 years that it is very difficult for a new developer to come and edit the source code for himself and add the new required functionalities or make changes to the existing one. This project is the result of that, to create different elements working independantly so that it can be extended easily in future.

The following are the advantages of the current implementation of the site over the previous one:
* A single table for the predictor and can be extended to any number of games without playing with the design of the tables
* 

This text you see here is *actually* written in Markdown! To get a feel for Markdown's syntax, type some text into the left window and watch the results in the right.

### Version
1.0.0

### Tech

This site uses a number of open source projects to work properly:

* [AngularJS] - HTML enhanced for web apps!
* [Twitter Bootstrap] - great UI boilerplate for modern web apps
* [PHP] - scripting language for the backend
* [MySQL] - the database engine
* [jQuery] - duh
* [Sublime Text] - the most awesome text editor

### Installation

Installation is really quick and simple:
* Upload all the files in the root of the project to the public html folder
* Make sure PHP and MySQL are pre-installed on your server
* Setup database, no need to create tables
* Change the keys in the file keyset.php in the root of the project according to your setup of the database
* Run setup.php, through browser. Now all the required tables are created
* This application uses mailing as a medium for confirmation of accounts, make sure you change the required headers in the mail_confirmation.php file
* This is it! Your site is up and running :)

### Todo's

 - Person should have himself as the captain of the team
 - Real time checking of the availibility of the player for the given game
 - Tagging the player for the particular team, so that he can see in which teams he has registered
 - Personalized schedule
 - Server side validation of the player registration
 - Mobile integration

License
----

MIT


**Free Software, Hell Yeah!**

[Twitter Bootstrap]:http://twitter.github.com/bootstrap/
[jQuery]:http://jquery.com
[AngularJS]:http://angularjs.org
[PHP]:http://php.net/
[MySQL]:https://www.mysql.com/
[Sublime Text]:http://www.sublimetext.com/
