<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'menu';
    public $timestamps = false;
    protected $primaryKey = 'item_no';

    protected $fillable = [
        'item_no', 'item_name', 'price','calories','quantity', 'ingredients','image',
     ];

}
