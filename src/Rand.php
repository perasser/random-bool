<?php

namespace Perasser\RandomBool;

class Rand
{
    /**
     * @return bool A random bool
     */
    public function getBool(): bool {
        $gen = rand(0, 1);

        return $gen === 1;
    }
}