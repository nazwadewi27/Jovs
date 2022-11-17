<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DataSeederSQL extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = public_path('file_sql/db_toko_laravel.sql');        
        $sqlfile = DB::raw(file_get_contents($path));     
        $db_bin = "C:\laragon\bin\mysql\mysql-8.0.29-winx64\bin";
        // PDO Credentials
        $db = [
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'host' => env('DB_HOST'),
            'database' => env('DB_DATABASE')
        ];
        
        exec("$db_bin}\mysql --user={$db['username']} --password={$db['password']} --host={$db['host']} --database {$db['database']} < $sqlfile");
        
        \Log::info('Import SQL Success from sql file '.$path.'');
    }
}
