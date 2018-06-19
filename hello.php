

<!DOCTYPE html>
<html>
<head>

    <title> SNÄK </title>

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: 50px 50px 50px 50px 50px 50px 50px 50px 50px 50px;
            grid-template-rows: 50px 50px 50px 50px 50px 50px 50px 50px 50px 50px;
            background-color: white;
            padding: 5px;
        }
        .grid-item {
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 30px;
            text-align: center;
        }
    </style>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        var countdown;
        var counter = function(){
            var time = parseInt($('#time').text());
            if (time !== 3){
                $('#time').text(time + 1);
            }else{
                clearInterval(countdown);
                location.reload();

            }
        }
        countdown = setInterval(counter , 1000);
    </script>
</head>


<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "post" >
    <div id ="buttons_panel">
<?php
session_start();
$axis=null;

$i = isset($_SESSION['i']) ? $_SESSION['i'] : 0;

echo ++$i;

$_SESSION['i'] = $i;
$_SESSION[$axis]--;




require "test.php";
$obj = new Snake;



    if (!isset($_SESSION['row'])) {
        $_SESSION['row']= 5;
    }
    if (!isset($_SESSION['col'])) {
        $_SESSION['col']= 5;
    }

    if (($_SESSION['row'] == 0) || ($_SESSION['row'] == 11)|| ($_SESSION['col'] == 0)||($_SESSION['col'] == 11))  {
        $axis=null;
        echo "<script>alert('you loose fckin idiot');</script>";
        session_destroy();
    }

    echo $obj->get_buttons();
        //check clicked button

        if(isset($_POST['btn_1']))
        {
            echo "left clicked";
            $_SESSION['row']--;
            $axis='row';
        }
        if(isset($_POST['btn_2']))
        {
            echo "right clicked";
            $_SESSION['row']++;
            $axis='row';
        }
        if(isset($_POST['btn_3']))
        {
            echo "up clicked";
            $_SESSION['col']--;
            $axis='col';
        }
        if(isset($_POST['btn_4']))
        {
            echo "down clicked";
            $_SESSION['col']++;
            $axis='col';
        }
        if(isset($_POST['btn_5']))
        {
            echo "restart clicked";
            $i=0;
            $_SESSION['col']= 5;
            $_SESSION['col']= 5;
            session_destroy();

        }

    echo "<div class=\"grid-container\">";
    echo $obj->build_grid();
    echo "   </div>";
    echo "row " . $_SESSION['row'] ." " . "col " . $_SESSION['col'];
    echo "<br />";
    echo "counter " . $i;
    echo "<br />";
    echo "direction " . "$axis";

?>

       <div id="time">0</div>






</body>

