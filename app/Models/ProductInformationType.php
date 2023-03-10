<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInformationType extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'product_information_types';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'information_id', 'information_types_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function information()
    {
        return $this->belongsTo(Information::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function informationType()
    {
        return $this->belongsTo(InformationType::class);
    }

}
