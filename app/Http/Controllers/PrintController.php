<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\IzinPulang;

class PrintController extends Controller
{
       public function index()

      {
      	$this->izinPulangRepository->pushCriteria(new RequestCriteria($request));
        $izinPulangs = $this->izinPulangRepository->all();

        return view('surat_izin.suratizin')->with('izinPulangs', $izinPulangs);

              // $students = Student::all();

              // return view('printstudent')->with('students', $students);;

     }

    

     public function prinptriview()

     {

              // $students = Student::all();

              // return view('students')->with('students', $students);;

     }
}
