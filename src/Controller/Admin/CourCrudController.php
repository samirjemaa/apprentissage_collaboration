<?php

namespace App\Controller\Admin;

use App\Entity\Cour;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CourCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cour::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
