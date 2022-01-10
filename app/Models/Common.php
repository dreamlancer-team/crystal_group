<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Common extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value'];

    /**
     * @param $key
     */
    public static function get($key)
    {
        $common = new self();
        $entry = $common->where('key', $key)->first();
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
        $common = new self();
        $entry = $common->where('key', $key)->firstOrFail();
        $entry->value = $value;
        $entry->saveOrFail();
    }
}
