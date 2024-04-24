<?php

namespace Perasser\RandomBool;

class Rand
{
    /**
     * @return bool A random bool
     */
    public function getBool(): bool {
        $gen = rand(0, 1);

        if ($gen === 1) {
            return true;
        }
        else {
            return false;
        }

        // return $gen === 1;
    }
}