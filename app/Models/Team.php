<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'team_users', 'team_id', 'user_id')
        ->withPivot("role_in_team")->withTimestamps();
    }
        public function team_users()
    {
        return $this->hasMany(TeamUser::class);
    }

}
