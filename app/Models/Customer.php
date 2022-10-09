<?php

namespace App\Models;

use App\Models\Lesson;
use App\Models\Teacher;
use App\Models\TicketType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'phone',
        'bonuses',
        'is_active',
    ];

    public function lessons(): Relation
    {
        return $this->hasMany(Lesson::class);
    }

    public function teachers(): Relation
    {
        return $this->belongsToMany(Teacher::class, 'lessons')
        ->withPivot('date_lessons');
    }

    public function ticketTipes(): Relation
    {
        return $this->belongsToMany(TicketType::class, 'lessons');
    }
}
