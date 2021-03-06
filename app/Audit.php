<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $connection = "mysql";
    
    protected $table = "audits";

    public function user()
    {
       return $this->hasOne('App\User', 'id', 'user_id');
    }

}
