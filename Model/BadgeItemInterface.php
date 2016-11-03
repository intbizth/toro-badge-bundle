<?php

namespace Toro\Bundle\BadgeBundle\Model;

use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;

interface BadgeItemInterface extends
    BadgeItemTranslationInterface,
    CodeAwareInterface,
    TimestampableInterface,
    TranslatableInterface
{
    /**
     * @return BadgeClassInterface
     */
    public function getClass();

    /**
     * @param BadgeClassInterface $class
     */
    public function setClass(BadgeClassInterface $class);

    /**
     * @return BadgeTypeInterface
     */
    public function getType();

    /**
     * @param BadgeTypeInterface $type
     */
    public function setType(BadgeTypeInterface $type);
}
