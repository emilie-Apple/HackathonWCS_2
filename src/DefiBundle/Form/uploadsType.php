<?php

namespace DefiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class uploadsType extends AbstractType
{

    /**

     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DefiBundle\Entity\uploads'));
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add ('uploads')
            ->add('file', 'file', array('label' => 'uploads', 'required' => false));
    ;
    }
    public function getName()
    {
        return 'DefiBundle_uploads';

}
}
