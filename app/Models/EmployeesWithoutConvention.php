<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EmployeesWithoutConvention extends Model
{
    use HasFactory;

    protected $table = 'reg_employee';

    protected $primaryKey = 'identifier';

    const CREATED_AT = 'created_at_date';

    const UPDATED_AT = 'updated_at_date';

    public function adress(): HasOne
    {
        return $this->hasOne(AdressWithoutConvention::class, 'reg_employee_identifier', 'identifier');
    }
}
