<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Exception extends \Exception
{
    /**
     * Formate l'exception.
     *
     * @return string
     */
    public function format()
    {
        return 'Une exception s\'est produite : ' . $this->getMessage();
    }

    /**
     * Enregistre l'exception dans un journal.
     */
    public function log()
    {
        $logger = app('log');
        $logger->error($this->getMessage());
    }
}


// Erreur de validation
class ValidationException extends Exception
{
    public function __construct($message, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

// Erreur d'accès à la base de données
class DatabaseException extends Exception
{
    public function __construct($message, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

// Erreur d'entrée/sortie
class IOException extends Exception
{
    public function __construct($message, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

// Erreur d'application
class ApplicationException extends Exception
{
    public function __construct($message, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
