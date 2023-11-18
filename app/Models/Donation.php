<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{

    use HasFactory;

    protected $fillable = [
        'acc_number',
        'acc_type',
        'currency_symbol',
        'qr_code',
        'recipient_name',
        'recipient_position',
    ];
    protected $appends = ['qr_code_url'];

    public function getQrCodeUrlAttribute()
    {
        return env('DO_URL') . $this->qr_code;
    }
}
