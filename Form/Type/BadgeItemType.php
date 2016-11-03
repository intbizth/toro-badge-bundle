<?php

namespace Toro\Bundle\BadgeBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\EventSubscriber\AddCodeFormSubscriber;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Bundle\ResourceBundle\Form\Type\ResourceTranslationsType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class BadgeItemType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('class', 'toro_badge_class_choice', [
                'required' => true,
                'label' => 'Class',
            ])

            ->add('type', 'toro_badge_type_choice', [
                'required' => true,
                'label' => 'Type',
            ])

            ->add('translations', ResourceTranslationsType::class, [
                'type' => 'toro_badge_item_translation'
            ])

            ->addEventSubscriber(new AddCodeFormSubscriber())
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'toro_badge_item';
    }
}
