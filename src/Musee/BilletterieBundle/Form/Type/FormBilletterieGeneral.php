<?php

// src/Musee/BilletterieBundle/Form/Type/FormBilletterieGeneral.php


namespace Musee\BilletterieBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Musee\BilletterieBundle\Form\Type\FormBilletterieVisiteur;
use Symfony\Component\OptionsResolver\OptionsResolver;



class FormBilletterieGeneral extends AbstractType
{
	
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date',  TextType::class)	
                ->add('type',ChoiceType::class, array('choices'  => array('Journée' => 'J','Demi-journée' => 'D',)))
                ->add('ligneCommande', CollectionType::class, array('entry_type' => FormBilletterieVisiteur::class, 'allow_extra_fields' => true,     'allow_add'    => true,
                'allow_delete' => true,  ))
                ->add('email', TextType::class, array('required' => true))
                ->add('quantite', IntegerType::class)
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



	
	
	
	
	
	
	
	
  
  
  
  
  
  
  



?>