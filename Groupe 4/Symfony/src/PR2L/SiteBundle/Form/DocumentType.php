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
            ->add('type', 'choice', array('label'=>'Type de l\'article', 'choices' => array('fondateurs' => 'Fondateurs', 'news' => 'News')))
            ->add('template', 'choice', array('label'=>'Template à utiliser', 'choices' => array('banniereSeule' => 'Bannière seule', 'imageCoin' => 'Image en coin', 'banniereEtCarousel' => 'Bannière et carrousel')))
            ->add('titre', 'text', array('label'=>'Titre'))
            ->add('auteur', 'text', array('label'=>'Auteur'))
            ->add('texte', 'textarea', array('label'=>'Contenu'))
            ->add('images', 'collection', array(
                'type' => new ImageType(),
                'allow_add' => true,
                'allow_delete' => true,
                'label' => 'Image(s)',
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
