<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<br><h2><center><b>รายงานสถานการณ์ COVID-19 ประจำวัน แยกตามรายจังหวัด</b></center></h2><br>";
  echo "<center><table border='1'>";
  echo "<tr align='center'>
        <td bgcolor='#413C69'><b>ลำดับ</b></td>
        <td bgcolor='#E6E6FA'><b>จังหวัด</b></td>
        <td bgcolor='#4682B4'><b>ผู้ป่วยใหม่</b></td>
        <td bgcolor='#218B81'><b>ผู้ป่วยรวม</b></td>
        <td bgcolor='#FFD700'><b>ผู้ป่วยในประเทศ</b></td>
        <td bgcolor='#FF4500'><b>ผู้ป่วยรวมในประเทศ</b></td>
        <td bgcolor='#FA8072'><b>ผู้เสียชีวิตใหม่</b></td>
        <td bgcolor='#9C4B28'><b>ผู้เสียชีวิตรวม</b></td></font></tr>";
 
  foreach($data as $key=>$val){
    echo "<tr align='center'>";
    echo "<td bgcolor='#3CB371'>";
    echo ($key+1);
    echo "</td>";
    
    echo "<td bgcolor='#FFF4B5'>";
    echo $val->province;
    echo "</td>";
    
    echo "<td bgcolor='#00BFFF'>";
    echo $val->new_case;
    echo "</td>";
    
    echo "<td bgcolor='#A9C8C0'>";
    echo $val->total_case;
    echo "</td>";
    
    echo "<td bgcolor='#F5DEB3'>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#FFFF00'>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#E9967A'>";
    echo $val->new_death;
    echo "</td>";
    
    echo "<td bgcolor='#FF0000'>";
    echo $val->total_death;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table><br>"; 

  echo "<center><b>วันที่อัปเดต</b></center>";
  echo $val->update_date;
  echo "</center>";
?>
