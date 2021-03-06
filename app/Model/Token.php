<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    public $table = 'token';

    protected $primaryKey = 'id';

    protected $hidden = ['token', 'created_at', 'updated_at', 'deleted_at'];

    public $fillable = [
        'id_user',
        'token',
        'expired_at',
        'limit',
        'accessed'
    ];

    public function function_token()
    {
        return $this->hasMany('App\Model\FunctionToken', 'id_token', 'id')->with('function_token');
    }
}
