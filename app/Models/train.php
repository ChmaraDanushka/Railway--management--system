<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class train extends Model
{

    protected $primaryKey = 'train_id';
    public $incrementing = false;

    use HasFactory;
}
