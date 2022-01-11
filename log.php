<?php
     function getget()
    {
       // $i = sizeof($_GET)+1;  
       // $count=sizeof($_GET);
        //echo($count);
        $getget = [];
        foreach ($_GET as $key => $value)
        {
            $getget['$_GET['.$key.']']=$value;
        }  
         return $getget;
     }
     function postpost()
    {
         $postpost=[];
         foreach($_POST as $key => $value)
         {
            $postpost['$_POST['.$key.']']=$value;
         }
         return $postpost;
     }
     function getallheaders()
    {
        $headers = [];
        foreach ($_SERVER as $name => $value)
       {
           if (substr($name, 0, 5) == 'HTTP_')
           {
               $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
           }
       }
       return $headers;
    }
    foreach (getallheaders() as $name => $value) 
    {
    $text= "$name: $value\r\n";
    $file = './data/'.'somename-'.date("Y-m-d").'.txt';
    $fp = fopen($file, 'a+');
    fwrite($fp, $text);
    fclose($fp);
    }
    foreach(getget() as $key=>$value)
    {
    $text= "$key: $value\r\n";
    $file = './data/'.'mc-'.date("Y-m-d").'.txt';
    $fp = fopen($file, 'a+');
    fwrite($fp, $text);
    fclose($fp);
    }
    foreach(postpost() as $key=>$value)
    {
    $text= "$key: $value\r\n";
    $file = './data/'.'mc-'.date("Y-m-d").'.txt';
    $fp = fopen($file, 'a+');
    fwrite($fp, $text);
    fclose($fp);
    }
    $file = './data/'.'mc-'.date("Y-m-d").'.txt';
    $fp = fopen($file, 'a+');
    $line="--------------------------------------------";
    $line="$line\r\n";
    $showtime=date("H:i:s");
    fwrite($fp,"$showtime\r\n");
    fwrite($fp,$line);
    fclose($fp);
    ?>