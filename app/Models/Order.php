<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable=[
        'user_id',
        'name',
        'email', 
        'total_price',
        'payment_mode',
        'payment_type',
        'payment_id',       
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }

}
