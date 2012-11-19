<?php

namespace Lyd\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistroLegislativoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero_boletin')
            ->add('estado')
            ->add('suma_proyecto')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lyd\AdminBundle\Entity\RegistroLegislativo'
        ));
    }

    public function getName()
    {
        return 'lyd_adminbundle_registrolegislativotype';
    }
}
