<?php

namespace Scool\Curriculum\Presenters;

use Scool\Curriculum\Transformers\ShitsTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ShitsPresenter
 *
 * @package namespace Scool\Curriculum\Presenters;
 */
class ShitsPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ShitsTransformer();
    }
}
