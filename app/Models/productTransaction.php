<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class productTransaction extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'booxing_trx_id',
        'city',
        'post_code',
        'proof',
        'shoe_size',
        'address',
        'quantity',
        'sub_total_amount',
        'grand_total_amount',
        'discount_amount',
        'is_paid',
        'shoe_id',
        'promo_code_id',
    ];

    public static function generateUniqTrxId()
    {
        $prefix = 'sstraa';
        do {
            $randomString = $prefix . mt_rand(1000, 9999); // sstraa101
        } while (self::where('booxing_trx_id', $randomString)->exists());

        return $randomString; // sstraa209
    }

    public function shoe(): BelongsTo
    {
        return $this->belongsTo(Shoe::class, 'shoe_id');
    }

    public function promoCode(): BelongsTo
    {
        return $this->belongsTo(Shoe::class, 'shoe_id');
    }
}
