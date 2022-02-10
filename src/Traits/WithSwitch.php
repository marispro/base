<?php
namespace MarisPro\Base\Traits;

trait WithSwitch
{
    public function switch()
    {
        $this->props['switch'] = true;

        return $this;
    }
}
