<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataSantriRequest;
use App\Http\Requests\UpdateDataSantriRequest;
use App\Repositories\DataSantriRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DataSantriController extends AppBaseController
{
    /** @var  DataSantriRepository */
    private $dataSantriRepository;

    public function __construct(DataSantriRepository $dataSantriRepo)
    {
        $this->dataSantriRepository = $dataSantriRepo;
    }

    /**
     * Display a listing of the DataSantri.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dataSantriRepository->pushCriteria(new RequestCriteria($request));
        $dataSantris = $this->dataSantriRepository->all();

        return view('data_santris.index')
            ->with('dataSantris', $dataSantris);
    }

    /**
     * Show the form for creating a new DataSantri.
     *
     * @return Response
     */
    public function create()
    {
        return view('data_santris.create');
    }

    /**
     * Store a newly created DataSantri in storage.
     *
     * @param CreateDataSantriRequest $request
     *
     * @return Response
     */
    public function store(CreateDataSantriRequest $request)
    {
        $input = $request->all();

        $dataSantri = $this->dataSantriRepository->create($input);

        Flash::success('Data Santri saved successfully.');

        return redirect(route('dataSantris.index'));
    }

    /**
     * Display the specified DataSantri.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataSantri = $this->dataSantriRepository->findWithoutFail($id);

        if (empty($dataSantri)) {
            Flash::error('Data Santri not found');

            return redirect(route('dataSantris.index'));
        }

        return view('data_santris.show')->with('dataSantri', $dataSantri);
    }

    /**
     * Show the form for editing the specified DataSantri.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataSantri = $this->dataSantriRepository->findWithoutFail($id);

        if (empty($dataSantri)) {
            Flash::error('Data Santri not found');

            return redirect(route('dataSantris.index'));
        }

        return view('data_santris.edit')->with('dataSantri', $dataSantri);
    }

    /**
     * Update the specified DataSantri in storage.
     *
     * @param  int              $id
     * @param UpdateDataSantriRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataSantriRequest $request)
    {
        $dataSantri = $this->dataSantriRepository->findWithoutFail($id);

        if (empty($dataSantri)) {
            Flash::error('Data Santri not found');

            return redirect(route('dataSantris.index'));
        }

        $dataSantri = $this->dataSantriRepository->update($request->all(), $id);

        Flash::success('Data Santri updated successfully.');

        return redirect(route('dataSantris.index'));
    }

    /**
     * Remove the specified DataSantri from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataSantri = $this->dataSantriRepository->findWithoutFail($id);

        if (empty($dataSantri)) {
            Flash::error('Data Santri not found');

            return redirect(route('dataSantris.index'));
        }

        $this->dataSantriRepository->delete($id);

        Flash::success('Data Santri deleted successfully.');

        return redirect(route('dataSantris.index'));
    }
}
