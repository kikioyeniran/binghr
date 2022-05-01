<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table  = 'roles';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamsp
    public $timestamps = true;


    public function user()
    {
        return $this->hasOne(User::class);
    }


    public function permission()
    {
        return $this->hasOne(Permission::class);
    }
}
