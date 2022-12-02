<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\order;
use App\Models\product;

class cart extends Model
{
 	protected $primaryKey = 'id';
  	protected $table = 'cart';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
}
