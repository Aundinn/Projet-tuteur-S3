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
            ->add('template')
            ->add('theme')
            ->add('auteur')
            ->add('elements', 'collection', array(
                'type' => new ElementType(),
                'allow_add' => true,
                'allow_delete' => true,
            ))
            ->add('save', 'submit')
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
