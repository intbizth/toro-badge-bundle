<?php

namespace Toro\Bundle\BadgeBundle\Model;

use Sylius\Component\Resource\Model\TimestampableTrait;
use Sylius\Component\Resource\Model\TranslatableTrait;

class BadgeItem implements BadgeItemInterface
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
     * @var BadgeClassInterface
     */
    private $class;

    /**
     * @var BadgeTypeInterface
     */
    private $type;

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
    public function getDescription()
    {
        return $this->translate()->getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->translate()->setDescription($description);
    }

    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * {@inheritdoc}
     */
    public function setClass(BadgeClassInterface $class)
    {
        $this->class = $class;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function setType(BadgeTypeInterface $type)
    {
        $this->type = $type;
    }
}
