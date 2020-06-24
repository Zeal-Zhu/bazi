<?php
	echo "hello hello!\n\n"; 
    // echo("Congratulations!\n");
    // // exec("python feedback.py 20141010",$array,$ret);
    // // echo("result : $array");
    // // echo("ret is $ret");

    // //$cmd = system("python feedback.py 20141010",$ret);
    // $y = "1990";
    // $m = "3";
    // $d = "12";
    // $t = "21";
    // $g = "-g"
    // $cmd = system("python3 python/bazi.py $y $m $d $t $g",$ret);
    // echo("ret is $ret ");

    // echo 'aa';

    // system("python3 python/echo-test.py");
    // $cmd = system("python3 python/echo-test.py",$ret);

    // exec("python3 python/echo-test.py",$array,$ret);
    // echo("result : $array");
    // echo("ret is $ret");

    // echo("ret is $ret  ");

    // $command = escapeshellcmd("python3 python/echo-test.py");
    // $output = shell_exec($command);
    // echo $output;

    // $output = shell_exec('python3 python/echo-test.py');
    // echo "<pre>$output</pre>";

    // echo exec('python3 echo-test.py');

    // error_reporting(E_ALL);

    // /* Add redirection so we can get stderr. */
    // $handle = popen('php >&1', 'r');
    // echo "'$handle'; " . gettype($handle) . "\n";
    // $read = fread($handle, 2096);
    // echo $read;
    // pclose($handle);

    // $a = 6;
    // $b = 15;
    // unset($out);
    // // 参数之间用空格间隔
    // // $out :存放的是python脚本中输出的值，即为print（）函数所输出的所有数据，每次print（）都会记录为一条字典数据，组合成array数组
    // // $ret :执行情况的状态码，如果执行成功，返回0，否则返回一个非0数
    // exec("python echo-test.py",$out, $ret);
    // $out = json_encode($out);
    // print($out);

    // header("content-type:text/html;charset=utf-8");
    $output = exec('python bazi-php.py 1990 3 12 21');
    // $output = exec('python echo-test.py 1990');
    // $output = exec('python echo-test-sys.py 1990 3');
    echo $output;

    echo "\n\nby   e bye!";
?>