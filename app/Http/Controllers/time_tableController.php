<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtime_tableRequest;
use App\Http\Requests\Updatetime_tableRequest;
use App\Repositories\time_tableRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class time_tableController extends AppBaseController
{
    /** @var time_tableRepository $timeTableRepository*/
    private $timeTableRepository;

    public function __construct(time_tableRepository $timeTableRepo)
    {
        $this->timeTableRepository = $timeTableRepo;
    }

    /**
     * Display a listing of the time_table.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $timeTables = $this->timeTableRepository->all();

        return view('time_tables.index')
            ->with('timeTables', $timeTables);
    }

    /**
     * Show the form for creating a new time_table.
     *
     * @return Response
     */
    public function create()
    {
        return view('time_tables.create');
    }

    /**
     * Store a newly created time_table in storage.
     *
     * @param Createtime_tableRequest $request
     *
     * @return Response
     */
    public function store(Createtime_tableRequest $request)
    {
        $input = $request->all();

        $timeTable = $this->timeTableRepository->create($input);

        Flash::success('Time Table saved successfully.');

        return redirect(route('timeTables.index'));
    }

    /**
     * Display the specified time_table.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $timeTable = $this->timeTableRepository->find($id);

        if (empty($timeTable)) {
            Flash::error('Time Table not found');

            return redirect(route('timeTables.index'));
        }

        return view('time_tables.show')->with('timeTable', $timeTable);
    }

    /**
     * Show the form for editing the specified time_table.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $timeTable = $this->timeTableRepository->find($id);

        if (empty($timeTable)) {
            Flash::error('Time Table not found');

            return redirect(route('timeTables.index'));
        }

        return view('time_tables.edit')->with('timeTable', $timeTable);
    }

    /**
     * Update the specified time_table in storage.
     *
     * @param int $id
     * @param Updatetime_tableRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetime_tableRequest $request)
    {
        $timeTable = $this->timeTableRepository->find($id);

        if (empty($timeTable)) {
            Flash::error('Time Table not found');

            return redirect(route('timeTables.index'));
        }

        $timeTable = $this->timeTableRepository->update($request->all(), $id);

        Flash::success('Time Table updated successfully.');

        return redirect(route('timeTables.index'));
    }

    /**
     * Remove the specified time_table from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $timeTable = $this->timeTableRepository->find($id);

        if (empty($timeTable)) {
            Flash::error('Time Table not found');

            return redirect(route('timeTables.index'));
        }

        $this->timeTableRepository->delete($id);

        Flash::success('Time Table deleted successfully.');

        return redirect(route('timeTables.index'));
    }
}
