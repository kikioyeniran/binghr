<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table  = 'permissions';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamsp
    public $timestamps = true;


    public function user()
    {
        return $this->hasOne(User::class);
    }
}
