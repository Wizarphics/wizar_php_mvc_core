<?php

namespace wizar\phpmvc\form;

use wizar\phpmvc\Model;

abstract class BaseField
{

    public Model $model;
    public string $attribute;

    /**
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }
    public function __toString()
    {
        return sprintf(
            '<div class="col-md-12">
            <label class="form-label">%s</label>
            %s
            <div class="invalid-feedback">
            %s
            </div>
        </div>',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }

    abstract public function renderInput(): string;

}