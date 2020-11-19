<?php namespace App\Controllers;

class AuthController extends BaseController
{
	public function login()
	{
        if ($this->request->getMethod() == 'post'){
			$rules = [
				'username' => 'required',
				'password' => 'required'
			];
            $validate = $this->validate($rules);
            if($validate){
                return view('Admin/index');
            }
            else{
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }
        }
    return view('auth/login');
    }


    public function register(){
		if ($this->request->getMethod() === 'post') {
			$rules = [
				'first_name' => [
					'label' => 'First Name',
					'rules' => 'required'
				],
				'last_name' => [
					'label' => 'Last Name',
					'rules' => 'required'
				],
				'username' => [
					'label' => 'Username',
					'rules' => 'required'
				],
				'email' => [
					'label' => 'E-Mail',
					'rules' => 'required'
				],
				'password' => [
					'label' => 'Password',
					'rules' => 'required'
				],
				'cpassword' => [
					'label' => 'Password Confirmation',
					'rules' => 'required'
				]
            ];
            $validate = $this->validate($rules);

            if($validate){
                return view ('Admin/index');
            }
            else
                return redirect()->back()->withInput()->with('validation', $this->validator);
    }
        return view('auth/register');    
    }
}
