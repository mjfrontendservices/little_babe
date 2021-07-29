<?php

class Generate{

    public static function get($get){
        if(file_exists('./App/Pages/'.$get.'.php')){
            require_once ('./App/Pages/'.$get.'.php');
        }
    }

    public static function post($post){
        if(file_exists('./App/Post/'.$post.'.php')){
            require_once ('./App/Post/'.$post.'.php');
        }
    }

    public static function ajax($ajax){
        if(file_exists('./App/Ajax/'.$ajax.'.php')){
            require_once ('./App/Ajax/'.$ajax.'.php');
        }
    }

    public static function install($app){
        if(file_exists('./Install/'.$app.'.html')){
            require_once ('./Install/'.$app.'.html');
        }
    }

    public static function docs($docs){
        if(file_exists('./Documentation/'.$docs.'.html')){
            require_once ('./Documentation/'.$docs.'.html');
        }
    }
}