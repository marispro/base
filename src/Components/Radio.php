<?php
namespace MarisPro\Base\Components;

use MarisPro\Base\Traits\WithDisabled;
use MarisPro\Base\Traits\WithHelp;
use MarisPro\Base\Traits\WithModel;
use MarisPro\Base\Traits\WithOptions;
use MarisPro\Base\Traits\WithPrefix;
use MarisPro\Base\Traits\WithSwitch;
use MarisPro\Base\Traits\WithSizing;
use Illuminate\View\Component;

class Radio extends Component
{
    use WithPrefix, WithSizing, WithOptions, WithSwitch, WithHelp, WithModel, WithDisabled;

    public $props = [];
    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'options' => [],
            'switch' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'type' => 'radio',
            'disabled' => false,
        ];

        return $component;
    }

    public function render()
    {
        return view('laravel-livewire-forms::radio');
    }
}
