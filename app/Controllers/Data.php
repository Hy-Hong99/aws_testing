<?php namespace App\Controllers;
use App\Models\UserModel;
class Data extends BaseController
{
	public function index()
	{
        $user = new UserModel();
        $data['users'] = $user->findAll();

		return view('pages/database', $data);
	}

	//--------------------------------------------------------------------

}
