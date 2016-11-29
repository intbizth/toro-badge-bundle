<?php

namespace Toro\Bundle\BadgeBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\EventSubscriber\AddCodeFormSubscriber;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Bundle\ResourceBundle\Form\Type\ResourceTranslationsType;
use Symfony\Component\Form\FormBuilderInterface;

class BadgeItemType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('class', BadgeClassChoiceType::class, [
                'required' => true,
                'label' => 'Class',
            ])
            ->add('type', BadgeTypeChoiceType::class, [
                'required' => true,
                'label' => 'Type',
            ])
            ->add('translations', ResourceTranslationsType::class, [
                'entry_type' => BadgeItemTranslationType::class,
            ])
            ->addEventSubscriber(new AddCodeFormSubscriber())
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'toro_badge_item';
    }
}
