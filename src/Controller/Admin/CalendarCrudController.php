<?php

namespace App\Controller\Admin;

use App\Entity\Calendar;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class CalendarCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Calendar::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('title'),
            DateTimeField::new('start'),
            DateTimeField::new('end'),
            TextAreaField::new('description'),
            BooleanField::new('all_day'),
            TextField::new('background_color'),
            TextField::new('border_color'),
            TextField::new('text_color'),
            ImageField::new('event_cover')->setBasePath('assets/uploads/event')
                                          ->setUploadDir('public/assets/uploads/event')
                                          ->setUploadedFileNamePattern('[randomhash].[extension]'), //pour qu'il differencie l'image d'origine et un nouvelle image,
            TextField::new('event_place'),
            TextField::new('audience'),
            BooleanField::new('reservation'),
            IntegerField::new('max_people'),
            MoneyField::new('price')->setCurrency('EUR'),
            BooleanField::new('free'),



        ];
    }
    
}
