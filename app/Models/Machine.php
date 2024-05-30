<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'producer',
        'image',
        'catalogue',
        'machine_category_id',
    ];

    public function machineCategory()
    {
        return $this->belongsTo(MachineCategory::class, 'machine_category_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_machines');
    }

}
