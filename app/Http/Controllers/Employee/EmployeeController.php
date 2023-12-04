<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function home()
    {
        $data['page_title'] = 'Home';

        return view('employee.home', $data);
    }

    public function my_kpi()
    {
        $data['page_title'] = 'My KPI';

        return view('employee.my-kpi', $data);
    }

    public function employee_details()
    {
        $data['page_title'] = 'Employee Details';

        return view('employee.employee-details', $data);
    }
}
