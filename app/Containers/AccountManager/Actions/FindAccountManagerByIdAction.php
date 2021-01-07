<?php

namespace App\Containers\AccountManager\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindAccountManagerByIdAction extends Action
{
    public function run(Request $request)
    {
        $accountmanager = Apiato::call('AccountManager@FindAccountManagerByIdTask', [$request->id]);

        return $accountmanager;
    }
}