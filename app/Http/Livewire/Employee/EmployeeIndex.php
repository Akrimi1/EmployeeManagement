<?php

namespace App\Http\Livewire\Employee;

use App\Models\Employee;
use App\Models\Department;
use Carbon\Carbon;
use Livewire\Component;

class EmployeeIndex extends Component
{
    public $search = '';
    public $lastName;
    public $firstName;
    public $middleName;
    public $address;
    public $countryId;
    public $stateId;
    public $cityId;
    public $departmentId;
    public $zipCode;
    public $birthDate;
    public $dateHired;
    public $editMode = false;
    public $employeeId;
    public $selectedDepartmentId = null;

    protected $rules = [
        'lastName' => 'required',
        'firstName' => 'required',
        'middleName' => 'required',
        'address' => 'required',
        'countryId' => 'required',
        'stateId' => 'required',
        'cityId' => 'required',
        'departmentId' => 'required',
        'zipCode' => 'required',
        'birthDate' => 'required',
        'dateHired' => 'required',
    ];

    public function showEditModal($id)
    {
        $this->reset();
        $this->employeeId = $id;
        $this->loadEmployee();
        $this->editMode = true;
        $this->dispatchBrowserEvent('modal', ['modalId' => '#employeeModal', 'actionModal' => 'show']);
    }

    public function loadEmployee()
    {
        $employee = Employee::find($this->employeeId);
        $this->firstName = $employee->firstname;
        $this->lastName = $employee->lastname;
        $this->middleName = $employee->middle_name;
        $this->address = $employee->address;
        $this->countryId = $employee->country_id;
        $this->stateId = $employee->state_id;
        $this->cityId = $employee->city_id;
        $this->departmentId = $employee->department_id;
        $this->zipCode = $employee->zip_code;
        $this->birthDate = $employee->birthdate;
        $this->dateHired = $employee->date_hired;
    }
    public function deleteEmployee($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        session()->flash('employee-message', 'Employee successfully deleted');
    }
    public function showEmployeeModal()
    {
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#employeeModal', 'actionModal' => 'show']);
    }
    public function closeModal()
    {
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#employeeModal', 'actionModal' => 'hide']);
    }
    public function storeEmployee()
    {
        $this->validate();
        Employee::create([
            'lastname' => $this->lastName,
            'firstname' => $this->firstName,
            'middle_name' => $this->middleName,
            'address' => $this->address,
            'country_id' => $this->countryId,
            'state_id' => $this->stateId,
            'city_id' => $this->cityId,
            'department_id' => $this->departmentId,
            'zip_code' => $this->zipCode,
            'birthdate' => $this->birthDate,
            'date_hired' => $this->dateHired,
       ]);
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#employeeModal', 'actionModal' => 'hide']);
        session()->flash('employee-message', 'Employee successfully created');
    }
    public function updateEmployee()
    {
        $this->validate();
        $employee = Employee::find($this->employeeId);
        $employee->update([
            'lastname' => $this->lastName,
            'firstname' => $this->firstName,
            'middle_name' => $this->middleName,
            'address' => $this->address,
            'country_id' => $this->countryId,
            'state_id' => $this->stateId,
            'city_id' => $this->cityId,
            'department_id' => $this->departmentId,
            'zip_code' => $this->zipCode,
            'birthdate' => $this->birthDate,
            'date_hired' => $this->dateHired,
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#employeeModal', 'actionModal' => 'hide']);
        session()->flash('employee-message', 'Employee successfully updated');
    }
    public function render()
    {
        $employees = Employee::all();
        if (strlen($this->search) > 2) {
            if ($this->selectedDepartmentId) {
                $employees = Employee::where('firstname', 'like', "%{$this->search}%")
                             ->where('department_id', $this->selectedDepartmentId)
                             ->get();
            } else {
                $employees = Employee::where('firstname', 'like', "%{$this->search}%")->get();
            }
        } elseif ($this->selectedDepartmentId) {
            $employees = Employee::where('department_id', $this->selectedDepartmentId)->get();
        }
        $departments = Department::all();
        return view('livewire.employee.employee-index', [
            'employees' => $employees,
            'departments' => $departments
            ])->layout('layouts.main');
    }
}