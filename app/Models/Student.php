<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table="newStudent";
    protected $hidden=[
        "id","city"
    ];
    protected $visible=[
        "id","city","name"
    ];
    protected $casts=[
        "city"=>"boolean"
    ];
    public $timestamps=false;
    public $primaryKey="user_id";
}
