<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('employees')->insert([
            'individual_id' => '231129-021153',
            'first_name' => 'Jennifer',
            'middle_name' => 'Fernandez',
            'last_name' => 'Sabado',
            'job_title' => 'Software Engineer',
            'email' => 'jennifer.sabado@atomitsoln.com',
            'password' => bcrypt('JennAtomitSoln#021197'),
            'street' => 'Blk130 Bagong Kampi St., Green Valley, San Nicolas III',
            'city' => 'Bacoor',
            'province' => 'Cavite',
            'country' => 'Philippines',
            'language' => 'English',
            'timezone' => '(GMT+08:00) Manila, Beijing, Hong Kong',
            'mobile_number' => '09764574222',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
