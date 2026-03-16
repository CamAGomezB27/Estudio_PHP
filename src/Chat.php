<?php

namespace App;

class Chat
{
    public function __construct(
        private OllamaAiService $aiService
    )
    {} 
    public function start()
    {
        echo 'Preguntale a la IA:' . PHP_EOL;

        while (true) {
            $input = readline('> ');

            if (strtolower($input) === 'exit' || $input === '' || strtolower($input) === 'gracias') {
                break;
            } 

            $response = $this->aiService->getResponse($input);

            echo $response . PHP_EOL;
        }
    }
}