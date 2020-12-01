<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

    // localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, post_board="DB이름"
    $db = new mysqli("localhost", "huny10000","dlwlgns71008986!","huny10000");
    $db->set_charset("utf8");

    function mq($sql)
    {
        global $db;
        return $db->query($sql);
    }
?>
