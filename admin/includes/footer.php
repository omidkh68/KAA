<?php
include_once '../../includes/db/connection.php';

$copyrightSql = <<<SQL
  SELECT * FROM `copyright`
    WHERE lang = 'en'
SQL;

if($sqlResult = $db->query($copyrightSql)){
    $copyrightText = "";

    $copyrightText = $sqlResult->fetch_object()->text;

    $db->close();
}
?>

<footer>
    <p class="pull-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
        &copy; <span class="current-year"><?php echo date("Y"); ?> - </span>
        <span data-word="copy"><?php echo $copyrightText; ?></span>
    </p>
</footer><!-- /Footer of Site -->
