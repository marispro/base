<?php
namespace MarisPro\Base\Traits;

trait WithAutofocus
{
    public function autofocus($autofocus = true)
    {
        $this->attrs['autofocus'] = $autofocus;

        return $this;
    }
}
