<?php
namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Obat;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // Daftar policies jika ada
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-obat', function ($user, Obat $obat) {
            return $user->id === $obat->user_id; // Gantilah 'user_id' dengan kolom yang sesuai di model Obat
        });
    }
}
