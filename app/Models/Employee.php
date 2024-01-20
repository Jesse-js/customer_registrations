<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cpf', 'hiring_date', 'resignation_date'];

    public function adress() : HasOne
    {
        return $this->hasOne(Adress::class);
    }
}
