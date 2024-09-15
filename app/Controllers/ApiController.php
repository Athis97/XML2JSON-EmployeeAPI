<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Employee;
use CodeIgniter\HTTP\ResponseInterface;

class ApiController extends BaseController
{
    public function getEmployee()
    {
        // Validation rules
        $validationRules = [
            'token' => 'required',
            'id' => 'required|numeric'
        ];
        
        // Validate input
        if (!$this->validate($validationRules)) {
            $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST);
            return $this->response->setJSON($this->validator->getErrors());
        }

        // Retrieve inputs
        $token = $this->request->getVar('token');
        $id = $this->request->getVar('id');

        // Fetch employee from database
        $employeeModel = new Employee();
        $employee = $employeeModel->where(['token' => $token, 'id' => $id])->first();

        // Return response based on query result
        if ($employee) {
            return $this->response->setJSON($employee);
        } else {
            $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST);
            return $this->response->setJSON(['error' => 'Not found.']);
        }
    }
}
