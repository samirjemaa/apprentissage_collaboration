<?php

namespace App\Controller\Admin;

use App\Entity\NiveauScolaire;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NiveauScolaireCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NiveauScolaire::class;
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
