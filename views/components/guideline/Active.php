<?php

namespace app\views\components\guideline;

use app\core\exception\IllegalStateException;

class Active extends State
{
    public static string $identifier = '1'; //to identify the state

    private static Active $instance;
    private function  __construct()
    {
    }

    function setLayout(string $render_string): string
    {
        return '<tr class="table-secondary">'.$render_string.'</tr>';
    }

    static function getInstance(): State
    {
        if( !isset(self::$instance)){
            self::$instance = new Active();
        }
        return self::$instance;
    }

    function makeDraft()
    {
        // TODO: Implement makeDraft() method.
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }

    /**
     * @throws IllegalStateException
     */
    function activate()
    {
        throw new IllegalStateException();
    }

    function expire()
    {
        // TODO: Implement expire() method.
    }
}
