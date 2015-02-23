<?php

namespace PR2L\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ElementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', 'choice', array('choices'   => array('titre' => 'Titre', 'auteur' => 'Auteur', 'date' => 'Date', 'paragraphe' => 'Paragraphe', 'image' => 'Image', 'lien' => 'Lien'), 'label'=>'Type '))
            ->add('contenu', 'textarea', array('label'=>'Contenu '))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PR2L\SiteBundle\Entity\Element'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pr2l_sitebundle_element';
    }
}
