<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketTypeSeeder extends Seeder
{
    private $data = [
        ['Пробный', 1, 250],
        ['Разовый', 1, 450],
        ['4 занятия', 4, 1400],
        ['8 занятий', 8, 2400],
        ['12 занятий', 12, 3300],
        ['16 занятий', 16, 4200],
        ['Безлимитный', 0, 7500],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $type) {
            DB::table('ticket_types')->insert([
                'name' => $type[0],
                'lessons' => $type[1],
                'price' => $type[2],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
