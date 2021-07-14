<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\API\CustomDataController;
use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getData(Request $request){
        if ($request->columnKey) $columnName = $request->columnKey;
        if ($request->rowLimit) $limit = $request->rowLimit;
        $offset = $request->rowOffset;

        $data = Services::orderBy($columnName, $request->columnSortedBy)->take($limit)->skip($offset)->get();
        $data = $this->makeDataReadAble($data);

        $customData = new CustomDataController();
        $addCustomData = $customData->showCustomDataInDataTable('service', $data);

        $data = $addCustomData['data'];
        $columnName = $addCustomData['columnName'];
        $customDateId = $addCustomData['customDateId'];

        $totalCount = Services::count();

        return ['dataRows' => $data, 'count' => $totalCount, 'columnName' => $columnName, 'customDateId' => $customDateId];
    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.services');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
