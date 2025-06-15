<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Indian Contacts - States, Districts, Mandals, Villages</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding-top: 50px;
      background-image: url('https://static.vecteezy.com/system/resources/previews/000/453/432/non_2x/vector-contact-us-background.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      color: #fff;
    }
    .row {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }
    .dropdown {
      margin: 0 40px;
      background: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 12px;
    }
    select {
      padding: 10px;
      font-size: 16px;
      width: 220px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }
    label {
      font-weight: bold;
      font-size: 16px;
      display: block;
      margin-bottom: 8px;
      color: #ffeb3b;
    }
    #contact {
      margin-top: 40px;
      font-size: 24px;
      font-weight: bold;
      color: #00ff00;
    }
    h1 {
      margin-bottom: 40px;
      text-shadow: 2px 2px 4px #000;
    }
  </style>
</head>
<body>

<h1>Contact Us</h1>

<div class="row">
  <div class="dropdown">
    <label for="state">State:</label>
    <select id="state" onchange="stateChanged()">
      <option value="">Select State</option>
    </select>
  </div>

  <div class="dropdown">
    <label for="district">District:</label>
    <select id="district" onchange="districtChanged()">
      <option value="">Select District</option>
    </select>
  </div>
</div>

<div class="row">
  <div class="dropdown">
    <label for="mandal">Mandal:</label>
    <select id="mandal" onchange="mandalChanged()">
      <option value="">Select Mandal</option>
    </select>
  </div>

  <div class="dropdown">
    <label for="village">Village:</label>
    <select id="village" onchange="villageChanged()">
      <option value="">Select Village</option>
    </select>
  </div>
</div>

<div id="contact"></div>

<script>
const data = {
  "Andhra Pradesh": {
    "Krishna": {
      "Vijayawada Rural": { "Kesarapalli": "9876543210", "Gannavaram": "9876543211" },
      "Vijayawada Urban": { "Governorpet": "9876543212", "Suryaraopet": "9876543213" }
    },
    "Guntur": {
      "Tenali": { "Kollipara": "9876543214", "Burripalem": "9876543215" },
      "Mangalagiri": { "Nowluru": "9876543216", "Atmakur": "9876543217" }
    }
  },
  "Telangana": {
    "Adilabad": {
      "Adilabad Mandal": { "Adilabad Town": "9876543200", "Gudem": "9876543201" },
      "Bazarhatnoor": { "Village 1": "9876543202", "Village 2": "9876543203" }
    },
    "Warangal": {
      "Hanamkonda": { "Kazipet": "9876543220", "Subedari": "9876543221" },
      "Warangal Rural": { "Dharmasagar": "9876543222", "Geesugonda": "9876543223" }
    }
  },
  "Tamil Nadu": {
    "Chennai": {
      "Tondiarpet": { "Korukkupet": "9888001122", "Royapuram": "9888001123" },
      "Perambur": { "Vyasarpadi": "9888001124", "Sembium": "9888001125" }
    },
    "Coimbatore": {
      "Pollachi": { "Aliyar": "9888001130", "Sundarapuram": "9888001131" },
      "Mettupalayam": { "Karamadai": "9888001132", "Mettupalayam Town": "9888001133" }
    }
  },
  "Karnataka": {
    "Bengaluru Urban": {
      "Bangalore North": { "Yelahanka": "9888001140", "Hebbal": "9888001141" },
      "Bangalore South": { "Jayanagar": "9888001142", "Banashankari": "9888001143" }
    },
    "Mysuru": {
      "Mysore North": { "Hebbal": "9888001144", "Kuvempu Nagar": "9888001145" },
      "Mysore South": { "Saraswathipuram": "9888001146", "Vijayanagar": "9888001147" }
    }
  },
  "Kerala": {
    "Thiruvananthapuram": {
      "Neyyattinkara": { "Vellarada": "9888001150", "Kattakada": "9888001151" },
      "Kazhakoottam": { "Sreekaryam": "9888001152", "Pothencode": "9888001153" }
    },
    "Ernakulam": {
      "Aluva": { "Desom": "9888001154", "Periyar": "9888001155" },
      "Kochi": { "Fort Kochi": "9888001156", "Mattancherry": "9888001157" }
    }
  },
  "Maharashtra": {
    "Pune": {
      "Haveli": { "Wagholi": "9888001160", "Hadapsar": "9888001161" },
      "Mulshi": { "Pirangut": "9888001162", "Lavale": "9888001163" }
    },
    "Mumbai": {
      "Kurla": { "Kalina": "9888001164", "Sakinaka": "9888001165" },
      "Andheri": { "Versova": "9888001166", "Lokhandwala": "9888001167" }
    }
  }
  // You can extend this with all remaining states/UTs in similar structure
};

function populateDropdown(selectId, options) {
  const select = document.getElementById(selectId);
  select.innerHTML = "<option value=''>Select</option>";
  for (const key in options) {
    const opt = document.createElement('option');
    opt.value = key;
    opt.innerHTML = key;
    select.appendChild(opt);
  }
}

function stateChanged() {
  const state = document.getElementById('state').value;
  if (state) {
    populateDropdown('district', data[state]);
    document.getElementById('mandal').innerHTML = "<option value=''>Select</option>";
    document.getElementById('village').innerHTML = "<option value=''>Select</option>";
    document.getElementById('contact').innerText = "";
  } else {
    document.getElementById('district').innerHTML = "<option value=''>Select District</option>";
    document.getElementById('mandal').innerHTML = "<option value=''>Select Mandal</option>";
    document.getElementById('village').innerHTML = "<option value=''>Select Village</option>";
    document.getElementById('contact').innerText = "";
  }
}

function districtChanged() {
  const state = document.getElementById('state').value;
  const district = document.getElementById('district').value;
  if (state && district) {
    populateDropdown('mandal', data[state][district]);
    document.getElementById('village').innerHTML = "<option value=''>Select Village</option>";
    document.getElementById('contact').innerText = "";
  }
}

function mandalChanged() {
  const state = document.getElementById('state').value;
  const district = document.getElementById('district').value;
  const mandal = document.getElementById('mandal').value;
  if (state && district && mandal) {
    populateDropdown('village', data[state][district][mandal]);
    document.getElementById('contact').innerText = "";
  }
}

function villageChanged() {
  const state = document.getElementById('state').value;
  const district = document.getElementById('district').value;
  const mandal = document.getElementById('mandal').value;
  const village = document.getElementById('village').value;
  if (state && district && mandal && village) {
    const contact = data[state][district][mandal][village];
    document.getElementById('contact').innerText = "Mobile Number: " + contact;
  }
}

window.onload = function() {
  populateDropdown('state', data);
};
</script>
</body>
</html>
