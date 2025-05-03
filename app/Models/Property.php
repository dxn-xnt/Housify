<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';
    protected $primaryKey = 'prop_id';
    protected $fillable = [
        'prop_title',
        'prop_description',
        'prop_price_per_night',
        'prop_max_guest',
        'prop_room_count',
        'prop_bathroom_count',
        'prop_status',
        'prop_address',
        'prop_date_created',
        'user_id',
        'main_image_path',
        'gallery_image_1',
        'gallery_image_2',
        'gallery_image_3',
        'gallery_image_4'
    ];

    public function host()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function amenities()
    {
        return $this->hasMany(PropertyAmenity::class, 'prop_id');
    }
}
