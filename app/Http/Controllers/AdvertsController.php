<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdvertFormRequest; // We will be using this to Validate POST inside store() acti
use App\Advert; // Use the Model to fetch from DB 

class AdvertsController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adverts = Advert::all();
        return view('adverts.index', compact('adverts'));

        // alernative way to pass objd to view
        // return view('adverts.index')->with('adverts', $adverts)
        // return view('adverts.index', ['adverts'=> $adverts ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adverts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    public function store(AdvertFormRequest $request)
    {
        // Validate POST Array.:: 
        // Pass the AAdvertFormRequest.php as a parametre to tell Laravell we want to apply validation to store()

        // After validation, return all POST[]
        //return $request->all();

        $slug = uniqid();

        $advertObj = new Advert(array(
            'ad_title' => $request->get('ad_title'),
            'ad_description' => $request->get('ad_description'),
            'img' => $request->get('img'),
            'category_id' => $request->get('category_id')
        ));

        $advertObj->save();

        return redirect('/create')->with('status', 'your advert has been created! its unique id: ' . $slug );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // When he clicks on Title of advert, Route:: takes user here to view details of single ad
        $advert = Advert::whereId($id)->firstOrFail();
        return view('adverts.show', compact('advert'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if he wants to change something on his advert
        $advert = Advert::whereId($id)->firstOrFail();
        return view('adverts.edit', compact('advert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)  
    public function update($id, AdvertFormRequest $request) // Use our Validation 
    {
        // wHEN he submits the Updatable <FORM>
        $advert = Advert::whereId($id)->firstOrFail();
        echo '<h3>'. $advert->ad_title .'</h3>';
        echo '<h3>'. $advert->id .'</h3>';

        $advert->ad_title = $request->get('ad_title');
        $advert->ad_description = $request->get('ad_description');
        
        $advert->save();
           
        //redirect
        return redirect(action('AdvertsController@edit', $advert->id) )->with('status', 'Ad with id: '.$id.' has been updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advert = Advert::whereId($id)->firstOrFail();
        $advert->delete();

        return redirect('/adverts')->with('status', 'The advert with ID '.$id.' has been deleted');
    }
}
