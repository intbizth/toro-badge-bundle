<?php

namespace Toro\Bundle\BadgeBundle\Model;

use Sylius\Component\Resource\Model\TimestampableTrait;
use Sylius\Component\Resource\Model\TranslatableTrait;

/**
 * @method BadgeItemTranslation getTranslation($local = null)
 */
class BadgeType implements BadgeTypeInterface
{
    use TimestampableTrait;

    use TranslatableTrait {
        __construct as private initializeTranslationsCollection;
    }

    /**
     * @var int
     */
    private $id;

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
    public function getName()
    {
        return $this->getTranslation()->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->getTranslation()->setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return (string) $this->getTranslation()->getName();
    }

    /**
     * {@inheritdoc}
     */
    protected function createTranslation()
    {
        return new BadgeTypeTranslation();
    }
}
