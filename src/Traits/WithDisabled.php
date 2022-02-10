<?php
namespace MarisPro\Base\Traits;

trait WithDisabled
{
    public function disabled($disabled = true)
    {
        $this->attrs['disabled'] = $disabled;

        return $this;
    }
}
