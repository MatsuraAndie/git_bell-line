<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCompanyInfo extends Model
{
    use HasFactory;

    protected $table = 'my_company_infos';

    protected $fillable = [
        'name',
        'zip',
        'address',
        'tel',
        'email',
        'bank_name',
        'bank_branch',
        'bank_type',
        'bank_number',
        'note',
    ];
}
