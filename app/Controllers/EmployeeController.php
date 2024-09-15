<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Employee;

class EmployeeController extends BaseController
{
    public function register()
    {
        return view('employee_register');
    }

    public function save()
    {
        helper(['form', 'url']);

        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[100]',
            'email' => 'required|valid_email|is_unique[employees.email]'
        ]);

        if (!$this->validate($validation->getRules())) {
            return view('employee_register', [
                'validation' => $this->validator
            ]);
        } else {
            $employeeModel = new Employee();
            $token = bin2hex(random_bytes(10));

            $employeeModel->save([
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'token' => $token
            ]);

            return redirect()->to('/employee/success');
        }
    }

    public function success()
    {
        return view('employee_success');
    }
}
