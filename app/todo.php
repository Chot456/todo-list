<?php

use App\User;
namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    protected $fillable = [
        'user_id',
        'todo'
    ];

    protected $table = 'todo';

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
