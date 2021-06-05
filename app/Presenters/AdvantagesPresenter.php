<?php

namespace App\Presenters;

use App\Transformers\AdvantagesTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AdvantagesPresenter.
 *
 * @package namespace App\Presenters;
 */
class AdvantagesPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AdvantagesTransformer();
    }
}
