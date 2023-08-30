<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay_model extends Model
{
    protected $table="crops";
    protected $fillable=
    [
        "id", "ccn", "datess"
    ];

   public function menmber()
    {
    return $this->hasOne(Membership::class);
    }
}
