<?php
/**
 * Created by PhpStorm.
 * User: ggcorrea
 * Date: 04/10/16
 * Time: 10:54
 */

namespace Controller;


/**
 * Class Controller
 * @package Controller
 */
abstract class Controller
{
    /**
     * @var array
     * Variables that will be passed to the visualization
     */
    protected $variables;

    /**
     * @param mixed $var
     * @param mixed $value
     * Set a determined variable in the array of variables
     */
    public function setVariables($var, $value)
    {
        $this->variables[$var] = $value;
    }

    /**
     * @return object
     * Return an object with the variables, to be used later in the visualization
     */
    public function getVariables()
    {
        return (object) $this->variables;
    }

    /**
     * @param object $model
     * Still don't know shit
     */
    public function setModel($model)
    {
        $model_name = get_class($model);
        $this->{$model_name} = $model;
    }
}