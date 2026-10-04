@echo off
cd /d "%~dp0"
if exist "%USERPROFILE%\.local-tools\news-site\php\php.exe" (
    "%USERPROFILE%\.local-tools\news-site\php\php.exe" artisan serve --no-reload
) else (
    php artisan serve --no-reload
)
pause
