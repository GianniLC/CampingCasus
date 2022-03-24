<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camping_House extends Model
{
    use HasFactory;

    protected $fillable = [
        'contactPersonFirstName',
        'contactPersonLastName',
        'peopleAmount',
        'under4',
        'between4and12',
        'between12and18',
        'between18and65',
        'above65',
        'pets',
        'areasize',
        'dayPrice',
        'reserved',
        'arrived'
    ];
}
