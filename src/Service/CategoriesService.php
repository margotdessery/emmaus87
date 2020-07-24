<?php

namespace App\Service;

use App\Repository\CategoryRepository;

class CategoriesService
{

    private $categoryRepository;

    public function __construct( CategoryRepository $categoryRepository )
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getCategoriesList()
    {
        $categories = $this->categoryRepository->findAll();

        return $categories;
    }

}
