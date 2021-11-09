<?php
// Change the first param to change the passed format
$mysql_format_date = DateTime::createFromFormat('d/m/Y', $uk_formatted_date)->format('Y-m-d');
?>