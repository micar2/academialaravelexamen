<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Models\Categories;
use App\Models\Enrolment;
use App\Models\Subject;
use App\Repositories\SubjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SubjectController extends AppBaseController
{
    /** @var  SubjectRepository */
    private $subjectRepository;

    public function __construct(SubjectRepository $subjectRepo)
    {
        $this->subjectRepository = $subjectRepo;
    }

    /**
     * Display a listing of the Subject.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->subjectRepository->pushCriteria(new RequestCriteria($request));
        $subjects = $this->subjectRepository->all();

        return view('subjects.index')
            ->with('subjects', $subjects);
    }

    /**
     * Show the form for creating a new Subject.
     *
     * @return Response
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created Subject in storage.
     *
     * @param CreateSubjectRequest $request
     *
     * @return Response
     */
    public function store(CreateSubjectRequest $request)
    {
        $input = $request->all();

        $subject = $this->subjectRepository->create($input);

        Flash::success('Subject saved successfully.');

        return redirect(route('subjects.index'));
    }

    /**
     * Display the specified Subject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subject = $this->subjectRepository->findWithoutFail($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('subjects.index'));
        }

        return view('subjects.show')->with('subject', $subject);
    }

    /**
     * Show the form for editing the specified Subject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subject = $this->subjectRepository->findWithoutFail($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('subjects.index'));
        }

        return view('subjects.edit')->with('subject', $subject);
    }

    /**
     * Update the specified Subject in storage.
     *
     * @param  int $id
     * @param UpdateSubjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubjectRequest $request)
    {
        $subject = $this->subjectRepository->findWithoutFail($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('subjects.index'));
        }

        $subject = $this->subjectRepository->update($request->all(), $id);

        Flash::success('Subject updated successfully.');

        return redirect(route('subjects.index'));
    }

    /**
     * Remove the specified Subject from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subject = $this->subjectRepository->findWithoutFail($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('subjects.index'));
        }

        $this->subjectRepository->delete($id);

        Flash::success('Subject deleted successfully.');

        return redirect(route('subjects.index'));
    }

    public function showNormal()
    {

        $subjects = Subject::orderby('category')->get();
        $categories = Subject::join('categories', 'category', '=', 'categories.id')->select('category', 'categories.name')->distinct('category')->orderBy('category')->get();

        return view('normal.subjects.show', ['subjects' => $subjects, 'categories' => $categories]);
    }

    public function detailNormal($id)
    {
        $check = Enrolment::check($id);
        $subject = Subject::where('subjects.id', '=', $id)->join('users', 'subjects.teacher', '=', 'users.id')->join('categories', 'subjects.category', '=', 'categories.id')->select('subjects.*', 'categories.name as nameC', 'users.name as nameU')->first();
        $enrolled = Enrolment::freeSeats($id, $subject->students_max);

        return view('normal.subjects.detail', ['subject' => $subject, 'usersEnrolled' => $enrolled, 'check' => $check]);
    }

    public function showStudent()
    {
        $subjects = Subject::join('enrolments as E', 'E.subject', '=', 'subjects.id')->where('E.student', '=', Auth::id())->select('subjects.*')->orderby('subjects.category')->get();
        $categories = Categories::join('subjects as S', 'S.category','=','categories.id')->join('enrolments as E', 'E.subject','=','S.id')->where('E.student', '=', Auth::id())->select('categories.name','S.category')->distinct('category')->orderBy('category')->get();

        return view('normal.subjects.show', ['subjects' => $subjects, 'categories' => $categories]);
    }

}
