<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fertilizer Prediction</title>
    <style>
        body {
            background-image: url('https://wallpaperaccess.com/full/7150969.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.85);
            width: 400px;
            margin: 60px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
        }

        h2, h3 {
            text-align: center;
            color: maroon;
            margin-bottom: 15px;
        }

        label {
            color: maroon;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        select {
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            width: 100%;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        #result {
            text-align: center;
            color: maroon;
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Fertilizer Prediction</h2>
    <h3>Find the Best Match for Your Crop</h3>
    <form id="predictionForm">
        <label for="temperature">Temperature (°C):</label>
        <input type="text" id="temperature" name="temperature" required>

        <label for="humidity">Humidity in %:</label>
        <input type="text" id="humidity" name="humidity" required>

        <label for="moisture">Moisture in %:</label>
        <input type="text" id="moisture" name="moisture" required>

        <label for="soil">Soil Type:</label>
        <select id="soil" name="soil" required>
            <option value="Black">Black</option>
            <option value="Clayey">Clayey</option>
            <option value="Sandy">Sandy</option>
            <option value="Loamy">Loamy</option>
            <option value="Red">Red</option>
        </select>

        <label for="crop">Crop Type:</label>
        <select id="crop" name="crop" required>
            <option value="Sugarcane">Sugarcane</option>
            <option value="Paddy">Paddy</option>
            <option value="Wheat">Wheat</option>
            <option value="Cotton">Cotton</option>
            <option value="Maize">Maize</option>
            <option value="Tobacco">Tobacco</option>
            <option value="Barley">Barley</option>
            <option value="Millets">Millets</option>
            <option value="Oil seeds">Oil seeds</option>
            <option value="Pulses">Pulses</option>
            <option value="Ground Nuts">Ground Nuts</option>
        </select>

        <label for="nitrogen">Nitrogen (kg/ha):</label>
        <input type="text" id="nitrogen" name="nitrogen" required>

        <label for="potassium">Potassium (kg/ha):</label>
        <input type="text" id="potassium" name="potassium" required>

        <label for="phosphorous">Phosphorous (kg/ha):</label>
        <input type="text" id="phosphorous" name="phosphorous" required>

        <input type="submit" value="Submit">
    </form>

    <div id="result"></div>
</div>

<script>
    document.getElementById('predictionForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Prevent the form from submitting normally

        // Collect form data
        const data = {
            temperature: document.getElementById('temperature').value,
            humidity: document.getElementById('humidity').value,
            moisture: document.getElementById('moisture').value,
            soil_type: document.getElementById('soil').value,
            crop_type: document.getElementById('crop').value,
            nitrogen: document.getElementById('nitrogen').value,
            potassium: document.getElementById('potassium').value,
            phosphorous: document.getElementById('phosphorous').value
        };

        // Send data to Flask for prediction
        fetch('http://127.0.0.1:5000/predict', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(result => {
            // Display the result
            if (result.recommended_fertilizer) {
                document.getElementById('result').innerText = "Recommended Fertilizer: " + result.recommended_fertilizer;
            } else {
                document.getElementById('result').innerText = "Error: " + result.error;
            }
        })
        .catch(error => {
            document.getElementById('result').innerText = "There was an error with the request.";
            console.error('Error:', error);
        });
    });
</script>

</body>
</html>
