<?php

namespace App\Repositories;

use App\Models\Festival;

class FestivalRepository
{
    public function getAllFestivals()
    {
      return Festival::all();
    }

    public function getWithCategory($category)
    {
        return Festival::   ->get()
    }

}
