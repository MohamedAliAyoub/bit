<?php

namespace App\Http\Controllers;

use App\Salary;
use Illuminate\Http\Request;
use App\DataTables\SalariesDataTable;


class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       public function sum()
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
        return  $total;



    }


    public function index(SalariesDataTable $dataTable)
    {
      $sum=  $this->sum();
     
        return $dataTable->render('admin.salary' , compact('sum'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
        return view('admin.salary_create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary= Salary::create($request->all());  
        return redirect()->route('salary.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $salary= Salary::find($id);
        return view('admin.edit_bonus' , compact('salary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $salary= Salary::find($id); 
        $salary->update($request->all());
        // dd($request->all());
        return redirect()->route('salary.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salary $salary)
    {
        //
    }
}
