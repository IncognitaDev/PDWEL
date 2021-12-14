<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\ModelTask;
use App\Models\ModelCategory;

class TodoController extends Controller
{
    private $objTask;
    private $objCategory;

    public function __construct()
    {
        $this->objTask = new ModelTask();
        $this->objCategory = new ModelCategory();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->objTask->all();
        $categories = $this->objCategory->all();
        return view('index', compact('tasks', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {

        $status = $request->status ? $request->status : 0;
        $cad = $this->objTask->create([
            'description' => $request->description,
            'status' => $status,
            'id_category' => $request->id_category,
        ]);
        if ($cad) {
            return redirect('/');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request)
    {
        $status = $request->status ? $request->status : 0;
        $this->objTask->where(['id' => $request->id])->update([
            'description' => $request->description,
            'status' => $status,
            'id_category' => $request->id_category,
        ]);

        return redirect('/');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->objTask->destroy($id);
        return ($del) ? "sim" : "não";
    }
}
