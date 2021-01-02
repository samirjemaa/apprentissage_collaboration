<?php

namespace App\Controller\Admin;

use App\Entity\TP;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TPCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TP::class;
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
