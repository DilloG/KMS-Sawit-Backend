<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\PakarSawit as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class PakarSawit extends Authenticatable implements JWTSubject
{
    //
    protected $table = 'pakar_sawit';

    protected $fillable = [
      'nama', 'nomor_telefon', 'email', 'password', 'jenis_kelamin'
    ];

    protected $hidden = [
        'password'
    ];

    public function artikel(){
        return $this->hasMany('App\Artikel');
    }

    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
        return [];
    }

}
