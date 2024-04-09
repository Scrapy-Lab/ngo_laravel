<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonateNow extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function payment_status()
    {
        return $this->belongsTo(Payment::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
