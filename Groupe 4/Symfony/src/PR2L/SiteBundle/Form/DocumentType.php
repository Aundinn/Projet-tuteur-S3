<?php

namespace PR2L\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocumentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('template', 'text', array('label'=>'Template à utiliser'))
            ->add('theme', 'text', array('label'=>'Thème de l\'article'))
            ->add('auteur', 'text', array('label'=>'Auteur'))
            ->add('elements', 'collection', array(
                'type' => new ElementType(),
                'allow_add' => true,
                'allow_delete' => true,
                'label' => 'Eléments de l\'article',
            ))
            ->add('save', 'submit', array('label'=>'Valider', 'attr' => array('class' => 'plus_moins')))
            ->setMethod("POST")->setAction('#')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PR2L\SiteBundle\Entity\Document'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pr2l_sitebundle_document';
    }
}
