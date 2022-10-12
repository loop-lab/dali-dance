<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private $tables = [
        'customers',
        'teachers',
        'teacher_styles',
        'styles',
        'tickets',
        'ticket_types',
        'lessons',
    ];

    private function up_customers()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('last_name', 50);
            $table->string('phone', 11)->nullable();
            $table->unsignedInteger('bonuses')->default(0);
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    private function up_teachers()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('last_name', 50);
            $table->string('phone', 11)->nullable();
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    private function up_teacher_styles()
    {
        Schema::create('teacher_styles', function (Blueprint $table) {
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('style_id');
        });
    }

    private function up_styles()
    {
        Schema::create('styles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    private function up_tickets()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('stop_date');
            $table->unsignedBigInteger('ticket_type_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('teacher_id');
            $table->primary(['start_date', 'stop_date', 'ticket_type_id', 'customer_id', 'teacher_id']);
            $table->timestamps();
        });
    }

    private function up_ticket_types()
    {
        Schema::create('ticket_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->unsignedInteger('lessons');
            $table->unsignedInteger('price');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    private function up_lessons()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('customer_id');
            $table->date('date_lessons');
            $table->primary(['teacher_id', 'customer_id', 'date_lessons']);
        });
    }

    public function up()
    {
        foreach ($this->tables as $table) {
            if (Schema::hasTable($table)) {
                continue;
            }

            if (method_exists($this, $method = "up_{$table}")) {
                $this->{$method}();
            }
        }
    }

    public function down()
    {
        foreach ($this->tables as $table) {
            Schema::dropIfExists($table);
        }
    }
};
