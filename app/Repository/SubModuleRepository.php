<?php

namespace App\Repository;
use App\Models\Submodules;
use App\Repository\Interfaces\SubModuleRepositoryInterfaces;
use Illuminate\Http\Request;

class SubModuleRepository implements SubModuleRepositoryInterfaces{
    public function getAllData(array $relations){
        return Submodules::with($relations)->get();
    }

    public function getDataById($id){
        return null;
    }

    public function createData(Request $request){
        return null;
    }

    public function deleteDataById($id){
        return null;
    }

    public function updateDataById($id, Request $request){
        return null;
    }
}
