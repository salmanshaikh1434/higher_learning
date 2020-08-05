<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = [
        "firstname",
        "middlename",
        "lastname",
        "phone",
        "email",
        "dob",
        "sex",
        "cast",
        "course",
        "lastexam",
        'amt_paid',
        "percentage",
        'txn_id',
        "lastinst",
        "attachment_last_exam",
        "attachment_cast_certificate",
        'attachment_photo',
        'attachment_txncopy',
        "indian",
        "acceptna",
    ];
}
