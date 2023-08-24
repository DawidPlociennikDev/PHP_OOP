<?php

namespace Interfaces;

use Classes\Reader;

interface Readable 
{
    public function read(Reader $reader);
}