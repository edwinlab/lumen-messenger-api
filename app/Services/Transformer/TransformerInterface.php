<?php namespace App\Services\Transformer;

interface TransformerInterface
{

    /**
     * Transforms a given array
     *
     * @param array $item
     * @return array
     */
    public function transform(array $item);
}