# GroupChat
The objective is to design and develop a application for Group Chat where more than one user can chat with each other in real time.
The primary use of this application is to share information via text with a group of other users.
Registered users normally provide some sort of credentials to the system in order to prove their identity: this is known as logging in.
Allow any user to register simply by selecting a register or sign up function and providing these credentials for the first time.
User registration and login enables a system to personalize itself.

This Project allows user to Register into the system and allows them to Enter into the Group Chat Conversation and chat with the other Colleagues present.
It provides instant message display and reply feature.

**Software requirements**
•	XAMPP Server
•	Windows 7
•	Browser
•	Apache Server 
•	PHP MyAdmin

**Hardware requirements**
•	 RAM - 2GB
•	Hard Disk - 5GB
•	Processor - INTEL PENTIUM 4 

##Getting started

Download or clone the project from github
```
$ git clone https://github.com/ShamsAwais/GroupChat.git
```
**Create Project Environment**
Download XAMPP Server
In the XAMPP Control panel Start Apache and PHPMyAdmin
Open the PHPMyAdmin Admin
Select _SQL_ option from menu bar and paste the following code to create _Users_ Table
```
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
**OR**
Select _Import_ option from menu bar and Select the ```createTable.sql``` file

Next step is 
Paste the Project folder GroupChat in the ``` E:\xampp\htdocs``` i.e in the htdoc of xampp folder.

##Running Project
Open the Admin of Apache in XAMPP control panel.
edit the URL from ``` http://localhost/dashboard/ ``` to ``` http://localhost/GroupChat/ ```

Further follow the General Registration and login process.
After Successful login Chat Page will Appear.

## ADD other members to the chat.
All the Members must be connected to a common Network WIFI or LAN
Then open cmd in Host CMD and type ``` >  ipconfig```
and copy the IPv4 address example ``` 192.168.43.1 ```
In the other member's browser who are connected to same Network enter the copied ```IP/GroupChat``` in URL section. 
Example  ```192.168.43.1/GroupChat/```

## Support

If you like the work I do, show your appreciation by 'FORK', 'STAR' and 'SHARE'.

Open to all types of collaboration. Feel free to raise a PR.
