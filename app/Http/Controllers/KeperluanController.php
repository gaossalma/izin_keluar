<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKeperluanRequest;
use App\Http\Requests\UpdateKeperluanRequest;
use App\Repositories\KeperluanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KeperluanController extends AppBaseController
{
    /** @var  KeperluanRepository */
    private $keperluanRepository;

    public function __construct(KeperluanRepository $keperluanRepo)
    {
        $this->keperluanRepository = $keperluanRepo;
    }

    /**
     * Display a listing of the Keperluan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->keperluanRepository->pushCriteria(new RequestCriteria($request));
        $keperluans = $this->keperluanRepository->all();

        return view('keperluans.index')
            ->with('keperluans', $keperluans);
    }

    /**
     * Show the form for creating a new Keperluan.
     *
     * @return Response
     */
    public function create()
    {
        return view('keperluans.create');
    }

    /**
     * Store a newly created Keperluan in storage.
     *
     * @param CreateKeperluanRequest $request
     *
     * @return Response
     */
    public function store(CreateKeperluanRequest $request)
    {
        $input = $request->all();

        $keperluan = $this->keperluanRepository->create($input);

        Flash::success('Keperluan saved successfully.');

        return redirect(route('keperluans.index'));
    }

    /**
     * Display the specified Keperluan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $keperluan = $this->keperluanRepository->findWithoutFail($id);

        if (empty($keperluan)) {
            Flash::error('Keperluan not found');

            return redirect(route('keperluans.index'));
        }

        return view('keperluans.show')->with('keperluan', $keperluan);
    }

    /**
     * Show the form for editing the specified Keperluan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $keperluan = $this->keperluanRepository->findWithoutFail($id);

        if (empty($keperluan)) {
            Flash::error('Keperluan not found');

            return redirect(route('keperluans.index'));
        }

        return view('keperluans.edit')->with('keperluan', $keperluan);
    }

    /**
     * Update the specified Keperluan in storage.
     *
     * @param  int              $id
     * @param UpdateKeperluanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKeperluanRequest $request)
    {
        $keperluan = $this->keperluanRepository->findWithoutFail($id);

        if (empty($keperluan)) {
            Flash::error('Keperluan not found');

            return redirect(route('keperluans.index'));
        }

        $keperluan = $this->keperluanRepository->update($request->all(), $id);

        Flash::success('Keperluan updated successfully.');

        return redirect(route('keperluans.index'));
    }

    /**
     * Remove the specified Keperluan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $keperluan = $this->keperluanRepository->findWithoutFail($id);

        if (empty($keperluan)) {
            Flash::error('Keperluan not found');

            return redirect(route('keperluans.index'));
        }

        $this->keperluanRepository->delete($id);

        Flash::success('Keperluan deleted successfully.');

        return redirect(route('keperluans.index'));
    }
}
