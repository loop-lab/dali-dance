<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherStyleSeeder extends Seeder
{
    private $data = [
        [1,2,3,4],
        [1],
        [1,2,8],
        [3],
        [5],
        [6,7],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $key => $value) {
            foreach ($value as $val) {
                DB::table('teacher_styles')->insert([
                    'teacher_id' => $key+1,
                    'style_id' => $val,
                ]);
            }
        }
    }
}
