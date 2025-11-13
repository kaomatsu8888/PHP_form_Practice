<?php session_start(); ?>
<html>
<body>
<?php
    $_SESSION['bridge'] = 100;
    $b = $_SESSION['bridge'];
    print "ページの１の値は $b です。<br>\n";
?>
<a href='session2.php'>ページ１へ</a>
</body>
</html>