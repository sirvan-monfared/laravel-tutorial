<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Scopes\AdActiveScope;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_admin' => 'boolean'
        ];
    }

    public function ads(): HasMany
    {
        return $this->hasMany(Ad::class)->withoutGlobalScope(AdActiveScope::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function isAdmin(): bool
    {
        return !! $this->is_admin;
    }

    public function viewLink(): string
    {
        return route('admin.user.show', $this);
    }

    public function editLink(): string
    {
        return route('admin.user.edit', $this);
    }

    public function deleteLink(): string
    {
        return route('admin.user.destroy', $this);
    }

    public function updateInfo(string $name, string $email)
    {
        $this->update([
            'name' => $name,
            'email' => $email
        ]);
    }

    public function updatePassword(string $password): void
    {
        $this->password = $password;
        $this->save();
    }
}
