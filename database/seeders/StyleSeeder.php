<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StyleSeeder extends Seeder
{
    private $data = [
        'Strip Plastic',
        'High Hells',
        'Twerk Choreo',
        'Choreo',
        'Girly Hip-Hop',
        'Jazz Funk',
        'Stretching',
        'Strip|Hells',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $name) {
            DB::table('styles')->insert([
                'name' => $name,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
