<?php

require('extends/Controller.php');

/**
 * 動作テスト用のコントローラー
 * 
 */
class TestController extends Controller
{
    // app/Test.php用の変数
    private $test;

    /**
     * テスト用のクラスを呼び出し
     * 
     */
    public function __construct()
    {
        require('../app/Test.php');
        $this->test = new Test;
    }

    /**
     * テストページの画面を表示する
     * 
     */
    public function viewTest()
    {
        $message = $this->test->getMessage();
        return require_once('../view/test.php');
    }
}