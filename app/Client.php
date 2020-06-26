<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = [
        'name', 'lastname', 'email', 'address',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];
    protected $table = 'clients';


}
