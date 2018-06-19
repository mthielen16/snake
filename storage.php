<?php
function get_buttons()
{
    $str='';
    $btns=array(
        1=>'left',
        2=>'right',
        3=>'up',
        4=>'down',
        5=>'restart',
    );

    while(list($k,$v)=each($btns))
    {
        $str.='&nbsp;<input type="submit" value="'.$v.'" name="btn_'.$k.'" id="btn_'.$k.'" />';
    }

    return $str;

    

}

?>

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
    echo get_buttons();


        //check clicked button

        if(isset($_POST['btn_1']))
        {
            echo "left clicked";
        }
        if(isset($_POST['btn_2']))
        {
            echo "right clicked";
        }
        if(isset($_POST['btn_3']))
        {
            echo "up clicked";
        }
        if(isset($_POST['btn_4']))
        {
            echo "down clicked";
        }
        if(isset($_POST['btn_5']))
        {
            echo "restart clicked";
        }


        $color = "background-color:lightblue;";
        $snake = "background-color:red;";
        echo "<div class=\"grid-container\">";
        for ($row=1; $row <= 10; $row++) {
            for ($col=1; $col <= 10; $col++) {
                if (($row==5)&&($col==5)) {
                    echo "<div style=$snake class=\"grid-item\"></div>";
                } else {
                    echo "<div style=$color class=\"grid-item\"></div>";
                }
            }
        }
        echo "   </div>";
        ?>


    </body>
</html>



echo "<div class=\"grid-container\">";
    echo build_grid();
    echo "   </div>";


//check clicked button

if(isset($_POST['btn_1']))
{
echo "left clicked";
}
if(isset($_POST['btn_2']))
{
echo "right clicked";
}
if(isset($_POST['btn_3']))
{
echo "up clicked";
}
if(isset($_POST['btn_4']))
{
echo "down clicked";
}
if(isset($_POST['btn_5']))
{
echo "restart clicked";
}




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

        echo get_buttons();

        echo "<div class=\"grid-container\">";
        echo build_grid();
        echo "   </div>";


        //check clicked button

        if(isset($_POST['btn_1']))
        {
            echo "left clicked";
        }
        if(isset($_POST['btn_2']))
        {
            echo "right clicked";
        }
        if(isset($_POST['btn_3']))
        {
            echo "up clicked";
        }
        if(isset($_POST['btn_4']))
        {
            echo "down clicked";
        }
        if(isset($_POST['btn_5']))
        {
            echo "restart clicked";
        }
        ?>


</body>




//TIMER http://jsfiddle.net/uL50cqmw/
var countdown;
var counter = function(){
var time = parseInt($('#time').text());
if (time !== 0){
$('#time').text(time - 1);
}else{
clearInterval(countdown);
}
}
countdown = setInterval(counter , 1000);




