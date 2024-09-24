<?php

namespace Form;

abstract class BaseHandleRequest
{
    private $errors;

    public function setErrorForm(array $errors)
    {
        $this->errors = $errors;
    }

    public function getErrorForm()
    {
        return $this->errors;
    }

    public function isValid()
    {
        $result = empty($this->errors) ? true : false;
        return $result;
    }

    public function isSubmitted()
    {
        $result = empty($_POST) ? false : true;
        return $result;
    }
}
