#!/bin/bash

filename='/home/pi/Desktop/floor.txt'
exec < $filename
read line

if [ $line -eq 4 ]; then
	cd /home/pi/Desktop
	sh lidar.sh
else
	cd /home/pi/Desktop
	sh floor.sh
fi

