<?php

namespace App\Models;

use App\Models\Teacher;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'teacher_id',
        'date_lessons',
    ];

    public function customer(): Relation
    {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }

    public function teacher(): Relation
    {
        return $this->hasOne(Teacher::class, 'id', 'teacher_id');
    }
}
