<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionMaster extends Model
{
    use SoftDeletes;

    public $table = 'transaction_master';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'description',
        'code',
        'rate_euro',
        'date_paid'
    ];

    public static $rules = [];
}
