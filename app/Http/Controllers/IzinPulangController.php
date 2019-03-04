<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIzinPulangRequest;
use App\Http\Requests\UpdateIzinPulangRequest;
use App\Repositories\IzinPulangRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use PDF;
use App\Models\IzinPulang;

class IzinPulangController extends AppBaseController
{
    /** @var  IzinPulangRepository */
    private $izinPulangRepository;

    public function __construct(IzinPulangRepository $izinPulangRepo)
    {
        $this->izinPulangRepository = $izinPulangRepo;
    }

    /**
     * Display a listing of the IzinPulang.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->izinPulangRepository->pushCriteria(new RequestCriteria($request));
        $izinPulangs = $this->izinPulangRepository->all();

        return view('izin_pulangs.index')
            ->with('izinPulangs', $izinPulangs);
    }

    /**
     * Show the form for creating a new IzinPulang.
     *
     * @return Response
     */
    public function create()
    {
        return view('izin_pulangs.create');
    }

    /**
     * Store a newly created IzinPulang in storage.
     *
     * @param CreateIzinPulangRequest $request
     *
     * @return Response
     */
    public function store(CreateIzinPulangRequest $request)
    {
        $input = $request->all();

        $izinPulang = $this->izinPulangRepository->create($input);

        Flash::success('Izin Pulang saved successfully.');

        return redirect(route('izinPulangs.index'));
    }

    /**
     * Display the specified IzinPulang.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $izinPulang = $this->izinPulangRepository->findWithoutFail($id);

        if (empty($izinPulang)) {
            Flash::error('Izin Pulang not found');

            return redirect(route('izinPulangs.index'));
        }

        return view('izin_pulangs.show')->with('izinPulang', $izinPulang);
    }

    /**
     * Show the form for editing the specified IzinPulang.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $izinPulang = $this->izinPulangRepository->findWithoutFail($id);

        if (empty($izinPulang)) {
            Flash::error('Izin Pulang not found');

            return redirect(route('izinPulangs.index'));
        }

        return view('izin_pulangs.edit')->with('izinPulang', $izinPulang);
    }

    /**
     * Update the specified IzinPulang in storage.
     *
     * @param  int              $id
     * @param UpdateIzinPulangRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIzinPulangRequest $request)
    {
        $izinPulang = $this->izinPulangRepository->findWithoutFail($id);

        if (empty($izinPulang)) {
            Flash::error('Izin Pulang not found');

            return redirect(route('izinPulangs.index'));
        }

        $izinPulang = $this->izinPulangRepository->update($request->all(), $id);

        Flash::success('Izin Pulang updated successfully.');

        return redirect(route('izinPulangs.index'));
    }

    /**
     * Remove the specified IzinPulang from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $izinPulang = $this->izinPulangRepository->findWithoutFail($id);

        if (empty($izinPulang)) {
            Flash::error('Izin Pulang not found');

            return redirect(route('izinPulangs.index'));
        }

        $this->izinPulangRepository->delete($id);

        Flash::success('Izin Pulang deleted successfully.');

        return redirect(route('izinPulangs.index'));
    }

    public function pdf($id)
    {
        // $izinPulang = $this->izinPulangRepository->findWithoutFail($id);

        // if (empty($izinPulang)) {
        //     Flash::error('Izin Pulang not found');

        //     return redirect(route('izinPulangs.index'));
        // }

        // return view('izin_pulangs.invoices')->with('izinPulang', $izinPulang);
        // $idSantri = IzinPulang::where('id','=',$id)->get('nama_santri');
        $data = IzinPulang::where('id','=',$id)->get();
        // $detail_santri=DataSantri::where('id','=',$idSantri)->get();
        
        // $pdf = PDF::loadView();
        // $pdf->loadHTML('<h1>Test</h1>');
        return view('izin_pulangs.invoices',compact('data'));
        // 

    }
}
