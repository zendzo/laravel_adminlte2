<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['name'];

    public function category()
    {
        return $this->belongsTo(MenuCategory::category);
    }

    public function subMenuItems()
    {
        return $this->hasMany(SubMenuItem::class);
    }
}
