<?php

use Illuminate\Support\Facades\Route;
use Dedoc\Scramble\Scramble;

Scramble::registerUiRoute('/');
Scramble::registerUiRoute('doc');
Scramble::registerJsonSpecificationRoute('doc.json');