<?php
header("Content-Type: application/json");
echo json_encode([
    ["id" => 1, "title" => "Elden Ring", "review" => "Masterpiece", "rating" => 5],
    ["id" => 2, "title" => "Witcher 3", "review" => "Great story", "rating" => 5]
]);
?>
