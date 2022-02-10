<?php
namespace MarisPro\Base\Components;

use MarisPro\Base\Traits\WithDisabled;
use MarisPro\Base\Traits\WithHelp;
use MarisPro\Base\Traits\WithModel;
use MarisPro\Base\Traits\WithPrefix;
use MarisPro\Base\Traits\WithSwitch;
use Illuminate\View\Component;

class Checkbox extends Component
{
    use WithPrefix, WithSwitch, WithHelp, WithModel, WithDisabled;

    public array $props = [];
    public array $attrs = [];

    public static function make($name, $label)
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'switch' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'type' => 'checkbox',
            'disabled' => false,
        ];

        return $component;
    }

    public function render()
    {
        return view('laravel-livewire-forms::checkbox');
    }
}
