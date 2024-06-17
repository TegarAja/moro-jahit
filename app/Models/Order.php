<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'model_name',
        'sleeve_model',
        'customer_name',
        'customer_phone',
        'customer_address',
        'material',
        'selectedImagePath'.
        'size_type',
        'size',
        'additional_description',
        'chest_size',
        'waist_size',
        'hip_size',
        'front_width',
        'back_width',
        'shoulder_length',
        'armhole_size',
        'sleeve_length',
        'lower_arm_size',
        'crotch_size',
        'thigh_size',
        'knee_size',
        'ankle_size',
        // ... tambahkan kolom lain yang diperlukan ...
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
