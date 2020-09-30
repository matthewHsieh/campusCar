#!/bin/bash
sh scan_wlan.sh


gcc -o hello jugement_floor.c
./hello


sh roscore_lidar.sh
sh judgement.sh

