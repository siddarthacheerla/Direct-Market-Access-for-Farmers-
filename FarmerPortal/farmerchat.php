<!-- farmer/farmerchat.php -->
<?php
session_start();

// Simulate login for demo purposes (REMOVE this after real login)
if (!isset($_SESSION['farmer_id'])) {
    $_SESSION['farmer_id'] = 'farmer_a';  // Default for testing
}

$farmerId = $_SESSION['farmer_id'];
$farmerDisplayName = ucfirst(str_replace('_', ' ', $farmerId));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer Chat with Buyer</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .chat-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        #chat-box {
            width: 400px;
            height: 300px;
            border: 1px solid #ccc;
            overflow-y: scroll;
            margin-bottom: 10px;
            padding: 10px;
            text-align: left;
            background-color: #f9f9f9;
        }

        input[type="text"] {
            padding: 8px;
            margin: 5px;
            width: 180px;
        }

        button {
            padding: 8px 15px;
            margin: 5px;
        }

        .buyer { color: blue; font-weight: bold; }
        .farmer { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <div class="chat-container">
        <h2>Welcome, <?php echo htmlspecialchars($farmerDisplayName); ?></h2>

        <!-- Hidden farmer ID -->
        <input type="hidden" id="farmer" value="<?php echo htmlspecialchars($farmerId); ?>">
        <input type="hidden" id="chat_with" value="buyer1">

        <!-- Buyer selection -->
        <label for="buyer">Select Buyer:</label>
        <select id="buyer" onchange="switchBuyer()">
            <option value="buyer1">Buyer 1</option>
            <option value="buyer2">Buyer 2</option>
            <option value="buyer3">Buyer 3</option>
        </select>

        <div id="chat-box"></div>

        <input type="text" id="username" placeholder="Enter your name" />
        <input type="text" id="message" placeholder="Type your message" />
        <br>
        <button onclick="sendMessage()">Send</button>
        <button onclick="clearChat()">Clear Chat</button>
    </div>

    <script>
        let selectedFarmer = document.getElementById("farmer").value;
        let selectedBuyer = document.getElementById("chat_with").value;

        function switchBuyer() {
            selectedBuyer = document.getElementById("buyer").value;
            document.getElementById("chat_with").value = selectedBuyer;

            // Load chat with new buyer (cleared by default)
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "clear_chat.php?farmer=" + selectedFarmer + "&buyer=" + selectedBuyer, true);
            xhr.onload = function () {
                document.getElementById("chat-box").innerHTML = "";
            };
            xhr.send();

            getMessages();
        }

        function sendMessage() {
            const username = document.getElementById("username").value;
            const message = document.getElementById("message").value;

            if (username && message) {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "send_message.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send(`farmer=${selectedFarmer}&buyer=${selectedBuyer}&username=${encodeURIComponent(username)}&message=${encodeURIComponent(message)}`);
                document.getElementById("message").value = "";
            }
        }

        function getMessages() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "get_messages.php?farmer=" + selectedFarmer + "&buyer=" + selectedBuyer, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    document.getElementById("chat-box").innerHTML = xhr.responseText;
                    document.getElementById("chat-box").scrollTop = document.getElementById("chat-box").scrollHeight;
                }
            };
            xhr.send();
        }

        function clearChat() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "clear_chat.php?farmer=" + selectedFarmer + "&buyer=" + selectedBuyer, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    document.getElementById("chat-box").innerHTML = "";
                }
            };
            xhr.send();
        }

        setInterval(getMessages, 1000);
    </script>
</body>
</html>
