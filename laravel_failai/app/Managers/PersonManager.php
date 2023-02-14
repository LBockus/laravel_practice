<?php

namespace App\Managers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonManager
{
    public function createPerson(Request $request)
    {
        DB::beginTransaction();
        $person = Person::create();
        DB::commit();
    }
}
