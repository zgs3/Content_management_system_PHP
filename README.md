# Content Management System PHP

* Simple content management system which I've built as a Sprint 8 task while studying at Baltic Institute of Technology.

## Getting Started

* To be able to use the app, you must first have "Apache" server application like "XAMPP" or similar web server app. You can find more info about "XAMPP" [here](https://www.apachefriends.org/).

* Also a tool to manage MySQL database files like "MySQL Workbench" is needed. You can find more info about it [here](https://www.mysql.com/products/workbench/).

* You will also need "Composer" installed. More info [here](https://getcomposer.org/download/).

If you are using XAMPP and MySQL Workbench:

1. Clone this repository to .../xammp/htdocs/ directory.

2. Open project directory with your prefered code editor like VS code.

3. Open the terminal (Git Bash recomended).

4. Run the following command in the terminal using the path to "composer.phar" location: 

php ../composer.phar install

5. Reload the project window (CTRL + F if using VS Code).

6. Open MySQL Workbench, create a new connection and open it. 

Note that in this project default connection username "root" and no password is used. If you intend to use other connection credentials, you must change the username and password in "sql_connection.php" file accordingly.

![myslq1](https://user-images.githubusercontent.com/97868964/174650299-175d5750-3320-4959-884b-852b3b081c61.png)

7. 1. Click "Server".

7. 2. Click "Data Import".

![myslq2](https://user-images.githubusercontent.com/97868964/174650486-1d827643-ce70-42a9-ae1b-0dfde3400082.png)

7. 3. Choose "Import from Self-Contained File."

7. 4. Provide the "mysql_db.sql" file directory (Located in the "db" folder).

7. 5. Click "new" and type "mydb" schema name.

Note that schema name must be "mydb", because this name is written in the code, so the app would not work if the name was different.

7. 6. Click "Start Import".

8. Start "Apache" and "MySQL" servers in "XAMMP".

9. Open your prefered browser and go to localhost/cms_php/ 

Note that the app name in the URL must be the same as the directory name where "index.php" file is located. If directory name is changed, change URL accordingly. 


## Description

* The app is connecting to MySQL database and fetching data from "Pages" tables. 

![sss1](https://user-images.githubusercontent.com/97868964/177287102-59fd1a44-ee22-4096-9516-f0b6af524300.png)

* Main app page is made for every simple user which is rendering page content written in HTML (or plain text) from MySQL database. Content is displayed and styled as written in the database HTML inline styling.

* There is also a separate page for admin. Admin is able to create new pages, edit and delete existing pages. To reach this page specific "localhost/cms_php/admin" path must be used in the browser and loged in using these credentials:

  User name: Admin

  Password: 1234 

Admin page:
![sss2](https://user-images.githubusercontent.com/97868964/177287242-5b664c59-f7d7-42df-b5ca-eee035d9cc36.png)

Edit page:
![sss3](https://user-images.githubusercontent.com/97868964/177287598-53f7c346-0d2d-4f00-8b5c-787a8b58c490.png)


## Techniques used

Coded in PHP.

Styled in raw CSS.


## Authors

Project made by me - Žygimantas Kairaitis. 

Find me on [LinkedIn](https://www.linkedin.com/in/%C5%BEygimantas-kairaitis-018a86193/).
