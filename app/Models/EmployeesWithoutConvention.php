<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesWithoutConvention extends Model
{
    use HasFactory;

    protected $table = 'reg_employee';

    protected $primaryKey = 'identifier';

    const CREATED_AT = 'created_at_date';

    const UPDATED_AT = 'updated_at_date';
}
