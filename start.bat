@echo off
cd /d "%~dp0"
set "newsPhp=php"
if exist "%USERPROFILE%\.local-tools\news-site\php\php.exe" set "newsPhp=%USERPROFILE%\.local-tools\news-site\php\php.exe"

if not exist "vendor\autoload.php" (
    if exist "%USERPROFILE%\.local-tools\news-site\composer.phar" (
        "%newsPhp%" "%USERPROFILE%\.local-tools\news-site\composer.phar" install
    ) else (
        call composer install
    )
    if errorlevel 1 goto end
)

if not exist ".env" (
    copy ".env.example" ".env" >nul
    "%newsPhp%" artisan key:generate
    if errorlevel 1 goto end
)

"%newsPhp%" -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
if errorlevel 1 goto end
"%newsPhp%" artisan migrate --seed --force
if errorlevel 1 goto end
"%newsPhp%" artisan serve --no-reload

:end
pause
