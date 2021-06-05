<?php

namespace App\Http\Controllers\Web;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Repositories\Contracts\ProductRepository;
use App\Validators\ProductValidator;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;


/**
 * Class ProductsController.
 *
 * @package namespace App\Http\Controllers\Web;
 */
class ProductsController extends Controller
{
  /**
   * @var ProductRepository
   */
  protected $repository;

  /**
   * @var ProductValidator
   */
  protected $validator;
  /**
   * @var FileHelper
   */
  protected $fileHelper;

  /**
   * ProductsController constructor.
   *
   * @param ProductRepository $repository
   * @param ProductValidator $validator
   * @param FileHelper $fileHelper
   */
  public function __construct(ProductRepository $repository, ProductValidator $validator, FileHelper $fileHelper)
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
    $products = $this->repository->all();

    if (request()->wantsJson()) {

      return response()->json([
        'data' => $products,
      ]);
    }

    return view('products.index', compact('products'));
  }

  /**
   * Display the specified resource.
   *
   * @return Application|Factory|Response|View
   */
  public function create()
  {
    return view('products.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  ProductCreateRequest $request
   *
   * @return \Illuminate\Http\RedirectResponse
   *
   * @throws \Prettus\Validator\Exceptions\ValidatorException
   */
  public function store(ProductCreateRequest $request)
  {
    try {

      $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

      if (!empty($request->file('image1'))) {
        $request['image'] =  $this->fileHelper->upload($request->file('image1'), 'media\content');
      }

      $product = $this->repository->create($request->all());

      $response = [
        'message' => 'Product created.',
        'data'    => $product->toArray(),
      ];

      return redirect()->route('product.index')->with('message', $response['message']);
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
    $product = $this->repository->find($id);

    if (request()->wantsJson()) {

      return response()->json([
        'data' => $product,
      ]);
    }

    return view('products.show', compact('product'));
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
    $product = $this->repository->find($id);

    return view('products.edit', compact('product'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  ProductUpdateRequest $request
   * @param  string            $id
   *
   * @return \Illuminate\Http\RedirectResponse
   *
   * @throws \Prettus\Validator\Exceptions\ValidatorException
   */
  public function update(ProductUpdateRequest $request, $id)
  {
    try {

      $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
      if (!empty($request->file('image1'))) {
        $request['image'] =  $this->fileHelper->upload($request->file('image1'), 'media\content');
      }
      $product = $this->repository->update($request->all(), $id);

      $response = [
        'message' => 'Product updated.',
        'data'    => $product->toArray(),
      ];

      return redirect()->route('product.index')->with('message', $response['message']);
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

    return redirect()->back()->with('message', 'Product deleted.');
  }
}
