<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSantriRequest;
use App\Http\Requests\UpdateSantriRequest;
use App\Repositories\SantriRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SantriController extends AppBaseController
{
    /** @var  SantriRepository */
    private $santriRepository;

    public function __construct(SantriRepository $santriRepo)
    {
        $this->santriRepository = $santriRepo;
    }

    /**
     * Display a listing of the Santri.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->santriRepository->pushCriteria(new RequestCriteria($request));
        $santris = $this->santriRepository->all();

        return view('santris.index')
            ->with('santris', $santris);
    }

    /**
     * Show the form for creating a new Santri.
     *
     * @return Response
     */
    public function create()
    {
        return view('santris.create');
    }

    /**
     * Store a newly created Santri in storage.
     *
     * @param CreateSantriRequest $request
     *
     * @return Response
     */
    public function store(CreateSantriRequest $request)
    {
        $input = $request->all();

        $santri = $this->santriRepository->create($input);

        Flash::success('Santri saved successfully.');

        return redirect(route('santris.index'));
    }

    /**
     * Display the specified Santri.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $santri = $this->santriRepository->findWithoutFail($id);

        if (empty($santri)) {
            Flash::error('Santri not found');

            return redirect(route('santris.index'));
        }

        return view('santris.show')->with('santri', $santri);
    }

    /**
     * Show the form for editing the specified Santri.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $santri = $this->santriRepository->findWithoutFail($id);

        if (empty($santri)) {
            Flash::error('Santri not found');

            return redirect(route('santris.index'));
        }

        return view('santris.edit')->with('santri', $santri);
    }

    /**
     * Update the specified Santri in storage.
     *
     * @param  int              $id
     * @param UpdateSantriRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSantriRequest $request)
    {
        $santri = $this->santriRepository->findWithoutFail($id);

        if (empty($santri)) {
            Flash::error('Santri not found');

            return redirect(route('santris.index'));
        }

        $santri = $this->santriRepository->update($request->all(), $id);

        Flash::success('Santri updated successfully.');

        return redirect(route('santris.index'));
    }

    /**
     * Remove the specified Santri from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $santri = $this->santriRepository->findWithoutFail($id);

        if (empty($santri)) {
            Flash::error('Santri not found');

            return redirect(route('santris.index'));
        }

        $this->santriRepository->delete($id);

        Flash::success('Santri deleted successfully.');

        return redirect(route('santris.index'));
    }
}
