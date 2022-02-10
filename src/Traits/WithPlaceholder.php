<?php
namespace MarisPro\Base\Traits;

trait WithPlaceholder
{
    public function placeholder($placeholder)
    {
        $this->attrs['placeholder'] = $placeholder;

        return $this;
    }
}
