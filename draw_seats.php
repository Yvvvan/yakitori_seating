<?php
session_start(); // 开始会话

$seats = array(
    1 => array(
        1 => array(4, '東'),
        2 => array(14, '南'),
        3 => array(11, '西'),
        4 => array(5, '東'),
        5 => array(11, '北'),
        6 => array(14, '南'),
    ),
    2 => array(
        1 => array(1, '東'),
        2 => array(12, '南'),
        3 => array(11, '北'),
        4 => array(9, '西'),
        5 => array(1, '東'),
        6 => array(7, '南'),
    ),
    3 => array(
        1 => array(9, '東'),
        2 => array(5, '南'),
        3 => array(9, '西'),
        4 => array(4, '東'),
        5 => array(2, '北'),
        6 => array(13, '南'),
    ),
    4 => array(
        1 => array(19, '東'),
        2 => array(2, '南'),
        3 => array(8, '西'),
        4 => array(18, '東'),
        5 => array(4, '南'),
        6 => array(18, '北'),
    ),
    5 => array(
        1 => array(10, '東'),
        2 => array(16, '南'),
        3 => array(3, '北'),
        4 => array(13, '西'),
        5 => array(3, '東'),
        6 => array(11, '南'),
    ),
    6 => array(
        1 => array(3, '東'),
        2 => array(2, '西'),
        3 => array(12, '北'),
        4 => array(9, '南'),
        5 => array(16, '東'),
        6 => array(4, '西'),
    ),
    7 => array(
        1 => array(2, '東'),
        2 => array(13, '南'),
        3 => array(1, '西'),
        4 => array(13, '北'),
        5 => array(2, '東'),
        6 => array(12, '南'),
    ),
    8 => array(
        1 => array(18, '東'),
        2 => array(14, '北'),
        3 => array(4, '南'),
        4 => array(3, '西'),
        5 => array(19, '南'),
        6 => array(9, '西'),
    ),
    9 => array(
        1 => array(11, '東'),
        2 => array(10, '南'),
        3 => array(7, '北'),
        4 => array(6, '東'),
        5 => array(13, '西'),
        6 => array(16, '南'),
    ),
    10 => array(
        1 => array(9, '南'),
        2 => array(13, '東'),
        3 => array(13, '東'),
        4 => array(14, '西'),
        5 => array(6, '北'),
        6 => array(3, '南'),
    ),
    11 => array(
        1 => array(11, '南'),
        2 => array(19, '東'),
        3 => array(10, '西'),
        4 => array(17, '東'),
        5 => array(7, '北'),
        6 => array(3, '西'),
    ),
    12 => array(
        1 => array(15, '東'),
        2 => array(16, '西'),
        3 => array(7, '東'),
        4 => array(9, '北'),
        5 => array(7, '南'),
        6 => array(13, '西'),
    ),
    13 => array(
        1 => array(12, '東'),
        2 => array(3, '南'),
        3 => array(4, '西'),
        4 => array(16, '東'),
        5 => array(12, '北'),
        6 => array(14, '西'),
    ),
    14 => array(
        1 => array(12, '南'),
        2 => array(12, '東'),
        3 => array(13, '北'),
        4 => array(1, '東'),
        5 => array(8, '西'),
        6 => array(18, '南'),
    ),
    15 => array(
        1 => array(1, '南'),
        2 => array(1, '東'),
        3 => array(15, '西'),
        4 => array(10, '東'),
        5 => array(18, '西'),
        6 => array(11, '北'),
    ),
    16 => array(
        1 => array(5, '東'),
        2 => array(8, '南'),
        3 => array(4, '北'),
        4 => array(14, '東'),
        5 => array(14, '北'),
        6 => array(7, '西'),
    ),
    17 => array(
        1 => array(12, '西'),
        2 => array(16, '東'),
        3 => array(10, '南'),
        4 => array(6, '南'),
        5 => array(16, '北'),
        6 => array(9, '北'),
    ),
    18 => array(
        1 => array(12, '北'),
        2 => array(4, '東'),
        3 => array(17, '南'),
        4 => array(5, '南'),
        5 => array(17, '西'),
        6 => array(15, '東'),
    ),
    19 => array(
        1 => array(7, '東'),
        2 => array(1, '南'),
        3 => array(19, '北'),
        4 => array(15, '東'),
        5 => array(15, '南'),
        6 => array(16, '西'),
    ),
    20 => array(
        1 => array(19, '南'),
        2 => array(6, '東'),
        3 => array(16, '北'),
        4 => array(14, '南'),
        5 => array(2, '西'),
        6 => array(2, '東'),
    ),
    21 => array(
        1 => array(13, '東'),
        2 => array(2, '北'),
        3 => array(3, '西'),
        4 => array(15, '南'),
        5 => array(13, '南'),
        6 => array(14, '北'),
    ),
    22 => array(
        1 => array(17, '東'),
        2 => array(10, '西'),
        3 => array(15, '南'),
        4 => array(7, '北'),
        5 => array(12, '西'),
        6 => array(7, '東'),
    ),
    23 => array(
        1 => array(6, '東'),
        2 => array(6, '南'),
        3 => array(5, '北'),
        4 => array(16, '南'),
        5 => array(6, '西'),
        6 => array(15, '北'),
    ),
    24 => array(
        1 => array(8, '東'),
        2 => array(7, '西'),
        3 => array(8, '北'),
        4 => array(4, '南'),
        5 => array(9, '西'),
        6 => array(9, '南'),
    ),
    25 => array(
        1 => array(19, '西'),
        2 => array(15, '東'),
        3 => array(5, '南'),
        4 => array(19, '北'),
        5 => array(11, '東'),
        6 => array(12, '北'),
    ),
    26 => array(
        1 => array(8, '南'),
        2 => array(5, '東'),
        3 => array(12, '西'),
        4 => array(12, '東'),
        5 => array(8, '北'),
        6 => array(10, '南'),
    ),
    27 => array(
        1 => array(16, '東'),
        2 => array(13, '西'),
        3 => array(9, '北'),
        4 => array(11, '東'),
        5 => array(12, '南'),
        6 => array(17, '北'),
    ),
    28 => array(
        1 => array(5, '南'),
        2 => array(9, '東'),
        3 => array(7, '西'),
        4 => array(15, '西'),
        5 => array(17, '北'),
        6 => array(11, '東'),
    ),
    29 => array(
        1 => array(17, '南'),
        2 => array(17, '東'),
        3 => array(13, '西'),
        4 => array(15, '北'),
        5 => array(11, '南'),
        6 => array(17, '東'),
    ),
    30 => array(
        1 => array(3, '南'),
        2 => array(13, '北'),
        3 => array(17, '東'),
        4 => array(16, '西'),
        5 => array(3, '南'),
        6 => array(13, '北'),
    ),
    31 => array(
        1 => array(10, '南'),
        2 => array(10, '東'),
        3 => array(1, '北'),
        4 => array(17, '南'),
        5 => array(1, '西'),
        6 => array(6, '東'),
    ),
    32 => array(
        1 => array(14, '東'),
        2 => array(11, '南'),
        3 => array(2, '北'),
        4 => array(4, '西'),
        5 => array(3, '西'),
        6 => array(16, '北'),
    ),
    33 => array(
        1 => array(7, '南'),
        2 => array(19, '西'),
        3 => array(14, '東'),
        4 => array(3, '北'),
        5 => array(4, '東'),
        6 => array(4, '北'),
    ),
    34 => array(
        1 => array(6, '南'),
        2 => array(7, '東'),
        3 => array(7, '南'),
        4 => array(8, '西'),
        5 => array(18, '東'),
        6 => array(10, '北'),
    ),
    35 => array(
        1 => array(6, '西'),
        2 => array(11, '東'),
        3 => array(15, '北'),
        4 => array(12, '南'),
        5 => array(17, '東'),
        6 => array(8, '南'),
    ),
    36 => array(
        1 => array(17, '西'),
        2 => array(8, '東'),
        3 => array(17, '北'),
        4 => array(3, '南'),
        5 => array(5, '西'),
        6 => array(6, '北'),
    ),
    37 => array(
        1 => array(1, '西'),
        2 => array(4, '南'),
        3 => array(6, '北'),
        4 => array(13, '東'),
        5 => array(11, '西'),
        6 => array(1, '東'),
    ),
    38 => array(
        1 => array(14, '南'),
        2 => array(12, '北'),
        3 => array(18, '西'),
        4 => array(12, '西'),
        5 => array(15, '東'),
        6 => array(5, '東'),
    ),
    39 => array(
        1 => array(18, '南'),
        2 => array(19, '北'),
        3 => array(19, '西'),
        4 => array(10, '南'),
        5 => array(5, '東'),
        6 => array(12, '東'),
    ),
    40 => array(
        1 => array(16, '南'),
        2 => array(17, '北'),
        3 => array(4, '東'),
        4 => array(5, '西'),
        5 => array(10, '東'),
        6 => array(18, '西'),
    ),
    41 => array(
        1 => array(8, '西'),
        2 => array(14, '東'),
        3 => array(18, '北'),
        4 => array(19, '南'),
        5 => array(5, '北'),
        6 => array(2, '南'),
    ),
    42 => array(
        1 => array(2, '南'),
        2 => array(8, '北'),
        3 => array(6, '東'),
        4 => array(11, '西'),
        5 => array(1, '南'),
        6 => array(2, '北'),
    ),
    43 => array(
        1 => array(15, '南'),
        2 => array(3, '東'),
        3 => array(13, '南'),
        4 => array(7, '西'),
        5 => array(13, '北'),
        6 => array(19, '西'),
    ),
    44 => array(
        1 => array(10, '西'),
        2 => array(18, '東'),
        3 => array(10, '北'),
        4 => array(16, '北'),
        5 => array(2, '南'),
        6 => array(8, '東'),
    ),
    45 => array(
        1 => array(13, '南'),
        2 => array(11, '北'),
        3 => array(9, '東'),
        4 => array(19, '西'),
        5 => array(1, '北'),
        6 => array(11, '西'),
    ),
    46 => array(
        1 => array(7, '西'),
        2 => array(18, '北'),
        3 => array(16, '南'),
        4 => array(9, '東'),
        5 => array(6, '南'),
        6 => array(5, '西'),
    ),
    47 => array(
        1 => array(11, '西'),
        2 => array(16, '北'),
        3 => array(9, '南'),
        4 => array(1, '南'),
        5 => array(6, '東'),
        6 => array(6, '西'),
    ),
    48 => array(
        1 => array(2, '西'),
        2 => array(7, '南'),
        3 => array(2, '東'),
        4 => array(6, '西'),
        5 => array(10, '北'),
        6 => array(4, '東'),
    ),
    49 => array(
        1 => array(2, '北'),
        2 => array(17, '南'),
        3 => array(12, '東'),
        4 => array(1, '西'),
        5 => array(17, '南'),
        6 => array(3, '東'),
    ),
    50 => array(
        1 => array(5, '西'),
        2 => array(6, '北'),
        3 => array(1, '東'),
        4 => array(4, '北'),
        5 => array(10, '南'),
        6 => array(8, '西'),
    ),
    51 => array(
        1 => array(3, '西'),
        2 => array(1, '北'),
        3 => array(18, '東'),
        4 => array(13, '南'),
        5 => array(8, '南'),
        6 => array(19, '北'),
    ),
    52 => array(
        1 => array(1, '北'),
        2 => array(3, '西'),
        3 => array(14, '南'),
        4 => array(2, '東'),
        5 => array(9, '北'),
        6 => array(12, '西'),
    ),
    53 => array(
        1 => array(6, '北'),
        2 => array(4, '西'),
        3 => array(1, '南'),
        4 => array(1, '北'),
        5 => array(4, '西'),
        6 => array(14, '東'),
    ),
    54 => array(
        1 => array(16, '西'),
        2 => array(9, '南'),
        3 => array(14, '北'),
        4 => array(10, '西'),
        5 => array(19, '東'),
        6 => array(3, '北'),
    ),
    55 => array(
        1 => array(4, '南'),
        2 => array(9, '北'),
        3 => array(17, '西'),
        4 => array(17, '西'),
        5 => array(15, '北'),
        6 => array(9, '東'),
    ),
    56 => array(
        1 => array(16, '北'),
        2 => array(14, '西'),
        3 => array(8, '東'),
        4 => array(2, '南'),
        5 => array(3, '北'),
        6 => array(19, '南'),
    ),
    57 => array(
        1 => array(4, '西'),
        2 => array(15, '北'),
        3 => array(18, '南'),
        4 => array(3, '東'),
        5 => array(7, '西'),
        6 => array(8, '北'),
    ),
    58 => array(
        1 => array(9, '西'),
        2 => array(3, '北'),
        3 => array(15, '東'),
        4 => array(5, '北'),
        5 => array(15, '西'),
        6 => array(6, '南'),
    ),
    59 => array(
        1 => array(7, '北'),
        2 => array(5, '西'),
        3 => array(3, '東'),
        4 => array(10, '北'),
        5 => array(10, '西'),
        6 => array(17, '南'),
    ),
    60 => array(
        1 => array(18, '西'),
        2 => array(10, '北'),
        3 => array(8, '南'),
        4 => array(19, '東'),
        5 => array(16, '南'),
        6 => array(10, '東'),
    ),
    61 => array(
        1 => array(3, '北'),
        2 => array(18, '南'),
        3 => array(6, '西'),
        4 => array(17, '北'),
        5 => array(14, '東'),
        6 => array(18, '東'),
    ),
    62 => array(
        1 => array(13, '西'),
        2 => array(5, '北'),
        3 => array(16, '西'),
        4 => array(11, '南'),
        5 => array(18, '南'),
        6 => array(16, '東'),
    ),
    63 => array(
        1 => array(15, '西'),
        2 => array(4, '北'),
        3 => array(16, '東'),
        4 => array(8, '東'),
        5 => array(9, '南'),
        6 => array(7, '北'),
    ),
    64 => array(
        1 => array(14, '西'),
        2 => array(7, '北'),
        3 => array(10, '東'),
        4 => array(18, '南'),
        5 => array(19, '西'),
        6 => array(1, '南'),
    ),
    65 => array(
        1 => array(17, '北'),
        2 => array(15, '南'),
        3 => array(14, '西'),
        4 => array(14, '北'),
        5 => array(13, '東'),
        6 => array(5, '南'),
    ),
    66 => array(
        1 => array(14, '北'),
        2 => array(9, '西'),
        3 => array(19, '東'),
        4 => array(2, '西'),
        5 => array(18, '北'),
        6 => array(4, '南'),
    ),
    67 => array(
        1 => array(8, '北'),
        2 => array(6, '西'),
        3 => array(3, '南'),
        4 => array(7, '東'),
        5 => array(16, '西'),
        6 => array(1, '北'),
    ),
    68 => array(
        1 => array(19, '北'),
        2 => array(1, '西'),
        3 => array(11, '東'),
        4 => array(11, '北'),
        5 => array(5, '南'),
        6 => array(15, '南'),
    ),
    69 => array(
        1 => array(9, '北'),
        2 => array(12, '西'),
        3 => array(6, '南'),
        4 => array(6, '北'),
        5 => array(7, '東'),
        6 => array(17, '西'),
    ),
    70 => array(
        1 => array(11, '北'),
        2 => array(2, '東'),
        3 => array(5, '西'),
        4 => array(12, '北'),
        5 => array(14, '南'),
        6 => array(1, '西'),
    ),
    71 => array(
        1 => array(10, '北'),
        2 => array(19, '南'),
        3 => array(2, '西'),
        4 => array(2, '北'),
        5 => array(12, '東'),
        6 => array(15, '西'),
    ),
    72 => array(
        1 => array(13, '北'),
        2 => array(8, '西'),
        3 => array(2, '南'),
        4 => array(8, '南'),
        5 => array(4, '北'),
        6 => array(19, '東'),
    ),
    73 => array(
        1 => array(18, '北'),
        2 => array(15, '西'),
        3 => array(11, '南'),
        4 => array(8, '北'),
        5 => array(14, '西'),
        6 => array(13, '東'),
    ),
    74 => array(
        1 => array(15, '北'),
        2 => array(17, '西'),
        3 => array(19, '南'),
        4 => array(18, '西'),
        5 => array(8, '東'),
        6 => array(5, '北'),
    ),
    75 => array(
        1 => array(4, '北'),
        2 => array(18, '西'),
        3 => array(5, '東'),
        4 => array(7, '南'),
        5 => array(19, '北'),
        6 => array(10, '西'),
    ),
    76 => array(
        1 => array(5, '北'),
        2 => array(11, '西'),
        3 => array(12, '南'),
        4 => array(18, '北'),
        5 => array(9, '東'),
        6 => array(2, '西'),
    ),
);


