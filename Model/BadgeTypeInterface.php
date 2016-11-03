<?php

namespace Toro\Bundle\BadgeBundle\Model;

use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;

interface BadgeTypeInterface extends
    BadgeClassTranslationInterface,
    TranslatableInterface,
    TimestampableInterface
{

}
