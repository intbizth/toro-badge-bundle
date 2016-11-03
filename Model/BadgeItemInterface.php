<?php

namespace Toro\Bundle\BadgeBundle\Model;

use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;

interface BadgeItemInterface extends
    BadgeItemTranslationInterface,
    CodeAwareInterface,
    TimestampableInterface
{
    /**
     * @return BadgeClassInterface
     */
    public function getClass(): BadgeClassInterface;

    /**
     * @param BadgeClassInterface $class
     */
    public function setClass(BadgeClassInterface $class);

    /**
     * @return BadgeTypeInterface
     */
    public function getType(): BadgeTypeInterface;

    /**
     * @param BadgeTypeInterface $type
     */
    public function setType(BadgeTypeInterface $type);
}
