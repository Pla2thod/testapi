<?php
header('Content-Type: application/json');

// กำหนดวันและเวลาที่ต้องการ
// สามารถปรับให้เป็นการดึงจากฐานข้อมูลหรือระบบอื่นได้
$dateTime = new DateTime();
$dateTime->setDate(2024, 9, 20); // ตั้งค่าเป็นวันที่ 20 กันยายน 2024
$dateTime->setTime(14, 30, 0); // ตั้งค่าเป็นเวลา 14:30:00

// สร้าง array ที่จะส่งออกมาเป็น JSON
$response = array(
    "scheduled_time" => $dateTime->format('Y-m-d H:i:s') // แปลง DateTime เป็นรูปแบบที่ต้องการ
);

// ส่งข้อมูลออกมาในรูปแบบ JSON
echo json_encode($response);
?>
