<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Employee extends Model
{
    protected $table = "employee";
    public function task(){
        return $this->hasMany (Task::class);
    }
}
