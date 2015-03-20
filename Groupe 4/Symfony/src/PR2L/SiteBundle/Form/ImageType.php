<?php

namespace PR2L\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label'=>'Nom '))
            ->add('rendu', 'choice', array('label'=>'Rendu ', 'choices' => array('imgBanniere' => 'Image de bannière', 'imgCoin' => 'Image de coin', 'imgCarrousel' => 'Image de carrousel')))
            ->add('file', 'file', array('label' => 'Image '))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PR2L\SiteBundle\Entity\Image'
        ));
        
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pr2l_sitebundle_image';
    }
}
