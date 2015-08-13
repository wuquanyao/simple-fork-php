<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2015/8/13
 * Time: 9:22
 */


require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

class TestRunnable extends \Jenner\SimpleFork\Runnable
{

    /**
     * ����ִ�����
     * @return mixed
     */
    public function run()
    {
        while (true) {
            echo "I am running" . PHP_EOL;
            sleep(1);
        }
    }

    public function beforeExit()
    {
        echo "I am going to exit." . PHP_EOL;
        return true;
    }
}

$process = new \Jenner\SimpleFork\Process(new TestRunnable());
$process->start();
sleep(5);
$process->stop();