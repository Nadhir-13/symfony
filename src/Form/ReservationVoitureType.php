<?php

namespace App\Form;

use App\Entity\ReservationVoiture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationVoitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idVoiture',TextType::class,[
                "Voiture" => ' '
            ])
            ->add('id')
            ->add('idChauffeur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationVoiture::class,
        ]);
    }
}
