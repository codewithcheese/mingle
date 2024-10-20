<?php

namespace App\Livewire;

use Ijpatricio\Mingle\Concerns\InteractsWithMingles;
use Ijpatricio\Mingle\Contracts\HasMingles;
use Livewire\Component;

class SvelteCounter extends Component implements HasMingles
{
    use InteractsWithMingles;

    public function component(): string
    {
        return 'resources/js/svelte-counter/index.js';
    }

    public function mingleData(): array
    {
        return [
            'message' => 'Message in a bottle 🍾',
        ];
    }

    public function doubleIt($amount)
    {
        return $amount * 2;
    }
}