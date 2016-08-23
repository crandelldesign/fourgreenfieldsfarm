<?php

namespace fourgreenfieldsfarm;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    /**
     * Get the user that owns the event.
     */
    public function user()
    {
        return $this->belongsTo('fourgreenfieldsfarm\User');
    }
}
