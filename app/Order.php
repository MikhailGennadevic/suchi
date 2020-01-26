<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public $fillable = ['client_email', 'partner_id', 'status'];
    public $with = ['orderProducts.product'];

    private static $_statuses = [
        '0' => 'Новый',
        '10' => 'Подтвержден',
        '20' => 'Завершен'
    ];

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct', 'order_id', 'id');
    }

    public function partner()
    {
        return $this->hasOne('App\Partner', 'id', 'partner_id');
    }

    public function getStatusNameAttribute()
    {
        return self::$_statuses[$this->status]??'error';
    }

    public function getAmountAttribute()
    {
        return $this->orderProducts->reduce(function ($carry, $item) {
            return $carry + $item->product->price * $item->quantity;
        }, 0);
    }

    public function getCompositionAttribute()
    {
        return $this->orderProducts->reduce(function ($carry, $item) {
            return $carry . $item->product->name . ' - ' . $item->quantity . '<br>';
        }, '');
    }

    public function getStatusesAttribute()
    {
        return self::$_statuses;
    }
}
