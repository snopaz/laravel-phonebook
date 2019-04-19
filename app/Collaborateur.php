<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Entreprise;

class Collaborateur extends Model
{
    protected $table = 'collaborateur';

    public function entreprise(){
        return $this->hasOne(Entreprise::class, 'id', 'entreprise_id');
    }
}
