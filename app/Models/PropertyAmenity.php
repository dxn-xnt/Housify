<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyAmenity extends Model
{
    protected $table = 'property_amenities';
    protected $primaryKey = 'amenity_id';
    protected $fillable = ['prop_id', 'name', 'icon'];

    public function property()
    {
        return $this->belongsTo(Property::class, 'prop_id');
    }
}
