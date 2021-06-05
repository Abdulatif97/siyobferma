<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Advantages;

/**
 * Class AdvantagesTransformer.
 *
 * @package namespace App\Transformers;
 */
class AdvantagesTransformer extends TransformerAbstract
{
    /**
     * Transform the Advantages entity.
     *
     * @param \App\Models\Advantages $model
     *
     * @return array
     */
    public function transform(Advantages $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
