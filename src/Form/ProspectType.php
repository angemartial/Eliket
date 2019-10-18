<?php

namespace App\Form;

use App\Entity\Prospects;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProspectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'required'=>'true',
                'label'=>'false',
                'attr'=>[
                    'placeholder'=>'Prénoms',
                    'class'=>'form-control '
                ]
            ])
            ->add('lastname',TextType::class, [
                'required'=>'true',
                'label'=>'false',
                'attr'=>[
                    'placeholder'=>'Nom',
                    'class'=>'form-control'
                ]
            ])
            ->add('email',EmailType::class, [
                'required'=>'true',
                'label'=>'false',
                'attr'=>[
                    'placeholder'=>'Adresse email',
                    'class'=>'form-control'
                ]
            ])
            ->add('phone',NumberType::class, [
                'required'=>'true',
                'label'=>'false',
                'attr'=>[
                    'placeholder'=>'Téléphone',
                    'class'=>'form-control'
                ]
            ])
            ->add('message',TextareaType::class, [
                'required'=>'true',
                'label'=>'false',
                'attr'=>[
                    'placeholder'=>'Message',
                    'class'=>'form-control w-100 ',
                    'cols'=>'30',
                    'rows'=>'9'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prospects::class,
        ]);
    }
}
