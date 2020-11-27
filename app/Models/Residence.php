<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'phone'
    ];

    protected $casts = [
        'created_at' => 'date:Y-m-d H:m:s',
        'updated_at' => 'date:Y-m-d H:m:s',
    ];

    public function Houses()
    {
        return $this->hasMany('App\Models\House');
    }
}
