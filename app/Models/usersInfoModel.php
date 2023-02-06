<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersInfoModel extends Model
{
    use HasFactory;
    public $table = 'users_info';
    public $timestamps = false;
    public $fillable = [
        'fullname',
        'cep'
    ];
}
