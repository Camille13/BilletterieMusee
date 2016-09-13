<?php

// src/Musee/BilletterieBundle/Form/Type/FormBilletterieVisiteur.php


namespace Musee\BilletterieBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormBilletterieVisiteur extends AbstractType
{
	
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom',  TextType::class)
				->add('prenom',  TextType::class)
				->add('born', DateType::class)
				->add('tarif_reduit', CheckboxType::class, array('label' => 'Tarif réduit','required' => false,))
				->add('Valider', SubmitType::class);
        $builder->getForm();
		
    }
	

    
      public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Musee\BilletterieBundle\Entity\LigneCommande',
        ));
    
    }


    }



	
	
	
	
	
	
	
	
  
  
  
  
  
  
  



?>