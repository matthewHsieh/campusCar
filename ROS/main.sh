#!bin/bash
#Program:
#    judge floor
#author:
#    matthew hsieh
#History:
#    2020/09/09
#PATH=/bin:/sbin:/usr/bin:/usr/sbin:/usr/local/bin:/usr/local/sbin:~/bin
#export PATH
#you can use relative path
#`prev.txt`
#infinite loop
prev="1"
cur="2"
rbt="3"
three="3"
four="4"
while true
do
    sudo iwlist wlan0 scan > wlan.txt
    gcc -fno-stack-protector judgement_floor.c
    ./a.out
    filenamePrev='prev.txt'
    filenameCur='floor.txt'
    filenameReboot='rb.txt'
    exec < $filenamePrev
    read LINE
    prev=$(echo "$LINE")
    exec < $filenameCur
    read LINE
    cur=$(echo "$LINE")
    exec < $filenameReboot
    read LINE
    rbt=$(echo "$LINE")
    if [ "$prev" != "$rbt" ]; then
        /bin/cp rb.txt prev.txt
	prev=$(echo "$rbt")
	if [ "$prev" = "$three"]; then
		sh amcl.sh
		sh rviz.sh
		echo "three"
	fi
#       run prev rviz
	if [ "$prev" = "$four"]; then
		sh amcl.sh
		sh rviz.sh
		echo "four"
	fi
#       run prev rviz
    fi
    if [ "$prev" =  "$cur" ]; then
        echo "Nothing change!!"
    else
        /bin/cp floor.txt rb.txt
#       run reboot or killAll
    fi

done
