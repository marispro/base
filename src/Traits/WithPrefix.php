<?php
namespace MarisPro\Base\Traits;

trait WithPrefix
{
    public function prefix($prefix): static
    {
        if ( !empty($prefix)) {
            $this->props['prefix'] = $prefix . '.';
        }

        return $this;
    }
}
