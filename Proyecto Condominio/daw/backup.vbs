Set objShell = CreateObject("WScript.Shell")
Set wshShell = wscript.CreateObject("WScript.Shell")

objShell.run "cmd /k C:\wamp\bin\mysql\mysql5.5.24\bin\mysqldump -u root -p condominio > C:\BACKUP\backup_%date:~0,2%_%date:~3,2%_%date:~6,4%.sql"
wscript.sleep 1000
WshShell.Sendkeys "{Enter}"
wscript.sleep 1000
objShell.run "taskkill /f /im cmd.exe"