<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Rules\Phonenumber;
use Illuminate\Http\Request;
use App\Http\Requests\SaveCompanyRequest;



class CompaniesController extends Controller
{
    public function index()
    {

        $companies = Company::orderByDesc('created_at')->paginate(20);
        return view('companies.index', [
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {

        $company = new Company();

        return view('companies.create',[
            'company' => $company
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SaveCompanyRequest $request)
    {

        Company::create($request->validated());

        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show', [
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Company $company)
    {
        return view('companies.edit', [

            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $data = $request->validate([
            'name' => 'bail|required|min:5',
            'adress' => 'required',
            'phone' => ['required', 'numeric', new PhoneNumber]
        ]);

        $company->update($data);

        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Company $company
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index');
    }

    public function validatedData()
    {
        return request()->validate([
            'name' => 'bail|required|min:5',
            'adress' => 'required',
            'phone' => ['required', 'numeric', new PhoneNumber]
        ]);
    }
}


