<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id', 'quantity'];//Nurodomi, kokie atributai leidžiami masiškam priskyrimui

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function cartItems() //viešas metodas, kuris apibrėžia ryšį tarp dviejų modelių.
    {
        return $this->hasMany(CartItem::class);// vienas "Useris gali turėti daug "CartItem" objektų
    }
}
