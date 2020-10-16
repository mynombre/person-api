<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "persons";

    protected $fillable = [
        "firstName", "lastName", "country",
        "city", "street", "number", "single",
        "documentNumber"
    ];

    protected $hidden = [
        "create_at", "update_at"
    ];
}
