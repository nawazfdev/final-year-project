<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefaculitiesRequest;
use App\Http\Requests\UpdatefaculitiesRequest;
use App\Repositories\faculitiesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class faculitiesController extends AppBaseController
{
    /** @var faculitiesRepository $faculitiesRepository*/
    private $faculitiesRepository;

    public function __construct(faculitiesRepository $faculitiesRepo)
    {
        $this->faculitiesRepository = $faculitiesRepo;
    }

    /**
     * Display a listing of the faculities.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $faculities = $this->faculitiesRepository->all();

        return view('faculities.index')
            ->with('faculities', $faculities);
    }

    /**
     * Show the form for creating a new faculities.
     *
     * @return Response
     */
    public function create()
    {
        return view('faculities.create');
    }

    /**
     * Store a newly created faculities in storage.
     *
     * @param CreatefaculitiesRequest $request
     *
     * @return Response
     */
    public function store(CreatefaculitiesRequest $request)
    {
        $input = $request->all();

        $faculities = $this->faculitiesRepository->create($input);

        Flash::success('Faculities saved successfully.');

        return redirect(route('faculities.index'));
    }

    /**
     * Display the specified faculities.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faculities = $this->faculitiesRepository->find($id);

        if (empty($faculities)) {
            Flash::error('Faculities not found');

            return redirect(route('faculities.index'));
        }

        return view('faculities.show')->with('faculities', $faculities);
    }

    /**
     * Show the form for editing the specified faculities.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faculities = $this->faculitiesRepository->find($id);

        if (empty($faculities)) {
            Flash::error('Faculities not found');

            return redirect(route('faculities.index'));
        }

        return view('faculities.edit')->with('faculities', $faculities);
    }

    /**
     * Update the specified faculities in storage.
     *
     * @param int $id
     * @param UpdatefaculitiesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefaculitiesRequest $request)
    {
        $faculities = $this->faculitiesRepository->find($id);

        if (empty($faculities)) {
            Flash::error('Faculities not found');

            return redirect(route('faculities.index'));
        }

        $faculities = $this->faculitiesRepository->update($request->all(), $id);

        Flash::success('Faculities updated successfully.');

        return redirect(route('faculities.index'));
    }

    /**
     * Remove the specified faculities from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faculities = $this->faculitiesRepository->find($id);

        if (empty($faculities)) {
            Flash::error('Faculities not found');

            return redirect(route('faculities.index'));
        }

        $this->faculitiesRepository->delete($id);

        Flash::success('Faculities deleted successfully.');

        return redirect(route('faculities.index'));
    }
}