// 处理注销逻辑
if (isset($_GET['logout'])) {
    session_unset(); // 清空会话数据
    session_destroy(); // 销毁会话
    header('Location: ' . $_SERVER['PHP_SELF']); // 重定向到当前页面，确保会话注销后刷新页面
    exit;
}

require('../wp-load.php');
global $wpdb;

function generate_table($existing_numbers) {
    
    $html = '<div style="width:100%; margin-left:10px; margin-right:10px; "> <p style=" font-size:40px;">Seat Number Left: </p><table class="responsive-table" style=" width: 100%;border-collapse: collapse;font-size:30px; text-align:center;">';
    $num = 1;
    for ($row = 0; $row < 13; $row++) {
        $html .= '<tr>';
        for ($col = 0; $col < 6; $col++) {
            $color = in_array($num, $existing_numbers) ? 'grey' : 'white';
            $html .= "<td style='background-color: $color'>$num</td>";
            $num++;
            if ($num > 76) break;
        }
        $html .= '</tr>';
    }
    $html .= '</table></div>';
    return $html;
}

function draw_number($existing_numbers, $seed) {
    // 使用当前时间作为种子
    srand(strtotime($seed));
    
    // 获取剩余的数字
    $available_numbers = array_diff(range(1, 76), $existing_numbers);
    
    // 从剩余数字中随机选择一个
    return $available_numbers[array_rand($available_numbers)];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($password === 'berlin2024') {
        $table_name = 'a_yakitori_draw';
        $user = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM $table_name WHERE account = %s",
            $username
        ));

        if ($user > 0) {
            // 获取表中的所有 num 列的值
            $existing_numbers = $wpdb->get_col("SELECT num FROM $table_name");
            
            // 获取当前用户的 num 值
            $user_num = $wpdb->get_var($wpdb->prepare(
                "SELECT num FROM $table_name WHERE account = %s",
                $username
            ));
            
            // 将用户名存储到会话中
            $_SESSION['username'] = $username;
            
            echo '<div class="logo-container" style="text-align: center;">
            <img style="max-width: 30vw;height: auto;" src="https://berlin-mahjong.club/wp-content/uploads/2022/09/berlin-mahjong-club-logo-black.png" alt="Berlin Mahjong Club Logo">
            <h1> Yakitori 2024 Seating System</h1>
        </div>';

            // 登录成功，显示表格
            echo '<div style="text-align: center;"><p style=" font-size:40px; margin-left:10px;"> Hello '.$username.'!<br>Login Successful！</p></div>';
            echo generate_table($existing_numbers);
            
            if ($user_num == 0 && isset($_POST['draw'])) {
                
                $existing_numbers = $wpdb->get_col("SELECT num FROM $table_name");
                // 抽签
                $ip_address = $_SERVER['REMOTE_ADDR'];
                $current_time = current_time('mysql');
                $drawn_number = draw_number($existing_numbers, $current_time);

                // 更新数据库
                $wpdb->update(
                    $table_name,
                    array(
                        'num' => $drawn_number,
                        'ip' => $ip_address,
                        'time' => $current_time
                    ),
                    array('account' => $username)
                );

                // 更新后的 num 值
                $user_num = $drawn_number;
                

            }
            
            echo '<div style="width:100%;text-align:center">';
            if ($user_num == 0) {
                echo '<br><br><br> <form method="POST">
                        <input type="hidden" name="username" value="' . htmlspecialchars($username) . '">
                        <input type="hidden" name="password" value="' . htmlspecialchars($password) . '">
                        <button type="submit" name="draw" style="width:50%;font-size: 50px">Draw a Seat</button>
                      </form> </div>';
            } else {
                echo '<br><br><br><p style=" font-size:40px; margin-left:10px;">You have already drawn!<br>Your seat number is: ' . $user_num . '</p>';
                echo '<br>';
                for ($round = 1; $round <= 6; $round++) {
                    echo '<p style=" font-size:40px; margin-left:10px;">Round #'.$round.': Table #'.str_pad($seats[$user_num][$round][0], 2, '0', STR_PAD_LEFT).' Seat '.$seats[$user_num][$round][1].'</p></div">';
                }
            }
            echo '</div>';
            
            echo '<br>
                  <div style="width:100%;text-align:center">
                  <button style="width:50%;font-size: 50px" onclick="location.href='."'https://berlin-mahjong.club/wp-content/uploads/2024/06/yakitori2024seating.png'".'" type="button">Seat Plan</button>
                  <div>';
            
            echo '<br><br>
                  <div style="width:100%;text-align:center">
                  <button style="width:50%;font-size: 50px" onclick="location.href='."'https://riichi.berlin-mahjong.club/'".'" type="button">Test Pantheon</button>
                  <div>';
                  
            // 显示注销按钮
            echo '<br><br>
                  <div style="width:100%;text-align:center">
                  <a href="?logout" style="width:50%;font-size: 50px; display:block; margin: 0 auto;">Logout</a>
                  </div>';

            
        } else {
                        echo '<div class="logo-container" style="text-align: center;">
            <img style="max-width: 30vw;height: auto;" src="https://berlin-mahjong.club/wp-content/uploads/2022/09/berlin-mahjong-club-logo-black.png" alt="Berlin Mahjong Club Logo">
            <h1> Yakitori 2024 Seating System</h1>
        </div>';
            echo '<div style="text-align: center;"> <p style=" font-size:40px;"> No Account！</p></div>';
        }
    } else {
                    echo '<div class="logo-container" style="text-align: center;">
            <img style="max-width: 30vw;height: auto;" src="https://berlin-mahjong.club/wp-content/uploads/2022/09/berlin-mahjong-club-logo-black.png" alt="Berlin Mahjong Club Logo">
            <h1> Yakitori 2024 Seating System</h1>
        </div>';
        echo '<div style="text-align: center;"> <p style=" font-size:40px;"> Wrong Password！</p></div>';
    }
} else {
    // 显示登录表单
    echo '<!DOCTYPE html>
    <html lang="zh">
    <head>
        <meta charset="UTF-8">
        <title>Yakitori Seating</title>
        <style>
            .responsive-table {
                width: 100%;
                border-collapse: collapse;
            }
            .responsive-table td {
                width: 10%;
                padding: 10px;
                text-align: center;
            }
            @media (max-width: 600px) {
                .responsive-table td {
                    display: block;
                    width: 100%;
                }
                .responsive-table tr {
                    display: flex;
                    flex-wrap: wrap;
                }
            }
        </style>
    </head>
    <body>
        <div class="logo-container" style="text-align: center;">
            <img style="max-width: 30vw;height: auto;" src="https://berlin-mahjong.club/wp-content/uploads/2022/09/berlin-mahjong-club-logo-black.png" alt="Berlin Mahjong Club Logo">
            <h1> Yakitori 2024 Seating System</h1>
        </div>
        <div style="width:100%;text-align:center">
            <div style="height:10vh">
            </div>
            <form method="POST" style="width:100%;  font-size: 50px">
                <br>
                <label for="username">Account:</label>
                <input type="text" id="username" name="username" required style="width:50%;font-size: 50px" >
                <br>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required style="width:50%;font-size: 50px">
                <br>
                <br>
                <button type="submit"  style="width:50%;font-size: 50px">Login</button>
            </form>
        </div>
        <div style="text-align: center;margin-left: 20px;margin-right: 20px;"> <br> <br> <br><p style="font-size:18px;">* Participants can login to draw lots for seats before June 19, 2024 10AM (CET). Participants who do not participate in the draw will be assigned seats randomly.</p>
        </div>
    </body>
    </html>';
}
?>
