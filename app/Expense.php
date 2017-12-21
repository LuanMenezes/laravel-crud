<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['name','type','price','dtpayment','dtexpiration','status','user_id','church_id'];
    protected $table = 'expenses';
}
