<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'residence_id', 'owner_id', 'block', 'number'
    ];

    protected $casts = [
        'created_at' => 'date:Y-m-d H:m:s',
        'updated_at' => 'date:Y-m-d H:m:s',
    ];

    public function Residence()
    {
        return $this->belongsTo('App\Models\Residence');
    }
}
