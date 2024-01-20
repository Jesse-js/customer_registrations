<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdressWithoutConvention extends Model
{
    use HasFactory;

    protected $table = 'reg_adresses';

    public function employee(): BelongsTo
    {
        return $this->belongsTo(EmployeesWithoutConvention::class, 'reg_employee_identifier', 'identifier');
    }
}
