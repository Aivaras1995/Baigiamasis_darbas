<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $country
 * @property string $city
 * @property string $zip
 * @property string $street
 * @property string $house_number
 * @property string $apartment_number
 * @property string $state
 * @property string $type
 * @property string $additional_info
 * @property int $user_id
 * @property User $user
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Address extends Model
{
    protected $fillable = [
        'name',
        'country',
        'city',
        'zip',
        'street',
        'house_number',
        'apartment_number',
        'state',
        'type',
        'additional_info',
        'user_id',
    ];
    public function user() //funkcija apibrėžia santykį tarp "Address" ir "User" modelių.
    {
        return $this->belongsTo(User::class); //nurodoma, kad kiekvienas adresas priklauso vienam vartotojui.
    }
    public function __toString(): string //funkcija apibrėžia, kaip "Address" objektas bus konvertuojamas į tekstą,
    {
        return implode( //funkcija skirta sujungti adresų duomenis į vieną eilutę
            ' ',
            array_filter([ //funkcija naudojama pašalinti tuščias reikšmes iš masyvo.
                // Tai grąžina pilną adresą kaip tekstą.
                $this->street,
                $this->house_number,
                $this->apartment_number,
                $this->zip,
                $this->city,
                $this->state,
                $this->country,
            ]),
        );
    }
}
