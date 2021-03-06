<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Applicationform;
use App\Facility;

class ApplicationController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a list of all of the facility's application form.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request) {
        \DB::enableQueryLog();
        // $branches = \Auth::user()->assignedBranches();
$inside="no";
        if (in_array("System Admin", \Auth::user()->getRoleArray())) {
            $branches = \DB::table("facilities")->where('parent_id',"<>",null)->get();
            $appforms = Applicationform::all();
            $inside ="yes";
        } else {
        
        $branches = \Auth::user()->assignedBranches();


        }


            if (!empty($request->branches) && (int)$request->branches > 0) {
                $num=(int)trim($request->branches);
                $appforms = Applicationform::all()->where('facility_id', $num);
//$inside="yes";
                // return $request->branches;
            // } else {
            //     $appforms = Applicationform::all()->where('facility_id', $branches[0]->id);
            //     //  return $appforms;
            }
        //var_dump($appforms);
       // dd(
       //        $appforms, $branches,  $request->branches, \DB::getQueryLog(), $inside
       // );
        return view('applicationForm.grid', [
            'appforms' => $appforms,
            'branches' => $branches,
            'old' => $request,
        ]);
    }

    /**
     * Create a application Form.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        if (empty($request->id)) {
            $appForm = new Applicationform();
        } else {
            $appForm = Applicationform::find($request->id);
        }
        $appForm->title = $request->title;
        $appForm->first_name = $request->first_name;
        $appForm->last_name = $request->last_name;
        $appForm->h_address = $request->h_address;
        $appForm->h_suburb = $request->h_suburb;
        $appForm->h_state = $request->h_state;
        $appForm->h_postcode = $request->h_postcode;
        $appForm->h_email = $request->h_email;
        $appForm->h_phone = $request->h_phone;
        $appForm->date_of_birth = $request->date_of_birth;
        $appForm->gp_fullname = $request->gp_fullname;
        $appForm->gp_address = $request->gp_address;
        $appForm->gp_suburb = $request->gp_suburb;
        $appForm->gp_state = $request->gp_state;
        $appForm->gp_postcode = $request->gp_postcode;
        $appForm->gp_phone_1 = $request->gp_phone_1;
        $appForm->gp_phone_2 = $request->gp_phone_2;
        $appForm->facility_id = $request->facility_id;



        $appForm->save();

        return redirect("/application/");
    }

    /**
     * Display an application Form.
     *
     * @param  Request  $request
     * @return Response
     */
    public function form(Request $request, Applicationform $formId) {
        if (!empty($formId)) {
            $old = $formId;
        } else {
            $old = $request;
        }

        $facilities = \Auth::user()->assignedBranches();

        return view('applicationForm.form', ['old' => $old,
            'facilities' => $facilities
        ]);
    }

    /**
     * Exports an application Form to PDF using template in blade.
     *
     * @param  Request  $request
     * @return Response
     */
    public function export(Request $request, Applicationform $formId) {
        if (!empty($formId)) {
            $old = $formId;
        } else {
            $old = $request;
        }

        //Using template blade, generate view and export to PDF
        $pdf = \PDF::loadView('applicationform.pdf', ['old' => $old]);
        return $pdf->download('appform.pdf');

        //Alternate method to export pdf - Commented code
        /*
          $pdf = \App::make('dompdf.wrapper');
          $pdf->loadHTML('<h1> Name is : ' . $old->first_name  . '</h1>');
          return $pdf->stream();
         */
    }

}
