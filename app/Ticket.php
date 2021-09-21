<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
            'user_id', 'category_id', 'ticket_id', 'businessu_id', 'priority_id', 'location_id','support_admin_id', 'subject', 'message', 'status_id', 'request_date', 'request_time', 'resolve_date', 'resolve_time'
        ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function businessu()
    {
        return $this->belongsTo(Businessu::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function support_admin()
    {
        return $this->belongsTo(User::class);
    }


}
