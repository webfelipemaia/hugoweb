<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationType extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'information_types';

    /**
     * @var array
     */
    protected $fillable = ['type'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productInformationTypes()
    {
        return $this->hasMany(ProductInformationType::class);
    }

}
