<?php

namespace App\Http\Controllers\BFrontend\Activity;

use Activity;
use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use Auth;
use Innovate\Repositories\Activity\ActivityContract;

/**
 * Class ActivityController.
 */
class ActivityController extends Controller
{
    /**
     * @var
     */
    private $activity;

    /**
     * @param ActivityContract $activity
     */
    public function __construct(ActivityContract $activity)
    {
        $this->activity = $activity;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return view('frontend.activitylog')
            ->withActivities(Activity::with('user')->find(Auth::user()->id)->limit(100)->get());
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function destroy($id)
    {
        $this->activity->destroy($id);

        return redirect()->back()->withFlashSuccess(trans('activity.alerts.deleted'));
    }

    /**
     * @return mixed
     *
     * @internal param $id
     */
    public function flush()
    {
        try {
            Activity::cleanLog();

            return redirect()->back()->withFlashSuccess(trans('activity.alerts.flushed'));
        } catch (GeneralException $e) {
            dd($e);
        }
    }
}
