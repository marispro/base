<?php
namespace MarisPro\Base\Components;

use MarisPro\Base\Traits\WithDisabled;
use MarisPro\Base\Traits\WithHelp;
use MarisPro\Base\Traits\WithPrefix;
use Illuminate\View\Component;

class File extends Component
{
    use WithPrefix, WithHelp, WithDisabled;

    public $props = [];
    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'disk' => config('filesystems.default'),
            'help' => null,
        ];

        $component->attrs = [
            'type' => 'file',
            'multiple' => false,
            'disabled' => false,
        ];

        return $component;
    }

    public function disk($disk)
    {
        $this->props['disk'] = $disk;

        return $this;
    }

    public function multiple()
    {
        $this->attrs['multiple'] = true;

        return $this;
    }

    public function render()
    {
        return view('laravel-livewire-forms::file');
    }
}
