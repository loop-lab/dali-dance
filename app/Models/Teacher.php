<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'phone',
        'style_id',
        'is_active',
    ];

    public function getFullAttribute(): string
    {
        return $this->attributes['name'] . ' ' . $this->attributes['last_name'];
    }

    public function style()
    {
        return $this->belongsToMany(Style::class, 'teacher_styles');
    }

    public function customerRelation(): Relation
    {
        return $this->belongsToMany(Customer::class, 'lessons')->getRelation('teacher')
            ->withPivot('start_date', 'stop_date', 'ticket_type_id');
    }

    public function customers(): Relation
    {
        return $this->belongsToMany(Customer::class, 'lessons')
            ->withPivot('date_lessons');
    }
}
