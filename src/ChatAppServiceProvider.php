<?php

namespace Cavideldeveloper\ChatApp;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire;
class ChatAppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //  dd('Cavidel ChatApp');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'chatApp');

        $this->loadMigrationsFrom(__DIR__   . '/../database/migrations');

        Livewire::component('chat', Http\Livewire\Chat::class);
        Livewire::component('message-view', Http\Livewire\MessageView::class);
        Livewire::component('message', Http\Livewire\Message::class);
        Livewire::component('create-group', Http\Livewire\CreateGroup::class);
        Livewire::component('group-message-view', Http\Livewire\GroupMessageView::class);

        $this->publishes([
            __DIR__ . '/../src/Traits' => app_path('Traits')
        ], 'chat-trait');

        // User Model Trait
        // $this->publishes([
        //     __DIR__ . '/../resources/views/livewire' => resource_path('views/livewire')
        // ], 'chat-views');

    }

    /**
     * Publishing the files that the user may override.
     *
     * @return void
     */
    protected function setPublishes()
    {

    }
}
