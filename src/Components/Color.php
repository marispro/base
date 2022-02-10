<?php
namespace MarisPro\Base\Components;

use MarisPro\Base\Traits\WithDisabled;
use MarisPro\Base\Traits\WithHelp;
use MarisPro\Base\Traits\WithModel;
use MarisPro\Base\Traits\WithPrefix;
use MarisPro\Base\Traits\WithReadonly;
use MarisPro\Base\Traits\WithSizing;
use Illuminate\View\Component;

class Color extends Component
{
    use WithPrefix, WithSizing, WithHelp, WithModel, WithDisabled, WithReadonly;

    public array $props = [];
    public array $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'small' => false,
            'large' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'type' => 'color',
            'disabled' => false,
            'readonly' => false,
        ];

        return $component;
    }

    public function render()
    {
        return view('laravel-livewire-forms::color');
    }
}
