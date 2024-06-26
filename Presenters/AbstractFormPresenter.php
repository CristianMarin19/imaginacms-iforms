<?php

namespace Modules\Iforms\Presenters;

use Modules\Iforms\Repositories\FormRepository;

abstract class AbstractFormPresenter implements FormPresenterInterface
{
    /**
     * @var FormRepository
     */
    protected $formRepository;

    /**
     * FormPresenter constructor.
     */
    public function __construct(FormRepository $formRepository)
    {
        $this->formRepository = $formRepository;
    }
}
