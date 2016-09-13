<?php

// src/Musee/BilletterieBundle/Form/Type/FormBilletterieGeneral.php


namespace Musee\BilletterieBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormBilletterieGeneral extends AbstractType
{
	
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date',  TextType::class)
				->add('nom',  TextType::class)
				->add('prenom',  TextType::class)
				->add('type',ChoiceType::class, array(
    'choices'  => array(
        'Journée' => 'J',
        'Demi-journée' => 'D',)))
				->add('quantite', TextType::class)
				->add('email', TextType::class)
				->add('Suivant', SubmitType::class);
        $builder->getForm();
		
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Musee\BilletterieBundle\Entity\Commande',
        ));
    
    }

    }



	
	
	
	
	
	
	
	
  
  
  
  
  
  
  



?>