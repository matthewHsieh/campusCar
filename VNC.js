var destination=(WScript.Arguments(0))
 var search='vnc://'
 //Modify the path to VNC Viewer!
 var vncexe='D:\\Apps\\VNC\\vncviewer.exe'
 //WScript.Echo(destination)
 destination=destination.replace(search, '')
 destination=destination.replace('/', '')
 var ws = new ActiveXObject("WScript.Shell")
 //WScript.Echo(vncexe + " " + destination)
 ws.Exec(vncexe + " " + destination)