<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleController extends Controller
{
    //
    public function showServiceProviderTest()
    {
        //app()-> make()でサービスを使うことができこの文ではインスタンスとして$encryptに格納
        $encrypt = app()->make('encrypter');
        //入力された文字列を暗号化するメソッドにアクセス 暗号化した文字列を$passwordに格納
        $password = $encrypt->encrypt('TestPassWord123');
        // サービスコンテナから取り出した値を$sampleに格納
        $sample = app()->make('serviceProviderTest');
        
        dd($sample,$password,$encrypt->decrypt($password));


    }
    public function showServiceContainerTest()
    {

        app()->bind('lifeCycleTest',function()
        {
            return 'ライフサイクルテスト';
        });
        app()->bind('test',function()
        {
            $a=5;
            $b=6;
            $sum=$a+$b;
            return $sum; 
        });

        $test = app()->make('test');
        $test2 = app()->make('lifeCycleTest');
        //依存性があるクラスのメソッドを呼び出しサービスコンテナなしのパターン
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run();
        /**サービスコンテナありのパターン*/
        app()->bind('sample',Sample::class);
        $sample = app()->make('sample');
        $sample->run();
        dd($test,$test2,app());
    }
}
class Sample
{
    public $message;
    public function __construct(Message $message)
    {
        $this->message = $message;
    }
    public function run(){
        $this->message->send();
    }
}
class Message
{
    public function send(){
        echo('メッセージ');
    }
}
