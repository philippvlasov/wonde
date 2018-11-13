<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Facades\Storage;
use Validator;

class AdminNewsController extends Controller
{
    private $rules = [
        'title' => 'required',
        'short_content' => 'required',
        'sub_title' => 'required',
        'post_content' => 'required',
        'category_id' => 'required|numeric',
        'views' => 'required|numeric',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allNews = News::paginate(5);

        return view('admin.news', ['allNews' => $allNews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.edit');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->passes()) {

            if($request->hasFile('img_name')) {
                $image = $request->file('img_name');
                $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images\placeholders');
                $image->move($destinationPath, $input['imagename']);
            } else {
                $input['imagename'] = '0';
            }



            News::insert([
                'title' => $request->title,
                'img_name' => 'images/placeholders/'. $input['imagename'],
                'short_content' => $request->short_content,
                'sub_title' => $request->sub_title,
                'content' => $request->post_content,
                'category_id' => $request->category_id,
                'views' => $request->views,
            ]);

            return redirect()->route('news.index');

        } else {

            return redirect()->back()->withErrors($validator)->withInput();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleNews = News::with('category')->find($id);

        return view('admin.show', ['singleNews' => $singleNews]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singleNews = News::with('category')->find($id);

        return view('admin.edit', ['singleNews' => $singleNews]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->passes()) {

            if($request->hasFile('img_name')) {
                $image = $request->file('img_name');
                $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images\placeholders');
                $image->move($destinationPath, $input['imagename']);

                News::where('id', $id)->update([
                    'img_name' => 'images/placeholders/'. $input['imagename'],
                ]);

            } else {
                News::where('id', $id)->update([
                    'title' => $request->title,
                    'short_content' => $request->short_content,
                    'sub_title' => $request->sub_title,
                    'content' => $request->post_content,
                    'category_id' => $request->category_id,
                    'views' => $request->views,
                ]);
            }

            return redirect()->route('news.show', ['id' => $id]);

        } else {

            return redirect()->back()->withErrors($validator)->withInput();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::where('id', $id)->delete();

        return redirect()->route('news.index');
    }
}
