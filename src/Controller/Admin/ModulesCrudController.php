<?php

namespace App\Controller\Admin;

use App\Entity\Modules;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ModulesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Modules::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('codeModule'),
            TextField::new('libelle'),
            TextEditorField::new('description'),
        ];
    }
    
}
