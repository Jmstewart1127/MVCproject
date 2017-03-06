<?php

class TimeClock
{
    private $currentTime
    private $startTime;
    private $endTime;
    private $totalTime;

    public function addCurrentTime($getCurrentTime)
    {
        $sql = "INSERT INTO users (startTime)
                VALUES ($getCurrentTime)";

    }

    public function setCurrentTime()
    {
        $this->currentTime = time();
    }

    public function getCurrentTime()
    {
        return $this->currentTime;
    }

}