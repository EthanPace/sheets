<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('role', function ($role) {
            return "<?php if(auth()->check() && auth()->user()->role == $role): ?>";
        });
        
        Blade::directive('admin', function () {
            return "<?php if(auth()->check() && auth()->user()->role == 'admin'): ?>";
        });

        Blade::directive('notadmin', function () {
            return "<?php if(auth()->check() && auth()->user()->role != 'admin'): ?>";
        });

        Blade::directive('runner', function () {
            return "<?php if(auth()->check() && auth()->user()->role == 'runner'): ?>";
        });

        Blade::directive('player', function () {
            return "<?php if(auth()->check() && auth()->user()->role == 'player'): ?>";
        });

        Blade::directive('selective', function() {
            return "<?php if(auth()->user()->character): ?>";
        });

        Blade::directive('character', function($character_id) {
            return "<?php if(auth()->user()->character && auth()->user()->character->id == $character_id): ?>";
        });

        Blade::directive('caster', function() {
            return "<?php if(auth()->user()->character && auth()->user()->character->archetype->spellcaster != 'NONE'): ?>";
        });

        Blade::directive('hasitems', function() {
            return "<?php if(auth()->user()->character && auth()->user()->character->inventory->isNotEmpty()): ?>";
        });

        Blade::directive('hasspells', function($spellcaster) {
            return "<?php if($spellcaster != 'NONE'): ?>";
        });

        Blade::directive('initiative', function() {
            return "<?php if(auth()->user()->character && auth()->user()->character->turn_order > 0): ?>";
        });

        Blade::directive('subpage', function($page) {
            return "<?php if(request()->query('page') == $page): ?>";
        });

        Blade::directive('subpageorbase', function($page) {
            return "<?php if(request()->query('page') == $page || request()->query('page') == null): ?>";
        });

        Blade::directive('open', function($open) {
            return "<?php if($open != null): ?>";
        });

        Blade::directive('success', function($scope) {
            return "<?php if(session()->has('success') && session()->has('scope') && session('scope') == $scope): ?>";
        });

        Blade::directive('endish', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endrole', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endadmin', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endnotadmin', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endrunner', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endplayer', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endselective', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endcharacter', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endcaster', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endhasitems', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endhasspells', function() {
            return "<?php endif; ?>";
        });

        Blade::directive('endsubpage', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endopen', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('endsuccess', function () {
            return "<?php endif; ?>";
        });
    }
}
