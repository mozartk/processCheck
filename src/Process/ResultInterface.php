<?php

namespace mozartk\ProcessChecker\Process;


interface ResultInterface
{
    public function parse($processName, $data);
    public function clear();
    public function get();
}