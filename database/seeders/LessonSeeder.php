<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Lesson;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonSeeder extends Seeder
{
    private $date = '2022-10-01';
    private $teacher = 6;
    private $customer = 2;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::today();
        $current = Carbon::createFromFormat('Y-m-d', $this->date);

        while ($today->format('Y-m-d') !== $current->format('Y-m-d')) {
            for ($cId = 1; $cId <= $this->customer; $cId++) {
                for ($tId = 1; $tId <= $this->teacher; $tId++) {
                    Lesson::create([
                        'customer_id' => $cId,
                        'teacher_id' => $tId,
                        'date_lessons' => $current->format('Y-m-d'),
                    ]);
                }
            }
            $current = $current->addDay();
        }
    }
}
