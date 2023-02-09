<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateadmissionRequest;
use App\Http\Requests\UpdateadmissionRequest;
use App\Repositories\admissionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class admissionController extends AppBaseController
{
    /** @var admissionRepository $admissionRepository*/
    private $admissionRepository;

    public function __construct(admissionRepository $admissionRepo)
    {
        $this->admissionRepository = $admissionRepo;
    }

    /**
     * Display a listing of the admission.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $admissions = $this->admissionRepository->all();

        return view('admissions.index')
            ->with('admissions', $admissions);
    }

    /**
     * Show the form for creating a new admission.
     *
     * @return Response
     */
    public function create()
    {
        return view('admissions.create');
    }

    /**
     * Store a newly created admission in storage.
     *
     * @param CreateadmissionRequest $request
     *
     * @return Response
     */
    public function store(CreateadmissionRequest $request)
    {
        $input = $request->all();

        $admission = $this->admissionRepository->create($input);

        Flash::success('Admission saved successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Display the specified admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.show')->with('admission', $admission);
    }

    /**
     * Show the form for editing the specified admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.edit')->with('admission', $admission);
    }

    /**
     * Update the specified admission in storage.
     *
     * @param int $id
     * @param UpdateadmissionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateadmissionRequest $request)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        $admission = $this->admissionRepository->update($request->all(), $id);

        Flash::success('Admission updated successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Remove the specified admission from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        $this->admissionRepository->delete($id);

        Flash::success('Admission deleted successfully.');

        return redirect(route('admissions.index'));
    }
}
