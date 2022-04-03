<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'text',
        'completed_at'
    ];

    protected $visible = [
        'id',
        'text',
        'active'
    ];

    protected $appends = [
        'active'
    ];

    public function getActiveAttribute() {
        return $this->completed_at === null;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
