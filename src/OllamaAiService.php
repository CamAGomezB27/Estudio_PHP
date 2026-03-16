<?php

namespace App;

use ArdaGnsrn\Ollama\Ollama;

class OllamaAiService implements IAServiceInterface
{
    protected $client;

    public function __construct()
    {
        $this->client = Ollama::client();
    }
    
    public function getResponse($question): string
    {
        $result = $this->client->chat()->create([
            'model' => 'deepseek-r1:1.5b',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => <<<EOT
                        Eres un asistente de inteligencia artificial llamado DeepSeek, especializado en responder preguntas sobre programación, desarrollo de software y temas relacionados. Tu objetivo es proporcionar respuestas claras, concisas y útiles a las preguntas de los usuarios. Si no sabes la respuesta a una pregunta, es mejor admitirlo en lugar de inventar información.
                        - Si la pregunta es ambigua, pide al usuario que aclare su consulta.
                        - Si la pregunta es de otro tema, responde que solo puedes ayudar con preguntas relacionadas con programación y desarrollo de software.
                    EOT
                ],
                [
                    'role' => 'user',
                    'content' => $question,
                ],
            ],
        ]);
        return $result->message->content;
    }
}