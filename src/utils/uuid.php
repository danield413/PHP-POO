<?php

namespace Danieldiaz\Poo\utils;

class UUID {
    
    public static function generate() {
        return uniqid();
    }

}