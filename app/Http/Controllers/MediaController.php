<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MediaController extends Controller
{
  /**
   * @var FileHelper
   */
  protected $fileHelper;

  /**
   * MediaController constructor.
   * @param FileHelper $fileHelper
   */
  public function __construct(FileHelper $fileHelper) {
    $this->fileHelper     = $fileHelper;
  }


  /**
   * Store file
   *
   * @param  Request $request
   *
   * @return JsonResponse
   *
   */
  public function upload(Request $request): JsonResponse
  {
      $data['status'] = 0;
    $file = Arr::get($request->all(), 'file');

      if ($file) {
        $data['status'] = 1;
        $data['file'] =  $this->fileHelper->upload($file, 'media\content');
      }

      return response()->json($data);
  }

  /**
   * Delete file
   *
   * @param  Request $request
   *
   * @return JsonResponse
   *
   */
  public function delete(Request $request): JsonResponse
  {
      $data['status'] = 0;
      $file = 'media\content' . Arr::get($request->all(), 'file');

      if ($file) {
        $data['status'] = 1;
        $data['file'] = $this->fileHelper->delete($file);

      }

      return response()->json($data);
  }
}
