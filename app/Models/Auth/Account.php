<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Account extends Model
{
    //
    use Billable;

    protected $fillable = [
        'name', 'url', 'stripe_id'
    ];
}
