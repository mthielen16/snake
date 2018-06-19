

<!DOCTYPE html>
<html>
<head>
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
</head>


<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "post" >
    <div id ="buttons_panel">
<?php
session_start();




require "test.php";
$obj = new Snake;

    $_SESSION['row']= 5;
    $_SESSION['col']= 5;

    echo $obj->get_buttons();
        //check clicked button

        if(isset($_POST['btn_1']))
        {
            echo "left clicked";
            $_SESSION['row']-=1;
        }
        if(isset($_POST['btn_2']))
        {
            echo "right clicked";
            $_SESSION['row']+=1;
        }
        if(isset($_POST['btn_3']))
        {
            echo "up clicked";
            $_SESSION['col']-=1;
        }
        if(isset($_POST['btn_4']))
        {
            echo "down clicked";
            $_SESSION['col']+=1;
        }
        if(isset($_POST['btn_5']))
        {
            echo "restart clicked";
            session_destroy();
        }

    echo "<div class=\"grid-container\">";
    echo $obj->build_grid();
    echo "   </div>";
    echo "row " . $_SESSION['row'] ." " . "col " . $_SESSION['col'];

?>




</body>

