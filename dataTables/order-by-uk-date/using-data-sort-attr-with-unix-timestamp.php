<!-- 
    Adding data-sort atttibute to the table cell will override its content when ordering
 -->
<td data-sort="<?= strtotime($mysql_formatted_date) ?>"><?= date_format(date_create($mysql_formatted_date), "d/m/Y") ?></td>