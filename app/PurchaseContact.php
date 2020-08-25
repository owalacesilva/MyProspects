<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseContact extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'purchase_contacts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'purchase_id', 
        'contact_id', 
    ];
}
