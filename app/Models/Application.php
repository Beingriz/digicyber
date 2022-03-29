<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    public $table="digital_cyber_db";
    public $timestamps= false;

    public function scopeFilter($query, $key)
    {
        $key = "%$key%";
        $query->where(function($query) use ($key)
        {
            $query->where('Name','Like',$key)
            ->orWhere('Amount_Paid','Like',$key)
            ->orWhere('Application','Like',$key)
            ->orWhere('Received_Date','Like',$key)
            ->orWhere('Status','Like',$key)
            ->orWhere('Mobile_No','Like',$key)
            ->orWhere('Application_Type','Like',$key);
        });
    }
}

