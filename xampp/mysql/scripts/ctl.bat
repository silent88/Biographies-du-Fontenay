@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop


"C:\home\FontenayPayload\xampp\mysql\bin\mysqld" --defaults-file="C:\home\FontenayPayload\xampp\mysql\bin\my.ini" --standalone --console
if errorlevel 1 goto error
goto finish

:stop
"C:\home\FontenayPayload\xampp\apache\bin\pv" -f -k mysqld.exe -q

if not exist "C:\home\FontenayPayload\xampp\mysql\data\%computername%.pid" goto finish
echo Delete %computername%.pid ...
del "C:\home\FontenayPayload\xampp\mysql\data\%computername%.pid"
goto finish


:error
echo MySQL could not be started

:finish
exit
