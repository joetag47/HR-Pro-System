<?php

namespace App\Models\Company;

use App\Models\EmployeeChildren;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }


    public function education()
    {
        return $this->hasMany(EmployeeEducation::class, 'employee_id');
    }

    public function getChildren()
    {
        return $this->hasMany(EmployeeChildren::class, 'employee_id');
    }
}
