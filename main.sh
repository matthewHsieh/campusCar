#!bin/bash
#Program:
#    judge floor
#author:
#    matthew hsieh
#History:
#    2020/09/09
PATH=/bin:/sbin:/usr/bin:/usr/sbin:/usr/local/bin:/usr/local/sbin:~/bin
export PATH
#you can use relative path

#infinite loop
while true
do
	filenamePrev='prev.txt'
	filenameCur='floor.txt'
	filenameReboot='rb.txt'
	exec < $filenamePrev
	read line
	prev=$($line)
	exec < $filenameCur
	read line
	cur=$($line)
	exec < $filenameReboot
	read line
	rbt=$($line)
    if [ "$prev" != "$rbt" ] ; then
	    prev=$($rbt)
#		run prev rviz
	fi
	if [ "$prev" = "$cur"] ; then
		echo "Nothing change!!"
	else
		echo "$cur" >> rb.txt
#		run reboot or killAll
	fi
done