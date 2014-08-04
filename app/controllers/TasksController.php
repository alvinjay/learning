<?php

class TasksController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /tasks
     *
     * @return Response
     */
    public function index()
    {
        //fetch all tasks
        $todos  = Task::whereCompleted(false)->orderBy('due_date', 'asc')->get();

        //load a view to display tasks
        return View::make('tasks.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     * GET /tasks/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /tasks
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /tasks/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);

        return View::make('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     * GET /tasks/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /tasks/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /tasks/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}