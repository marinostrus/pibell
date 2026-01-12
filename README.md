# Pibell

Pibell is a music school bell for raspberry pi. I currently have 4 schools here running this for their school bell. The first one is still up and running after more then 5 years. If you have a school with already a sound system, this can be a cheap and easy replacement for those way to pricey music school bells they sell :).

<img width="1903" height="620" alt="image" src="https://github.com/user-attachments/assets/5a056814-bb1a-45ee-83de-914e4686fa19" />

It just sets up cronjobs to play a random or specific mp3 on a specific time.

<img width="718" height="351" alt="image" src="https://github.com/user-attachments/assets/b8d3df95-a544-43e8-838b-5b457a0edcda" />


# Installation

> [!CAUTION]
> This is not intended to run on a public network! 

I use Raspian Lite as OS: https://www.raspberrypi.com/software/

Make sure to set your localisation options correctly so the time is always correct!

## LAMP stack & GIT

As always update your OS:
```
sudo apt-get update && sudo apt-get upgrade -y
```
Install the necesarry software:
```
sudo apt install apache2 php mariadb-server php-mysql git -y
```
Change ownership of webserver files:
```
sudo chown -R pi:www-data /var/www/html/
```
Open /etc/sudoers:
```
sudo visudo
```
This gives unrestricted access to your entire pi without ever asking for a password.
```
www-data ALL=NOPASSWD: ALL
```
## Database
```
sudo mysql -u root -p
```
```
CREATE DATABASE schoolbell;
```
```
USE schoolbell;
```
```
CREATE TABLE `schedule` (
  `idschedule` varchar(45) NOT NULL,
  `Day` int(11) DEFAULT NULL,
  `Hour` int(11) DEFAULT NULL,
  `Minutes` int(11) DEFAULT NULL,
  `song` varchar(45) DEFAULT NULL,
  `playtime` int(11) NOT NULL,
  PRIMARY KEY (`idschedule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

```
```
CREATE TABLE `songs` (
  `idsongs` varchar(45) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsongs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

```
```
CREATE USER 'schoolbell'@'localhost' IDENTIFIED BY 'password';
```
```
GRANT ALL PRIVILEGES ON schoolbell.* TO 'schoolbell'@'localhost';
```
```
FLUSH PRIVILEGES;
```
## Clone files

blabla

## Adjust php.ini for file upload

If you don't know where your php.ini is located:

<img width="228" height="476" alt="image" src="https://github.com/user-attachments/assets/3d980510-bda3-4e5d-a2f9-4df44ef57088" />

Check the path at this entry:

<img width="366" height="169" alt="image" src="https://github.com/user-attachments/assets/7721295b-d4af-491c-8912-898728211655" />

In your "php.ini" file, search for the file_uploads directive, and set it to On:

- upload_max_filesize = 20M
- post_max_size = 21M

Reboot after this!

# Manual
## Uploading a song

## Set a school bell signal

