<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buyer Chat with Farmer</title>
    <style>
        /* Centering the page content using Flexbox */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .chat-container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        #chat-box {
            width: 400px;
            height: 300px;
            border: 1px solid #ccc;
            overflow-y: scroll;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .buyer {
            color: blue;
            font-weight: bold;
        }

        .farmer {
            color: green;
            font-weight: bold;
        }

        input[type="text"] {
            padding: 8px;
            margin: 5px;
            width: 80%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 15px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <h2>Chat with Farmer</h2>

        <!-- Select Farmer ID -->
        <label for="farmer">Select Farmer:</label>
        <select id="farmer">
            <option value="farmer_a">Farmer A</option>
            <option value="farmer_b">Farmer B</option>
        </select>

        <div id="chat-box"></div>

        <input type="text" id="username" placeholder="Enter your name" />
        <input type="text" id="message" placeholder="Type your message" />
        <button onclick="sendMessage()">Send</button>
    </div>

    <script>
        let selectedFarmer = document.getElementById("farmer").value;

        document.getElementById("farmer").addEventListener("change", function() {
            selectedFarmer = this.value;
            getMessages();
        });

        function sendMessage() {
            const username = document.getElementById("username").value;
            const message = document.getElementById("message").value;

            if (username && message) {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "send_message.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send(`farmer=${selectedFarmer}&username=${username}&message=${message}`);
                document.getElementById("message").value = "";
            }
        }

        function getMessages() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "get_messages.php?farmer=" + selectedFarmer, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById("chat-box").innerHTML = xhr.responseText;
                    document.getElementById("chat-box").scrollTop = document.getElementById("chat-box").scrollHeight;
                }
            };
            xhr.send();
        }

        setInterval(getMessages, 1000);
    </script>
</body>
</html>
