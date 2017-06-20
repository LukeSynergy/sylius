<?php

namespace AppBundle\Form\Extension;

use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('konrad', TextType::class, [
            'required' => false,
            'label' => 'product.konrad',
        ]);
    }
    
    public function getExtendedType()
    {
        return ProductType::class;
    }
}