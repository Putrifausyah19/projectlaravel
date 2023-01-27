<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function create(){
        return view('admin.applicant.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'education_bg' => 'required',
            'work_exp' => 'required',
        ],[
            'name.required' => 'nama belum dimasukkan',
            'address.required' => 'alamat belum dimasukkan',
            'phone_number.required' => 'nomor handphone belum dimasukkan',
            'gender.required' => 'jenis kelamin belum dimasukkan',
            'education_bg.required' => 'riwayat pendidikan belum dimasukkan',
            'work_exp.required' => 'pengalaman kerja belum dimasukkan',

        ]);
        applicant::create($request->all());

        return redirect()->route('applicant-index');

        //return redirect()->route('');
    }

    public function index(){
        $applicants = Applicant::all(); 

        return view('admin.applicant.index', compact("applicants"));

    }

    public function destroy($id){
        $applicant = Applicant::where("id", $id)->first();
        $applicant->delete();

        return redirect()->route("applicant-index");
    }

    public function edit($id){
        $applicant = Applicant::where("id", $id)->first();
        return view("admin.applicant.edit", compact("applicant"));
    }

    public function update(Request $request, $id){
        $applicant = Applicant::where("id", $id)->first();
        $applicant->update($request->all());

        return redirect()->route("applicant-index");
    }
}
