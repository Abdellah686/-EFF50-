<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Habitant extends Model
{
    use HasFactory,Notifiable;
    
    protected $fillable = ['cin','nom','email','password','ville_id','photo'];

    public function ville(){
        return $this->belongsTo(Ville::class);
    }
}
