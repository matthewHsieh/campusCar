@echo off
start "C:\Program Files (x86)\Google\Chrome\Application\chrome.exe" http://127.0.0.1/test.php


ftp -s:D:ftpAuto.txt
timeout /t 5

:while
if 1 equ 1 (
   ftp -s:D:ftpAuto.txt
   timeout /t 30
   goto :while
)
