<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iCount = 0;

        while ($iCount < 15000)
        {
            DB::table('users_access')->insert([
                'last_login' => Carbon::now(),
                'users_id' => random_int(1, 5000),
            ]);

            $iCount++;
        }
    }
}
