#!/bin/bash

#write out current crontab
crontab -l > mycron

#echo new cron into cron file
echo "$3 $2 * * $1 $4" >>  mycron
#install new cron file
crontab mycron
rm mycron
