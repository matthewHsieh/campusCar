#!/bin/bash
pid1_b=0
pid2_b=0
while true
do

filename='floor.txt'
exec < $filename
read line

case $line in
	4) 
		sh amcl.sh
		pid_1_b=$(ps -ef | grep amcl.sh | awk '{print $2}')
		rosrun rviz rviz
		pid_2_b=$(ps -ef | grep amcl.sh | awk '{print $2}')
	    ;;
	*) 
		if(pid_1_b -ne 0 |pid_2_b -ne 0); then
		pid_1=$(ps -ef | grep amcl.sh | awk '{print $2}')
		pid_2=$(ps -ef | grep rviz.rviz | awk '{print $2}')
		echo $pid_1
		echo $pid_2
		kill -INT -$pid_1
		kill -INT -$pid_2
		fi
	    ;;
	esac
done
