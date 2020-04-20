<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    
    protected $guarded = ['*'];

    const STATUS_DONE = 1;
    const STATUS_DEFAULT = 0;

    public function user() {
        return $this->belongsTo(User::class, 'tr_user_id');
    }
}
