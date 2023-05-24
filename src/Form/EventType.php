<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, ["attr" => [
                "class"=>"form-control", "placeholder"=> "Type Event name"]
                ])
            ->add('eventdAt')
            ->add('description', null, ["attr" => [
                "class"=>"form-control",
                 "placeholder"=> "Type Event description"]
                ])
            ->add('picture', null, ["attr" => [
                "class"=>"form-control", "placeholder"=> "Type Event picture"]
                ])
            ->add('capacity', null, ["attr" => [
                "class"=>"form-control", "placeholder"=> "Type Event capacity"]
                ])
            ->add('E_mail', null, ["attr" => [
                "class"=>"form-control", "placeholder"=> "Type Event E_mail"]
                ])
            ->add('phone', null, ["attr" => [
                "class"=>"form-control", "placeholder"=> "Type Event phonenumber"]
                ])
            ->add('URL', null, ["attr" => [
                "class"=>"form-control", "placeholder"=> "Type Event URL"]
                ])
            ->add('eventstype', null, ["attr" => [
                "class"=>"form-control", "placeholder"=> "Type Event typ"]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
