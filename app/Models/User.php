<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'phone_object', 'password', 'gender', 'cellphone', 'avatar', 'date_of_birth', 'verified', 'role_id','disabled', 'token', 'is_admin', 'notification_check', 'verification_code'
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



    public static function getAllClients($request)
    {

        $searchValue = $request->searchValue;

        $query =  User::leftJoin('roles', 'users.role_id', '=', 'roles.id')
            ->where('role_id', '=', 0)
            ->where('is_admin', '=', 0)
            ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.email', 'users.phone');

        if (!empty($searchValue)) {
            $query->where(function ($query) use ($searchValue) {
                $query->where('users.first_name', 'LIKE', '%' . $searchValue . '%')
                    ->orWhere('users.last_name', 'LIKE', '%' . $searchValue . '%')
                    ->orWhere('users.phone', 'LIKE', '%' . $searchValue . '%');
            });
        }

        if (empty($requestType)) {

            $count = $query->get()->count();
            $allData = $query->get();
            //$data = $query->orderBy($request->columnKey, $request->columnSortedBy)->take($request->rowLimit)->skip($request->rowOffset)->get();

            return ['datarows' => $allData, 'count' => $count];
        } else {
            return $query->orderBy($request->columnKey, $request->columnSortedBy)->get();
        }
    }
}
