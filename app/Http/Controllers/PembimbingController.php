<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePembimbingRequest;
use App\Http\Requests\UpdatePembimbingRequest;
use App\Repositories\PembimbingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PembimbingController extends AppBaseController
{
    /** @var  PembimbingRepository */
    private $pembimbingRepository;

    public function __construct(PembimbingRepository $pembimbingRepo)
    {
        $this->pembimbingRepository = $pembimbingRepo;
    }

    /**
     * Display a listing of the Pembimbing.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pembimbingRepository->pushCriteria(new RequestCriteria($request));
        $pembimbings = $this->pembimbingRepository->all();

        return view('pembimbings.index')
            ->with('pembimbings', $pembimbings);
    }

    /**
     * Show the form for creating a new Pembimbing.
     *
     * @return Response
     */
    public function create()
    {
        return view('pembimbings.create');
    }

    /**
     * Store a newly created Pembimbing in storage.
     *
     * @param CreatePembimbingRequest $request
     *
     * @return Response
     */
    public function store(CreatePembimbingRequest $request)
    {
        $input = $request->all();

        $pembimbing = $this->pembimbingRepository->create($input);

        Flash::success('Pembimbing saved successfully.');

        return redirect(route('pembimbings.index'));
    }

    /**
     * Display the specified Pembimbing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pembimbing = $this->pembimbingRepository->findWithoutFail($id);

        if (empty($pembimbing)) {
            Flash::error('Pembimbing not found');

            return redirect(route('pembimbings.index'));
        }

        return view('pembimbings.show')->with('pembimbing', $pembimbing);
    }

    /**
     * Show the form for editing the specified Pembimbing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pembimbing = $this->pembimbingRepository->findWithoutFail($id);

        if (empty($pembimbing)) {
            Flash::error('Pembimbing not found');

            return redirect(route('pembimbings.index'));
        }

        return view('pembimbings.edit')->with('pembimbing', $pembimbing);
    }

    /**
     * Update the specified Pembimbing in storage.
     *
     * @param  int              $id
     * @param UpdatePembimbingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePembimbingRequest $request)
    {
        $pembimbing = $this->pembimbingRepository->findWithoutFail($id);

        if (empty($pembimbing)) {
            Flash::error('Pembimbing not found');

            return redirect(route('pembimbings.index'));
        }

        $pembimbing = $this->pembimbingRepository->update($request->all(), $id);

        Flash::success('Pembimbing updated successfully.');

        return redirect(route('pembimbings.index'));
    }

    /**
     * Remove the specified Pembimbing from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pembimbing = $this->pembimbingRepository->findWithoutFail($id);

        if (empty($pembimbing)) {
            Flash::error('Pembimbing not found');

            return redirect(route('pembimbings.index'));
        }

        $this->pembimbingRepository->delete($id);

        Flash::success('Pembimbing deleted successfully.');

        return redirect(route('pembimbings.index'));
    }
}
