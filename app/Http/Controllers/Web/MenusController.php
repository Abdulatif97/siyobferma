<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Repositories\Contracts\MenuRepository;
use App\Validators\MenuValidator;
use App\Http\Requests\MenuCreateRequest;
use App\Http\Requests\MenuUpdateRequest;

/**
 * Class MenusController.
 *
 * @package namespace App\Http\Controllers\Web;
 */
class MenusController extends Controller
{
    /**
     * @var MenuRepository
     */
    protected $repository;

    /**
     * @var MenuValidator
     */
    protected $validator;

    /**
     * MenusController constructor.
     *
     * @param MenuRepository $repository
     * @param MenuValidator $validator
     */
    public function __construct(MenuRepository $repository, MenuValidator $validator)
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
        $menus = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $menus,
            ]);
        }

        return view('menus.index', compact('menus'));
    }

  /**
   * Display the specified resource.
   *
   * @return Application|Factory|Response|View
   */
  public function create()
  {
    return view('menus.create');
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MenuCreateRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(MenuCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $menu = $this->repository->create($request->all());

            $response = [
                'message' => 'Menu created.',
                'data'    => $menu->toArray(),
            ];

          return redirect()->route('menu.index')->with('message', $response['message']);
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
        $menu = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $menu,
            ]);
        }

        return view('menus.show', compact('menu'));
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
        $menu = $this->repository->find($id);

        return view('menus.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MenuUpdateRequest $request
     * @param  string            $id
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(MenuUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $menu = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Menu updated.',
                'data'    => $menu->toArray(),
            ];

          return redirect()->route('menu.index')->with('message', $response['message']);
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

        return redirect()->back()->with('message', 'Menu deleted.');
    }
}
