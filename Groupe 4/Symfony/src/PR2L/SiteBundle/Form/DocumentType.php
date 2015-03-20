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
    {/*
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
        ;*/
        
        $builder
            ->add('type', 'choice', array('label'=>'Type de l\'article', 'choices' => array('fondateurs' => 'Fondateurs', 'news' => 'News')))
            ->add('template', 'choice', array('label'=>'Template à utiliser', 'choices' => array('banniereSeule' => 'Bannière seule', 'imageCoin' => 'Image en coin', 'banniereEtCarousel' => 'Bannière et carousel')))
            ->add('titre', 'text', array('label'=>'Titre'))
            ->add('date', 'datetime', array('label'=>'Date'))
            ->add('texte', 'textarea', array('label'=>'Contenu'))
            ->add('imageBanniere', 'text', array('label'=>'Image de bannière', 'required' => false))
            ->add('imageCoin', 'text', array('label'=>'Image en coin', 'required' => false))
            ->add('imagesCarousel', 'text', array('label'=>'Images de carousel', 'required' => false))
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
