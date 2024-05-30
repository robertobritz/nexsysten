<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Definir o relacionamento com Machine
    public function machines()
    {
        return $this->hasMany(Machine::class, 'machine_category_id');
    }
}
