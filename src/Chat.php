<?php

namespace App;

class Chat
{
    public function __construct(
        private IAServiceInterface $aiService
    ) {} 
    public function start()
    {
        $this -> welcome();
        
        while ($input = $this->prompt()) {
    
            if ($this->exit($input)) {
                break;
            } 

            $response = $this->getResponse($input);

            $this->output($response);
        }
    }
    
    private function welcome()
    {
        echo 'Preguntale a la IA:' . PHP_EOL;
    }

    private function prompt()
    {
        return readline('-> ');
    }

    private function exit($input)
    {
        return in_array(trim(strtolower($input)), ['exit', 'salir', 'gracias']);
    }

    private function output($response)
    {
        echo 'IA: ' . $response . PHP_EOL;
    }

    public function getResponse($question)
    {
        return $this->aiService->getResponse($question);
    }
}