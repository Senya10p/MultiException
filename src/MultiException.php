<?php

namespace App;

/**
 * Class MultiExceeption
 * @package App
 */
class MultiException extends \Exception
{
    /**
     * @var array
     */
    protected $errors = [];

    /**
     * @param \Exception $exception
     */
    public function add(\Exception $exception)
    {
        $this->errors[] = $exception->getMessage();
    }

    /**
     * @return bool
     */
    public function empty()
    {
        return empty($this->errors);
    }

    /**
     * @return array
     */
    public function all()
    {
        return $this->errors;
    }
}
