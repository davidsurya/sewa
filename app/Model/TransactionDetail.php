<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;

    public $table = 'transaction_detail';

    protected $dates = ['deleted_at'];

    public $fillable = [
    ];

    public static $rules = [];
}
