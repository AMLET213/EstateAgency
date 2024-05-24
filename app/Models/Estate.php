<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;

		protected $fillable = ['image','apartment','buy','address','rooms','square','price','number_phone'];
}
