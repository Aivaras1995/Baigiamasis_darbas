<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $order_id
 * @property Order $order
 * @property int $status_id
 * @property Status $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Payment extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'order_id',
        'amount',
        'status_id',
    ];
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
