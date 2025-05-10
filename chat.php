<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "User_" . rand(100, 999);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp-Style Live Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e5ddd5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .chat-container {
            width: 600px;
            height: 700px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
            

        }
        .chat-header {
            background: #075e54;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .delete-btn {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        .chat-box {
            width: 90%;
            height: 400px;
            overflow-y: auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            background: url('whatsapp-bg.png');
        

           
        }
        .message {
            max-width: 70%;
            padding: 8px 12px;
            border-radius: 10px;
            margin: 5px;
            font-size: 14px;
            position: relative;
            word-wrap: break-word;
        }
        .sender {
            align-self: flex-end;
            background: #dcf8c6;
            color: black;
        }
        .receiver {
            align-self: flex-start;
            background: #fff;
            border: 1px solid #ddd;
            color: black;
        }
        .timestamp {
            font-size: 10px;
            color: gray;
            position: absolute;
            bottom: 3px;
            right: 10px;
        }
        .chat-input-container {
            display: flex;
            align-items: center;
            padding: 10px;
            background: #fff;
            border-top: 1px solid #ddd;
            margin-top: 300px;
        }
        .chat-input {
            flex: 1;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ddd;
            font-size: 16px;
            outline: none;
        }
        .send-btn {
            padding: 10px 15px;
            border: none;
            border-radius: 50%;
            margin-left: 10px;
            background: #007bff;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        .send-btn:hover { background: #0056b3; }

        /* ✅ Custom Alert Box Styling */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .alert-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 300px;
            font-size: 16px;
            position: relative;
            animation: fadeIn 0.3s ease-in-out;
        }
        .alert-box button {
            margin-top: 10px;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            background: #007bff;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }
        .alert-box button:hover {
            background: #0056b3;
        }

        /* ✅ Smooth fade-in animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="chat-container">
    <div class="chat-header">
        <span>Live Chat</span>
        <button onclick="showAlert()" class="delete-btn">🗑</button>
    </div>
    <div class="chat-box" id="chat-box"></div>
    <div class="chat-input-container">
        <input type="text" id="message" class="chat-input" placeholder="Type a message..." onkeypress="handleKeyPress(event)">
        <button onclick="sendMessage()" class="send-btn">➤</button>
    </div>
</div>

<!-- ✅ Custom Alert Box -->
<div class="overlay" id="overlay">
    <div class="alert-box">
        <p>Are you sure you want to delete the chat?</p>
        <button onclick="deleteChat()">Yes</button>
        <button onclick="hideAlert()">No</button>
    </div>
</div>

<script>
function loadChat() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "load_chat.php", true);
    xhr.onload = function () {
        document.getElementById("chat-box").innerHTML = this.responseText;
        document.getElementById("chat-box").scrollTop = document.getElementById("chat-box").scrollHeight;
    };
    xhr.send();
}
setInterval(loadChat, 1000);

function sendMessage() {
    let message = document.getElementById("message").value;
    if (message.trim() === "") return;
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "send_message.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        document.getElementById("message").value = "";
        loadChat();
    };
    xhr.send("message=" + message);
}

function handleKeyPress(event) {
    if (event.key === "Enter") {
        sendMessage();
    }
}

/* ✅ Show Custom Alert */
function showAlert() {
    document.getElementById("overlay").style.display = "flex";
}

/* ✅ Hide Custom Alert */
function hideAlert() {
    document.getElementById("overlay").style.display = "none";
}

/* ✅ Delete Chat */
function deleteChat() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "delete_chat.php", true);
    xhr.onload = function () {
        hideAlert();
        loadChat();
    };
    xhr.send();
}
</script>

</body>
</html>
