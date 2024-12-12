<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'team_id',
        'title',
        'slug',
        'description',
        'photo',
        'url',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'team_id' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'project_teams', 'project_id', 'user_id');
    }

    public function getPhotoAttribute($value)
    {
        return $value ? explode(',', $value) : [];
    }

    public function setPhotoAttribute($value)
    {
        $this->attributes['photo'] = is_array($value) ? implode(',', $value) : $value;
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function tools()
    {
        return $this->belongsToMany(Tool::class, 'project_tools', 'project_id', 'tool_id')->withTimestamps();
    }

    public function tool()
    {
        return $this->belongsToMany(Tool::class, 'project_tools', 'project_id', 'tool_id')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
