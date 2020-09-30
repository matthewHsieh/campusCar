#!/bin/bash

filename='floor.txt'
exec < $filename
read line

ps -ef | grep lidar.sh | grep -v grep |

if [ $? -eq 0 ]; then
	if [ $line -eq 3 ]; then
		pid_1=$(ps -ef | grep lidar.sh | grep -v grep | awk '{print $2}')
		pid_2=$(ps -ef | grep rviz | grep -v grep | awk '{print $2}')
		kill -9 $pid_1
		kill -9 $pid_2
	else
		pid_3=$(ps -ef | grep floor.sh | grep -v grep | awk '{print $2}')
		kill -INT -$pid_3
	fi
fi

