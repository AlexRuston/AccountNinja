<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    use HasFactory;

    /*
     * find a Role by its name
     * */
    public static function byName($roleName)
    {
        return Role::where('name', $roleName)->first();
    }
}
