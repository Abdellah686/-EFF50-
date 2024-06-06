<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Habitant extends Authenticatable
{
    use HasFactory,Notifiable;
    
    protected $fillable = ['cin','nom','email','password','ville_id','photo'];

    public function ville(){
        return $this->belongsTo(Ville::class);
    }
}
