<?php

namespace App;
use App\Subject;
use App\StudentClass;
use App\User;
use App\Student;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
 protected $fillable = ['user_id','employeePhone','teacher','employeeBirthdate','date_hired','student_id', 'employeeAge','role_id','payroll_id','experience'];


    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }

    public function payrolls()
    {
        return $this->belongsToMany('App\Payroll');
    }

    public function student_classes()
    {
        return $this->belongsToMany('App\StudentClass');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

}
