<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    // table
    protected $table        = 'users';
    public $timestamps      = false;
    protected $primaryKey   = 'id_user';
}
