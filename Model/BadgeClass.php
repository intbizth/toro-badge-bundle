<?php

namespace Toro\Bundle\BadgeBundle\Model;

use Sylius\Component\Resource\Model\TimestampableTrait;
use Sylius\Component\Resource\Model\TranslatableTrait;

class BadgeClass implements BadgeClassInterface
{
    use TimestampableTrait;

    use TranslatableTrait {
        __construct as private initializeTranslationsCollection;
    }

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $color;

    public function __construct()
    {
        $this->initializeTranslationsCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * {@inheritdoc}
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->translate()->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->translate()->setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * {@inheritdoc}
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return (string) $this->translate()->getName();
    }
}
