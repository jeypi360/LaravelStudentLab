# Laravel Student Lab: Tasks

This project uses Laravel 12, Composer, PHP, and SQLite. It displays the three sample tasks at `/tasks`.

## First-time setup on Windows PowerShell

1. Open this folder in VS Code and open **Terminal → New Terminal**.
2. Install PHP dependencies if the `vendor` folder is not present:

   ```powershell
   composer install
   ```

3. Create your local environment file and SQLite database file:

   ```powershell
   Copy-Item .env.example .env
   New-Item -Path .\database\database.sqlite -ItemType File
   ```

   If PowerShell says the SQLite file already exists, keep the existing file and continue.

4. Generate the app key and create the database tables:

   ```powershell
   php artisan key:generate
   php artisan migrate
   ```

5. Insert the sample tasks once:

   ```powershell
   php artisan db:seed --class=TaskSeeder
   ```

   Run this seeder only once for a fresh database; running it again adds duplicate rows.

6. Start Laravel:

   ```powershell
   php artisan serve
   ```

7. Visit <http://127.0.0.1:8000/tasks>.

## SQLite PHP extensions

The PHP used by the terminal must have `pdo_sqlite` and `sqlite3` enabled. Check with:

```powershell
php -m | Select-String sqlite
```

Both extension names should appear.
