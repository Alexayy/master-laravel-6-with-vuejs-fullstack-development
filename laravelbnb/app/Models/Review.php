<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * Double colon or (Bookable::class) is a static accessor which means that I am not really accessing a constant,
     * nor instance, I am accessing the class itself.
     * When I want to access something statically, globally from that class.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bookable() {
        return $this -> belongsTo(Bookable::class);
    }

    public function booking() {
        return $this -> belongsTo(Booking::class);
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

}
