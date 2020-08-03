<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        "expiry_date",
        "details",
        "type",
        "attachment",
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
