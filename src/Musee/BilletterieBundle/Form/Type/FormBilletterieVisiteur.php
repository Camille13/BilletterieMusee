<?php

// src/Musee/BilletterieBundle/Form/Type/FormBilletterieVisiteur.php


namespace Musee\BilletterieBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormBilletterieVisiteur extends AbstractType
{
	
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                        $builder->add('nom',  TextType::class, array('required' => true))
				->add('prenom',  TextType::class, array('required' => true))
				->add('born', TextType::class, array('required' => true))
				->add('pays', TextType::class, array('required' => true))
				->add('tarifReduit', CheckboxType::class, array('label' => 'Tarif réduit','required' => false));
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