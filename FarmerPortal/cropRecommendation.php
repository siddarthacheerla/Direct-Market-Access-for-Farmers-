<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crop Recommendation 🌱</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: url('https://wallpaperaccess.com/full/3543885.jpg') no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: brightness(0.7);
        }

        .form-container {
            background: rgba(22, 22, 22, 0.85); /* semi-transparent dark */
            padding: 30px 30px;
            border-radius: 15px;
            /*width: 400px;*/
            box-shadow: 0 0 20px rgba(0, 255, 0, 0.4);
            color: white;
        }

        h2 {
            color: #00ff66;
            text-align: center;
            font-size: 2em;
            margin-bottom: 10px;
        }

        .icon {
            text-align: center;
            font-size: 30px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: 600;
        }

        input[type=number] {
            width: 100%;
            /*padding: 12px;*/
            /*margin-bottom: 15px;*/
            border-radius: 8px;
           background: #2c2c2c;
            border: none;
            color: white;
            font-size: 15px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #00ff66;
            color: black;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #00cc55;
        }

        .result {
            margin-top: 20px;
            text-align: center;
            font-size: 1.3em;
            color: #00ff66;
        }

        .error {
            margin-top: 20px;
            text-align: center;
            color: red;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Crop Recommendation</h2>
        <div class="icon">🌾</div>

        <form method="POST">
            <label for="N">Nitrogen</label>
            <input type="number" name="N" required>

            <label for="P">Phosphorus</label>
            <input type="number" name="P" required>

            <label for="K">Potassium</label>
            <input type="number" name="K" required>

            <label for="temperature">Temperature (°C)</label>
            <input type="number" name="temperature" required>

            <label for="humidity">Humidity in %</label>
            <input type="number" name="humidity" required>

            <label for="ph">pH</label>
            <input type="number" step="0.1" name="ph" required>

            <label for="rainfall">Rainfall in mm</label>
            <input type="number" name="rainfall" required>

            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $N = $_POST['N'];
            $P = $_POST['P'];
            $K = $_POST['K'];
            $temperature = $_POST['temperature'];
            $humidity = $_POST['humidity'];
            $ph = $_POST['ph'];
            $rainfall = $_POST['rainfall'];

            $url = "http://localhost:5000/predict-crop?N=$N&P=$P&K=$K&temperature=$temperature&humidity=$humidity&ph=$ph&rainfall=$rainfall";

            $response = @file_get_contents($url);
            $data = json_decode($response, true);

            if ($response && isset($data['crop'])) {
                echo "<div class='result'>🌾 Recommended Crop: <strong>" . htmlspecialchars($data['crop']) . "</strong></div>";
            } else {
                echo "<div class='error'>⚠️ Error: " . ($data['error'] ?? 'Unable to fetch prediction. Check server.') . "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
