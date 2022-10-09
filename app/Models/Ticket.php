<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'stop_date',
        'ticket_type_id',
        'customer_id',
        'teacher_id',
    ];

    public function ticketType()
    {
        return $this->hasOne(TicketType::class, 'id', 'ticket_type_id');
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'id', 'teacher_id');
    }

    public function customer()
    {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }
}
