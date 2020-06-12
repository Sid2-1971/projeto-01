<?php

namespace App\Views;

/**
 * [Description Template]
 */
class Template
{
    /**
     * @param mixed $data
     * 
     * @return [type]
     */
    public function template($data)
    {
        echo '<h1>' . get_class($this).':'.__FUNCTION__.'</h1></br>';
                
        echo '<h1>' . $data . '</h1>';
    }
}
