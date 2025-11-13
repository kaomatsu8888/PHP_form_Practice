<?php session_start(); ?>
<html>
<body>
    <?php $_SESSION['bridge'] = 100;
    $b = $_SESSION['bridge'];
    print 'ページの2の値は. $bです。<br>\n';
    ?>
<a href='session2.php'>ページ１へ</a>
</body>

</html>