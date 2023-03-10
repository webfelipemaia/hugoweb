<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class InformationController extends BaseController
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->setPageTitle('Informations', 'Manage Informations');
        return view('admin.informations.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        
        $keys = $request->except('_token');

        foreach ($keys as $key => $value)
        {
            Information::set($key, $value);
        }
        
        return $this->responseRedirectBack('Informations updated successfully.', 'success');
    }

}
