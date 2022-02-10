<?php
namespace MarisPro\Base\Traits;

trait WithHelp
{
    public function help($help)
    {
        $this->props['help'] = $help;

        return $this;
    }
}
