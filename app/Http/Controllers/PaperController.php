<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paper;
use App\Phase;
use App\PaperTypes;
use App\ResearchTypes;

use DB;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

//use App\Http\Controllers\Session; DOES NOT WORK
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Log;

class PaperController extends Controller
{
	
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
   /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
  public function index()
  {
	//$papers = Paper::all(); 

	//return view('papers.index')->with("papers", $papers);
	
	$papers = DB::table('papers')->paginate(10);
	
	return view('papers.index',['papers'=>$papers]);
  }
  
  /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$phases = Phase::all();  
		$types = PaperTypes::all();
		$research = ResearchTypes::all();
        return view('papers.create')->with('phases', $phases)->with("types", $types)->with("research",$research);
    }
	
	  /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {		
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
			'technique'  => 'required',
			'objective'  => 'required',
			'phase'		 => 'required',
            'paperType' => 'required',
			'researchType' => 'required',
			'origin' => 'required',
			'reference' => 'required',
			'environment' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
		
		// process the login
        if ($validator->fails()) {
            return Redirect::to('papers/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
			// store
            $paper = new Paper;
            $paper->name       = Input::get('name');
			$paper->technique  = Input::get('technique');
			$paper->objective  = Input::get('objective');
			$paper->phase      = Input::get('phase');
			$paper->researchType = Input::get('researchType');
			$paper->origin     = Input::get('origin');
			$paper->environment = Input::get('environment');
            $paper->paperType  = Input::get('paperType');
			$paper->reference  = Input::get('reference');
            $paper->save();

            // redirect
            Session::flash('message', 'Successfully created paper!');
            return Redirect::to('papers');
        }
    }
	
	/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the Paper
        $paper = Paper::find($id);
		
		$phases = Phase::all();  
		$types = PaperTypes::all();
		$research = ResearchTypes::all();
		
		// show the view and pass the Paper to it
        return view('papers.edit')->with('paper', $paper)->with('phases', $phases)->with("types", $types)->with("research",$research);
    }
	
	 /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
		
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
		
            'name'       => 'required',
			'technique'  => 'required',
			'objective'  => 'required',
			'phase'		 => 'required',
            'paperType' => 'required',
			'researchType' => 'required',
			'origin' => 'required',
			'reference' => 'required',
			'environment' => 'required'
			
        );
        $validator = Validator::make(Input::all(), $rules);
		
		// process the login
        if ($validator->fails()) {
			return redirect()->action(
				'PaperController@edit', ['id' => $id]
			);
        } else {
			// store
            $paper = Paper::find($id);
			
            $paper->name       = Input::get('name');
			$paper->technique  = Input::get('technique');
			$paper->objective  = Input::get('objective');
			$paper->phase      = Input::get('phase');
			$paper->researchType = Input::get('researchType');
			$paper->origin     = Input::get('origin');
			$paper->environment = Input::get('environment');
            $paper->paperType  = Input::get('paperType');
			$paper->reference  = Input::get('reference');
            $paper->save();

            // redirect
            Session::flash('message', 'Successfully updated paper!');
            return Redirect::to('papers');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete
        $paper = Paper::find($id);
        $paper->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the paper!');
        return Redirect::to('papers');
    }
	
	
  /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
  public function show($id)
  {
		// get the Paper
        $paper = Paper::find($id);

        // show the view and pass the Paper to it
		return view('papers.show')->with('paper', $paper);
  }
}
