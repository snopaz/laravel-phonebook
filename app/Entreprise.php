<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
      protected $table = 'entreprise';

      public function collaborateur()
      {
          return $this->hasMany(Collaborateur::class);
      }
}
