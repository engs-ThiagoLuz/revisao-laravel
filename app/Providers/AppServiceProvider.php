<?php

namespace App\Providers;
use App\Models\Aluno;
use App\Policies\AlunoPolicy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

public function boot(): void
{
    Gate::policy(Aluno::class, AlunoPolicy::class);
}
}
