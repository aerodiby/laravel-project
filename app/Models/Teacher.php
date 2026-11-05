<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'niy',
        'subject_id',
        'start_date',
    ];

    protected $casts = [
        'start_date' => 'date',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
