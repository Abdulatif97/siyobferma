<?php

namespace App\Http\Controllers\Web;


use App\Helpers\FileHelper;
use App\Http\Requests\AdvantagesCreateRequest;
use App\Http\Requests\AdvantagesUpdateRequest;
use App\Repositories\Contracts\AdvantagesRepository;
use App\Validators\AdvantagesValidator;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;


/**
 * Class AdvantagesController.
 *
 * @package namespace App\Http\Controllers\Web;
 */
class AdvantagesController extends Controller
{
  /**
   * @var AdvantagesRepository
   */
  protected $repository;

  /**
   * @var AdvantagesValidator
   */
  protected $validator;
  /**
   * @var FileHelper
   */
  protected $fileHelper;

  /**
   * AdvantagessController constructor.
   *
   * @param AdvantagesRepository $repository
   * @param AdvantagesValidator $validator
   * @param FileHelper $fileHelper
   */
  public function __construct(AdvantagesRepository $repository, AdvantagesValidator $validator, FileHelper $fileHelper)
  {
    $this->repository = $repository;
    $this->validator  = $validator;
    $this->fileHelper     = $fileHelper;

  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
    $advantages = $this->repository->all();

    if (request()->wantsJson()) {

      return response()->json([
        'data' => $advantages,
      ]);
    }

    return view('advantages.index', compact('advantages'));
  }

  /**
   * Display the specified resource.
   *
   * @return Application|Factory|Response|View
   */
  public function create()
  {
    return view('advantages.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  AdvantagesCreateRequest $request
   *
   * @return \Illuminate\Http\RedirectResponse
   *
   * @throws \Prettus\Validator\Exceptions\ValidatorException
   */
  public function store(AdvantagesCreateRequest $request)
  {
    try {

      $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

      if (!empty($request->file('image1'))) {
        $request['image'] =  $this->fileHelper->upload($request->file('image1'), 'media\content');
      }

      $advantage = $this->repository->create($request->all());

      $response = [
        'message' => 'Advantages created.',
        'data'    => $advantage->toArray(),
      ];

      return redirect()->route('advantage.index')->with('message', $response['message']);
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
    $advantage = $this->repository->find($id);

    if (request()->wantsJson()) {

      return response()->json([
        'data' => $advantage,
      ]);
    }

    return view('advantages.show', compact('advantage'));
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
    $advantage = $this->repository->find($id);

    return view('advantages.edit', compact('advantage'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  AdvantagesUpdateRequest $request
   * @param  string            $id
   *
   * @return \Illuminate\Http\RedirectResponse
   *
   * @throws \Prettus\Validator\Exceptions\ValidatorException
   */
  public function update(AdvantagesUpdateRequest $request, $id)
  {
    try {

      $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
      if (!empty($request->file('image1'))) {
        $request['image'] =  $this->fileHelper->upload($request->file('image1'), 'media\content');
      }
      $advantage = $this->repository->update($request->all(), $id);

      $response = [
        'message' => 'Advantages updated.',
        'data'    => $advantage->toArray(),
      ];

      return redirect()->route('advantage.index')->with('message', $response['message']);
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

    return redirect()->back()->with('message', 'Advantages deleted.');
  }
}
