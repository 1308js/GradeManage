# GradeManage
Web portal for managing grades and registration for students and teachers of IIT Mandi( Not in production)


#####################################Instruction for installing the game#######################################

Step 1. Install xampp server on your machine 
Step 2. Copy folder cyber into the root directory of your xampp server i.e. for windows C:\\xampp\htdocs\
	for linux \opt\lampp\htdocs
	or in some linux \var\www\html\
Step 3.( In case of Linux)
	give folder the root permission by doing chmod 777 -R /opt/lampp/htdocs/cyber/
	(In case of windows )
	No such thing required
Step 4. Install the database in the xampp server
	start xampp server with apache and mysq service
	Go to browser open localhost/phpmyadmin
	Create a database named "project" or any name of your choice
	Open the Sql prompt on the same page for "project" database
	paste the content of database file final.sql provided in database folder outside of this directory
	Enter Go.
Step 5. Change the credentials in configuration file
	open final/connect.php
	change the following according to your setting of the server and database(If you have changed them)
	$db_host		= 'localhost';
	$db_user		= 'root';
	$db_pass		= '';
	$db_database	= 'project'; 
Step 7. Now you are ready with the deployment
Step 8. There is no custom way defined in this web app to register user.
For this purpose you need to go in the database user table and create one for yourself or you can see existing users as well there and use them.

#### For any problem and query contact 1308js@gmail.com.

	
	


