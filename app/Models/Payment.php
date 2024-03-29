<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function donation()
    {
        return $this->belongsTo(DonateNow::class);
    }


    public function approve()
    {
        $this->update(['is_approved' => 1]);
    }



    public function reject()
    {
        $this->update(['is_approved' => 0]);
    }
}
