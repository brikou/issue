<?php

namespace My;

trait Issue1058
{
    /**
     * @Doctrine\ORM\Mapping\Column(type="string")
     */
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
