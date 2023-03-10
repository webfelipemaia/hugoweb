<?php

namespace App\Models;
use Config;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'information';

    /**
     * @var array
     */
    protected $fillable = ['icon', 'key', 'value'];

    /**
     * @param $key
     */
    public static function get($key)
    {
        $setting = new self();
        $entry = $setting->where('key', $key)->first();
        if (!$entry) {
            return;
        }
        return $entry->value;
    }

    /**
     * @param $key
     * @param null $value
     * @return bool
     */
    public static function set($key, $value = null)
    {
        $setting = new self();
        $entry = $setting->where('key', $key)->firstOrFail();
        $entry->value = $value;
        $entry->saveOrFail();
        Config::set('key', $value);
        if (Config::get($key) == $value) {
            return true;
        }
        return false;
    }    

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productInformationTypes()
    {
        return $this->hasMany(ProductInformationType::class);
    }

}
