<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    private $data = [
        ['Дарья', 'Ли'],
        ['Анна', 'Кривовяз'],
        ['Екатерина', 'Лещенко'],
        ['Юля', 'Зуева'],
        ['Луиза', 'Умарова'],
        ['Кристина', 'Имамгусейнова'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $val) {
            DB::table('teachers')->insert([
                'name' => $val[0],
                'last_name' => $val[1],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
