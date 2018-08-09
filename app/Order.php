<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $fillable = [
        'created_at', 'updated_at', 'user_id', 'card', 'address', 'name'
    ];
    /**
     * У каждого заказа может быть только 1 покупатель
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}