<?php

namespace App\Controller\Admin;

use App\Entity\Book;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

class BookCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Book::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('title'),
            IntegerField::new('rate'),
            TextField::new('author'),
            TextField::new('homeEdition'),
            TextField::new('disponibility'),
            MoneyField::new('priceBook')->setCurrency('EUR'),
            ImageField::new('couvertureBook')->setBasePath('assets/uploads/book')
                                            ->setUploadDir('public/assets/uploads/book')
                                            ->setUploadedFileNamePattern('[randomhash].[extension]'), //pour qu'il differencie l'image d'origine et un nouvelle image
            TextareaField::new('commentLibraire'),
            TextareaField::new('commentUser'),
            IntegerField::new('codeEAN'),
            IntegerField::new('codeISBN'),
            TextField::new('editeur'),
            DateField::new('publicationDate'),
            TextField::new('collection'),
            IntegerField::new('pageNumber'),
            TextField::new('dimension'),
            TextField::new('poids'),
            TextField::new('langue'),
            TextField::new('langueOriginale')
        ];
    }

}
