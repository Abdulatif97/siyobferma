<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageCreateRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Repositories\Contracts\PageRepository;
use App\Validators\PageValidator;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;


/**
 * Class PagesController.
 *
 * @package namespace App\Http\Controllers\Web;
 */
class PagesController extends Controller
{
  /**
   * @var PageRepository
   */
  protected $repository;

  /**
   * @var PageValidator
   */
  protected $validator;

  /**
   * PagesController constructor.
   *
   * @param PageRepository $repository
   * @param PageValidator $validator
   */
  public function __construct(PageRepository $repository, PageValidator $validator)
  {
    $this->repository = $repository;
    $this->validator  = $validator;
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
    $pages = $this->repository->all();

    if (request()->wantsJson()) {

      return response()->json([
        'data' => $pages,
      ]);
    }

    return view('pages.index', compact('pages'));
  }

  /**
   * Display the specified resource.
   *
   * @return Application|Factory|Response|View
   */
  public function create()
  {
    return view('pages.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  PageCreateRequest $request
   *
   * @return \Illuminate\Http\RedirectResponse
   *
   * @throws \Prettus\Validator\Exceptions\ValidatorException
   */
  public function store(PageCreateRequest $request)
  {
    try {

      $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

      $page = $this->repository->create($request->all());

      $response = [
        'message' => 'Page created.',
        'data'    => $page->toArray(),
      ];

      return redirect()->route('page.index')->with('message', $response['message']);
    } catch (ValidatorException $e) {
      return redirect()->back()->withErrors($e->getMessageBag())->withInput();
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function show($id)
  {
    $page = $this->repository->find($id);

    if (request()->wantsJson()) {

      return response()->json([
        'data' => $page,
      ]);
    }

    return view('pages.show', compact('page'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   *
   * @return Application|Factory|Response|View
   */
  public function edit($id)
  {
    $page = $this->repository->find($id);

    return view('pages.edit', compact('page'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  PageUpdateRequest $request
   * @param  string            $id
   *
   * @return \Illuminate\Http\RedirectResponse
   *
   * @throws \Prettus\Validator\Exceptions\ValidatorException
   */
  public function update(PageUpdateRequest $request, $id)
  {
    try {

      $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

      $page = $this->repository->update($request->all(), $id);

      $response = [
        'message' => 'Page updated.',
        'data'    => $page->toArray(),
      ];

      return redirect()->route('page.index')->with('message', $response['message']);
    } catch (ValidatorException $e) {
      return redirect()->back()->withErrors($e->getMessageBag())->withInput();
    }
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function destroy($id)
  {
    $deleted = $this->repository->delete($id);

    return redirect()->back()->with('message', 'Page deleted.');
  }
}
