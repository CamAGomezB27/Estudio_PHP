<?php 

namespace App;

interface IAServiceInterface
{
    public function getResponse(string $input): string;
}