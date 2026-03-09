<?php

namespace App;

class FakeAiService
{
    public function getResponse($question)
    {
        echo 'Thinking...' . PHP_EOL;

        sleep(2); // Simulate processing time

        if (strtolower($question) === 'hola') {
            return 'IA responde: Hola! Como te encuentras hoy?';
        } elseif (strtolower($question) === 'necesito ayuda') {
            return 'IA responde: Claro! ¿En qué puedo ayudarte?';
        } elseif (strpos(strtolower($question), 'php') !== false) {
            return 'IA responde: PHP es un lenguaje de programación muy popular para el desarrollo web.';
        } else {
            return 'IA responde: No entiendo esa pregunta, pero estoy aquí para ayudarte.';
        }
    }
}