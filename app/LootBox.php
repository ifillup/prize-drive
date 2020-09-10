<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LootBox extends Model
{
    protected $guarded = [];
    public function prizes()
    {
        return $this->hasMany(Prize::class);
    }
    public function cost()
    {
        $cost = 0;
        $prizes = $this->prizes;

        foreach ($prizes as $prize) {
            $cost += ($prize->percentage / 100) * $prize->product->cost;
        }
        return $cost;
    }
}
