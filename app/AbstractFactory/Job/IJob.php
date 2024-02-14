<?php namespace App\AbstractFactory\Job;

interface IJob {
    public function doWork();

    public function takeBreak();
}
