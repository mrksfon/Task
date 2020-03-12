# Task
TaskPHP

<h1> This Task was made using PHP</h1>

<h2> How to use it </h2>

<h3> 1. way </h3>

## Requirements

1. installed git
2. installed vagrant
3. installed virtualbox

## STEPS

<p> 1. run git clone https://github.com/swader/homestead_improved folderName from your command line </p>
<p> 2. run cd 'Name Folder'
<p> 3. run git clone https://github.com/mrksfon/Task.git from your command line
<p> 4. Setting up the hosts</p>
<p> Windows : navigate to C:/Windows/System32/drivers/etc/ and add line 192.168.10.10 homestead.app<br>
<p> Linux : navigate to /etc/hosts and add 192.168.10.10 homestead.app , comment remaining</p>
<p> 5. Navigate to Homestead.yaml in the cloned copy of Homestead repo and add <br>
folders:
    - map: C:/Users/Marenda/Documents/code/Task in my case, (location of your Task folder inside homestead repo could be <br>
    anywhere on your computer 
    to: /home/vagrant/Code/
sites:
    - map: homestead.app
      to: /home/vagrant/Code/public
</p>
<p> 6. run vagrant up </p>
<p> 7. connecting to the database</p>
<p> open Sqlyog(or any sql management system) to connect to database <br>
database credentials : host: 192.168.10.10 username: homestead password:secret</p>
<p>  import task.sql from Task folder inside cloned homestead repo</p>
<p> 8. Navigate to 192.168.10.10 on your Internet browser </p>


