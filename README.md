# OSD Pages Installation Guide

## Overview
This guide will help you set up PHP pages on your server with Nginx, MySQL, and PHP.

## Requirements
- Nginx
- MySQL Database Server
- PHP-FPM
- PHP

1. **Installation Steps:**
    1. Extract the OSD_SOURCE_CODE folder and go to DATABASE folder and check it's path:
        Update the path of the DATABASE folder in the mysql_setup.sh file loacted in the install folder.
        cd /OSD_SOURCE_CODE/install
        vi mysql_setup.sh
        sudo mysql -u root -p kvm < /path/to/kvm.sql             ------- (Replace /path/to/kvm.sql with the actual path)
        save the file.

    2. Check the path of OSD_SOURCE_CODE folder:
        Update the path of the OSD_SOURCE_CODE folder in the php_setup.sh file loacted in the install folder.
        cd /OSD_SOURCE_CODE/install
        vi php_setup.sh 
        sudo cp -r /path/to/OSD_SOURCE_CODE/* /var/www/html/od        -----(change the path of OSD_SOURCE_CODE in this line)
        Save the file.

    3. Make the file executable:
        chmod +x setup.sh
        Run this script: While running it will ask for password enter system's password.
        ./setup.sh

2. **Access PHP Pages:**
   Open a web browser and navigate to your Board IP address and specify /od.
   (eg. 192.168.0.108/od/index.php)   where 192.168.0.108 is your board ip address.

3. **Login as Admin:**
   On the Login page enter login credentials as:
    - Username: Admin
    - Password: Admin@123
    - Now you will be able to access the OSD pages and navigate through different tabs and make changes accordingly.

4. **OSD pages will display on the browser**

5. **Make changes on OSD:**
    1. To access the video stream from encoder1 you can navigate through:
    Port Access-> Encoder1 -> Click on Connect button.

**Working modules on OSD:**
  
   1. Able to view the stream on OSD.
   2..Able Update Username and Enable or Disable user.
   3. Able to give Admin or User authority to users.

**Known Issues:**
   
   1. Delay in streaming.
   2. USB Mass Storage is not working.
   3. Kvm Upgrade, Dongle Upgrade not implemented.
   4. Encryption is not implemented.
   5. Virtual Media, Port Authority, Port Scan not implemented.
   6. USB mass storage, card reader not implemented.

**Troubleshooting:**
- Ensure that file permissions are set correctly on the PHP files and directories.
- Verify that Nginx, MySQL, and PHP-FPM are all running and configured correctly.
