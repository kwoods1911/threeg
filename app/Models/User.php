<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//KW - importing for establishing relationships
use App\Models\CustomerPackages;
use App\Models\ReceivedPackages;
use App\Models\ShipmentReport;
use App\Models\ThreeG_Invoice;
use App\Notifications\CustomVerifyEmail;


class User extends Authenticatable implements MustVerifyEmail{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function customerpackage(){
        return $this->hasMany(CustomerPackage::class, 'customerid');
    }

    public function receivedPackage(){
        return $this->hasMany(ReceivedPackages::class,'managerid');
    }


    public function threeGInvoice(){
        return $this->hasMany(ThreeG_Invoices::class,'customerid');
    }


    public function sendEmailVerificationNotification()
{
    $this->notify(new CustomVerifyEmail());
}
}
