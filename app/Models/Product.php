<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'office_id',
        'price',
        'date_p',
        'state',
        'comments',
    ];

    protected $dates = [
        'date_p',
    ];

    // protected $casts = [
    //     'date_p' => 'date:d-m-Y',
    // ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
