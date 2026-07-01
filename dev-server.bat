@echo off
cd /d "%~dp0"
set PHP=C:\Users\Hashmi Innovations\AppData\Local\Microsoft\WinGet\Packages\PHP.PHP.8.3_Microsoft.Winget.Source_8wekyb3d8bbwe\php.exe
echo Starting AppsDeddy dev server with clean URLs...
echo Open: http://localhost:8080/about
echo.
"%PHP%" -S localhost:8080 -t "%CD%" "%CD%\router.php"
