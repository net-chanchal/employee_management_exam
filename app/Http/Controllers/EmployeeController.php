<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('employees.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        Employee::create($request->all());

        return redirect()
            ->route('employees.index');
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id): View
    {
        $employee = Employee::findOrFail($id);

        return view('employees.details', compact('employee'));
    }
}
