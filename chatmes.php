<?php
// Khởi tạo WebSocket
$websocket = new WebSocket("localhost", 8000);

// Khi khách hàng kết nối đến
$websocket->onConnect(function($connection) {
    echo "Khách hàng đã kết nối\n";
});

// Khi khách hàng gửi tin nhắn
$websocket->onMessage(function($connection, $message) use ($websocket) {
    // Gửi tin nhắn tới tất cả khách hàng khác
    foreach ($websocket->getConnections() as $client) {
        $client->send($message);
    }
});

// Khi khách hàng đóng kết nối
$websocket->onClose(function($connection) {
    echo "Khách hàng đã ngắt kết nối\n";
});

// Khởi động WebSocket
$websocket->run();
?>
