<?php

namespace mozartk\processCheck\Process;


class JsonParsing implements ParserInterface
{
    private $parseData = array();
    public function parse($data = null)
    {
        $jsonData = array();
        $jsonData['name'] = $data->getName();
        $jsonData['name_w'] = $data->getWindowTitle();
        $jsonData['cputime'] = $data->getCpuTime();
        $jsonData['pid'] = $data->getPid();
        $jsonData['running'] = $data->isRunning();

        $this->parseData[] = $jsonData;
    }

    public function clear()
    {
        $this->parseData = array();
    }

    public function get()
    {
        return json_encode($this->parseData);
    }
}