<?php

namespace App\Livewire;

use App\Models\servers;
use Livewire\Component;

class CreateServer extends Component
{

    public $image, $name, $android = false, $ios = false, $macos = false, $windows = false, $longitude, $latitude, $type, $status;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'android' => 'required|boolean',
            'ios' => 'required|boolean',
            'macos' => 'required|boolean',
            'windows' => 'required|boolean',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'type' => 'required|in:free,premium',
            'status' => 'required|in:active,inactive',
        ];
    }

    public function store()
    {
        $this->validate();

        $server = servers::create([
            'name' => $this->name,
            'android' => $this->android,
            'ios' => $this->ios,
            'macos' => $this->macos,
            'windows' => $this->windows,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'type' => $this->type,
            'status' => $this->status,
        ]);

        if ($this->image) {
            $server->clearMediaCollection('image');
            $server->addMedia($this->image->getRealPath())
                ->usingFileName(time() . '_server_' . $server->id . '.' . $this->image->getClientOriginalExtension())
                ->toMediaCollection('image');
        }

        $this->dispatch('snackbar', message: 'Server added successfully!', type: 'success');
        $this->dispatch('redirect', url: route('AllServers'));
    }

    public function render()
    {
        /** @disregard @phpstan-ignore-line */
        return view('livewire.create-server')
            ->extends('layouts.app')
            ->section('content');
    }
}
