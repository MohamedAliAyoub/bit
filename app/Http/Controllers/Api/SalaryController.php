<?php

namespace App\Http\Controllers\Api;


use App\Salary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ApiToken;



class SalaryController extends Controller
{
    public function sum_salary()
    {

     
        $sum_salary = 0;
        $sum_bonuc = 0;
        foreach (Salary::get() as  $salary) {
         
            $sum_salary += $salary->salary;   
            $sum_bonuc  += $salary->bonus*$salary->salary/100;   
        }
        $total_salary = $sum_salary + $sum_bonuc;
         $total['sum_salary'] = $sum_salary;
        $total['sum_bonuc'] = $sum_bonuc;
        $total['total_salary'] = $total_salary;
        
        return response()->json( $total, 200);            
    }


    
}
