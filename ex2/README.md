In this exercise you will create and instantiate objects.  Put all of your files in your Exercise 2 folder.  Once you have completed the assignment, deploy to your Corsair Server and save to GitHub.  Provide the links to both Corsair and GitHub in the comment box of the Canvas ‘Turn In Assignment’ screen. Zip your source files and upload.

NOTE:  Your classes should contain ‘.class’ in the filename and placed in a separate classes folder.  Although this is not a PHP requirement it not only helps distinguish the types of files while you are browsing directories, it will help keep you organized later in this class.

All Classes MUST use the four magic methods from the lecture:

__construct
__set
__get
__destruct
Step One:  Create a User Class

You will create a class for Users of a website.  This class should have the following properties:

user_id
user_type
first_name
last_name
email_address
user_level
All properties should be of the type ‘Protected’

The constructor method for the User class should accept one parameter:  user_level

The constructor method should set the user_level variable

<h3>Step Two:  Create Subclasses</h3>

Now create two more classes, each in their own files, which are subclasses of the User class.  A registered user is of user_type 1.  An admin user is of user type 2.

The constructor method of the classes should accept two parameters:  user_level and user_id.

Set the default value of each class in the constructor method.

Both classes should call their parent’s constructor method.

Both classes should set the user id in the constructor method.

<h3>Step Three:  Instantiate the Objects</h3>

Create an index.php file at the root of your Exercise 2 folder.

Instantiate a single instance of both the RegisteredUser class and the Admin class.  Remember that these classes take two parameters (user_level, user_id) User Level for the registered user should be ‘Regular User’ while user level for the admin user should be ‘Administrator’.

Set the first_name, last_name, and email address properties of these objects

Echo out the following properties to the screen for each object:

User Level:
User ID:
User Type:
First Name:
Last Name:
Email Address:
 

This exercise is worth 15 points and will be graded on attention to detail and proper execution of the scripts.

An example of the finished out put may be viewed at http://corsair.cs.iupui.edu:19031/CIT313/SP2015/ex2/ (Links to an external site.)Links to an external site. 
 (Links to an external site.)Links to an external site.

The instructors GitHub will be made available after the assignment closes.

