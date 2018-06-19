<?php
class Snake {

    public $pos = array(5,5);


    public function get_buttons()
    {

        $str = '';
        $btns = array(
            1 => 'left',
            2 => 'right',
            3 => 'up',
            4 => 'down',
            5 => 'restart',
        );

        while (list($k, $v) = each($btns)) {
            $str .= '&nbsp;<input type="submit" value="' . $v . '" name="btn_' . $k . '" id="btn_' . $k . '" />';
        }

        return $str;
    }

    public function build_grid()
    {
        $color = "background-color:lightblue;";
        $snake = "background-color:red;";
        for ($row = 1; $row <= 10; $row++) {
            for ($col = 1; $col <= 10; $col++) {
                if (($row == $_SESSION['col']) && ($col == $_SESSION['row'])) {
                    echo "<div style=$snake class=\"grid-item\"></div>";
                } else {
                    echo "<div style=$color class=\"grid-item\"></div>";
                }
            }
        }
    }

}
?>

