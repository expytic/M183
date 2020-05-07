git pull
SET mypath=%~dp0
echo %mypath:~0,-1%

cd c:/xampp/mysql/bin
mysql.exe -u root -e "source %mypath%sql\setupdb.sql"
mysql.exe -u root -e "source %mypath%sql\tobrunch.sql"
mysql.exe -u root -e "source %mypath%sql\tosupport.sql"
mysql.exe -u root -e "source %mypath%sql\users.sql"
pause
