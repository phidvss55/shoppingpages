<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function user() {
        return $this->belongsTo(User::class, 'ra_user_id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'ra_product_id');
    }
}
