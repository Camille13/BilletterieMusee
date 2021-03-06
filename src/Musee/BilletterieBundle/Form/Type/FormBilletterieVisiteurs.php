<?php

// src/Musee/BilletterieBundle/Form/Type/FormBilletterieGeneral.php


namespace Musee\BilletterieBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class FormBilletterieVisiteurs extends AbstractType
{
	
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ligneCommande', CollectionType::class, array('entry_type' => FormBilletterieVisiteur::class, 'allow_extra_fields' => true,     'allow_add'    => true,
                'allow_delete' => true,  ))
                ->add('Valider', SubmitType::class);
        $builder->getForm();





    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Musee\BilletterieBundle\Entity\Commande',
        ));
    
    }

    }



	
	
