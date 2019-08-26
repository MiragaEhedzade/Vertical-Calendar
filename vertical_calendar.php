<style>
 /* calendar */
table.calendar		{ border-left:1px solid #999; }
tr.calendar-row	{  }
td.calendar-day	{ min-height:80px; font-size:11px; position:relative; } * html div.calendar-day { height:80px; }
td.calendar-day:hover	{ background:#eceff5; }
td.calendar-day-np	{ background:#eee; min-height:80px; } * html div.calendar-day-np { height:80px; }
td.calendar-day-head { background:#ccc; font-weight:bold; text-align:center; width:120px; padding:5px; border-bottom:1px solid #999; border-top:1px solid #999; border-right:1px solid #999; }
div.day-number		{ background:#999; padding:5px; color:#fff; font-weight:bold; float:right; margin:-5px -5px 0 0; width:20px; text-align:center; }
/* shared */
td.calendar-day, td.calendar-day-np { width:120px; padding:5px; border-bottom:1px solid #999; border-right:1px solid #999; }
</style>


 <?php 
 
 function draw_calendar($month,$year){  
    $table = '<table class="calendar" cellspacing="0" cellpadding="0"><tbody>';
    $trDayName = '<tr class="calendar-row">';
    $trDayNumber = '<tr class="calendar-row">';
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
    for($i=1;$i<=$days_in_month;$i++)
    { 
        $datetime = DateTime::createFromFormat('Y.m.d', "$year.$month.$i");
        $dayName = $datetime->format('D');
        $trDayName .= '<td class="calendar-day-head">'.$dayName.'</td>';
        $trDayNumber .= '<td class="calendar-day-head">'.$i.'</td>';
    }
    
    $trDayName .= '</td>';
    $trDayNumber .= '</td>';
    $table .= $trDayName.$trDayNumber.'</tbody></table>';
    return $table;
 }
 
 
 echo draw_calendar(3,2020);
 
 ?>