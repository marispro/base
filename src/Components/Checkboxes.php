<?php
namespace MarisPro\Base\Components;

use MarisPro\Base\Traits\WithDisabled;
use MarisPro\Base\Traits\WithHelp;
use MarisPro\Base\Traits\WithModel;
use MarisPro\Base\Traits\WithOptions;
use MarisPro\Base\Traits\WithPrefix;
use MarisPro\Base\Traits\WithSwitch;
use Illuminate\View\Component;

class Checkboxes extends Component
{
    use WithPrefix, WithOptions, WithSwitch, WithHelp, WithModel, WithDisabled;

    public array $props = [];
    public array $attrs = [];

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
            'type' => 'checkbox',
            'disabled' => false,
        ];

        return $component;
    }

    public function render()
    {
        return view('laravel-livewire-forms::checkboxes');
    }
}
