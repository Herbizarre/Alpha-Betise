<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('rate')
            ->add('author')
            ->add('homeEdition')
            ->add('disponibility')
            ->add('priceBook')
            ->add('couvertureBook')
            ->add('commentLibraire')
            ->add('commentUser')
            ->add('codeEAN')
            ->add('codeISBN')
            ->add('editeur')
            ->add('publicationDate')
            ->add('collection')
            ->add('pageNumber')
            ->add('dimension')
            ->add('poids')
            ->add('langue')
            ->add('langueOriginale')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
