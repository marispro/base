<?php
namespace MarisPro\Base\Components;

use MarisPro\Base\Traits\WithDisabled;
use MarisPro\Base\Traits\WithHelp;
use MarisPro\Base\Traits\WithModel;
use MarisPro\Base\Traits\WithPlaceholder;
use MarisPro\Base\Traits\WithPrefix;
use MarisPro\Base\Traits\WithReadonly;
use MarisPro\Base\Traits\WithSizing;
use Illuminate\View\Component;

class Textarea extends Component
{
    use WithPrefix, WithSizing, WithHelp, WithModel, WithDisabled, WithReadonly, WithPlaceholder;

    public $props = [];
    public $attrs = [];

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
            'rows' => 3,
            'disabled' => false,
            'readonly' => false,
        ];

        return $component;
    }

    public function rows($rows = 3)
    {
        $this->attrs['rows'] = $rows;

        return $this;
    }

    public function render()
    {
        return view('laravel-livewire-forms::textarea');
    }
}
