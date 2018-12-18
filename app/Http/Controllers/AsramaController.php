<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAsramaRequest;
use App\Http\Requests\UpdateAsramaRequest;
use App\Repositories\AsramaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AsramaController extends AppBaseController
{
    /** @var  AsramaRepository */
    private $asramaRepository;

    public function __construct(AsramaRepository $asramaRepo)
    {
        $this->asramaRepository = $asramaRepo;
    }

    /**
     * Display a listing of the Asrama.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->asramaRepository->pushCriteria(new RequestCriteria($request));
        $asramas = $this->asramaRepository->all();

        return view('asramas.index')
            ->with('asramas', $asramas);
    }

    /**
     * Show the form for creating a new Asrama.
     *
     * @return Response
     */
    public function create()
    {
        return view('asramas.create');
    }

    /**
     * Store a newly created Asrama in storage.
     *
     * @param CreateAsramaRequest $request
     *
     * @return Response
     */
    public function store(CreateAsramaRequest $request)
    {
        $input = $request->all();

        $asrama = $this->asramaRepository->create($input);

        Flash::success('Asrama saved successfully.');

        return redirect(route('asramas.index'));
    }

    /**
     * Display the specified Asrama.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asrama = $this->asramaRepository->findWithoutFail($id);

        if (empty($asrama)) {
            Flash::error('Asrama not found');

            return redirect(route('asramas.index'));
        }

        return view('asramas.show')->with('asrama', $asrama);
    }

    /**
     * Show the form for editing the specified Asrama.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asrama = $this->asramaRepository->findWithoutFail($id);

        if (empty($asrama)) {
            Flash::error('Asrama not found');

            return redirect(route('asramas.index'));
        }

        return view('asramas.edit')->with('asrama', $asrama);
    }

    /**
     * Update the specified Asrama in storage.
     *
     * @param  int              $id
     * @param UpdateAsramaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsramaRequest $request)
    {
        $asrama = $this->asramaRepository->findWithoutFail($id);

        if (empty($asrama)) {
            Flash::error('Asrama not found');

            return redirect(route('asramas.index'));
        }

        $asrama = $this->asramaRepository->update($request->all(), $id);

        Flash::success('Asrama updated successfully.');

        return redirect(route('asramas.index'));
    }

    /**
     * Remove the specified Asrama from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asrama = $this->asramaRepository->findWithoutFail($id);

        if (empty($asrama)) {
            Flash::error('Asrama not found');

            return redirect(route('asramas.index'));
        }

        $this->asramaRepository->delete($id);

        Flash::success('Asrama deleted successfully.');

        return redirect(route('asramas.index'));
    }
}
