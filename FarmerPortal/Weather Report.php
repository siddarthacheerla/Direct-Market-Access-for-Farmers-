<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - Products</title>
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>

     <style>
          * {
               margin: 0;
               box-sizing: border-box;
          }


          .header {
               position: sticky;
               z-index: 100;
               top: 0rem;
               height: 69px;
               width: 100%;
               background-color: #00b300;
          }

          .select_element {
               width: 20px;
               background-color: transparent;
               border: none;
               text: none;
          }


          #logo {
               height: 66px;
               width: 100px;
               text-align: left;
               float: left;
          }


          

          #input1 {
               width: 220px;
               border: none;
          }


          #input1:active {
               background-color: tomato;
          }


          .wrapper {
               display: grid;
               grid-template-columns: 20% 20% 20% 20%;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               margin-left: 30px;
          }

          .inputwrapper {
               float: left;
               border-style: double;
               text-align: center;
               margin-left: 80px;
               width: 280px;
               margin-bottom: 20px;
               clear: auto;
          }


          .inputwrapper:last-child {
               margin-right: 30px;
          }

          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;
          }

          .content_item {
               text-align: center;
               justify-content: center;
          }

          .etc {
               margin-left: -40px;
               min-width: 90px;
               font-size: 20px;
          }

          .crop_items {
               color: green;
          }

          .footer {
               height: 70px;
               width: 100%;
               clear: both;
          }

        

          body {
               margin: 0;
               padding: 0;
               font-family: sans-serif;
              background-image: url('https://th.bing.com/th/id/OIP.Gu3Gs9l6D0AvsnTw7_pV6gHaE7?w=626&h=417&rs=1&pid=ImgDetMain');
               background-size: cover;
               background-position: center;
               background-repeat: no-repeat;
               box-sizing: border-box;
          }

          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

          }

          .lost {
               /* <font-fam></font-fam>; */
               color: black;
               text-align: center;
               height: 8%;
               margin-top: 150px;
               border-radius: 30px;
               font-size: 30px;
               /* margin-top: 5em; */
               background-color: olive;
               margin-top: 120px;
               margin: auto;
          }

          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

          h2 {
               
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
          }

          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-top: 2%;
               text-align: center;
               border-radius: 25px;
          }


          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

          }

          .lost {
               font-family: Verdana, Geneva, Tahoma, sans-serif;
               color: black;
               text-align: center;
               margin-top: 220px;
               margin: auto;
          }


          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

         
          }

          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-right: 12%;
               background-color: #00b300;
               text-align: center;
               /* border-radius: 25px; */
               width: 9%;
               height: 8%;
               margin-top: -5%;
               padding: 5px;

          }

          .items {
               width: 100%;
               margin: auto;
               height: auto;
          }

          /* 
          .productbox {
               float: left;
               margin: 15px;
               margin-left: 30px;
               padding: 15px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 10px;
          } */

          /* .productbox:hover {
               float: left;
               margin: 25px;
               margin-left: 30px;
               padding: 20px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 5px;
               font-weight: bolder;
               height: 325px;
               width: 240px;

          } */

          .slideshow {
               margin-top: 10px;
               margin-left: 100px;
               margin-bottom: 20px;
               float: left;
               border-style: solid;
          }

          #navbar {

               padding: 20px;
               color: green;
               text-decoration: none;
               margin: 20px;
               font-size: 25px;
               padding-top: 10px;
          }

          #navbar:hover {
               padding: 20px;
               color: green;
               text-decoration: underline;
               margin: 15px;
               font-size: 25px;
               font-weight: bolder;
               padding-top: 10px;
          }

          #navbar i {
               padding-right: 1%;
          }

          .time {
               background-color: red;
               /* margin-left: 20px; */
          }

          .whats {
               text-align: center;
               margin-left: 30%;
          }

          .f1 {
               float: left;
               background-color: #fff;
               border: 1px solid red;
               height: 200px;
               border-radius: 50%;
               width: 200px;
               padding-top: 20px;
               border-style: solid;
               background-image: url("../Images/Website/f2.jpg");
               background-size: 200px 200px;
               background-repeat: no-repeat;
               border-color: #000;
               /* opacity: 5%; */
          }

          .t1 {
               padding-top: 70px;
               text-align: center;
               justify-items: center;
               color: black;
               font-weight: bold;
          }

          .t5 {
               margin-top: -13px;
          }

          .t4 {
               margin-top: -13px;

          }

          .whatsnew {
               /* background-image: url("../Images/Website/back.jpeg"); */

               background-color: red;

          }

          .f2 {
               margin-left: 130px;
               margin-right: 150px;
          }

          .f3 {
               margin-right: 150px;

          }

          .f4 {
               margin-right: 150px;
          }

          .pictus {
               margin-top: 200px;
               /* background-color: red; */
          }

          .pictus>img {
               height: 100px;

               width: 150px;
          }

          .imag1 {
               margin-top: 20px;
               margin-left: 180px;
          }

          .imag2 {
               margin-top: 20px;

               margin-left: 340px;

          }

          .imag3 {
               margin-top: 20px;

               margin-left: 350px;

          }

          .imag1_under {
               max-width: 250px;
               width: 100%;
               min-height: 100px;
               margin-left: 100px;
               text-align: center;
               font-size: 20px;

          }

          .imag2_under {
               max-width: 250px;
               width: 100%;
               min-height: 100px;
               margin-left: 290px;
               margin-top: 20px;
               text-align: center;
               font-size: 20px;
          }

          .imag3_under {
               max-width: 250px;
               width: 100%;
               font-size: 20px;

               min-height: 100px;
               margin-left: 290px;
               text-align: center;
          }

          .image {
               max-width: 200px;
          }

          .aligncenter {
               text-align: center;
          }

          .myfooter {
               background-color: #292b2c;
               color: goldenrod;
               margin-top: 15px;
          }

          a {
               color: goldenrod;
          }

          .navbar-inverse {
               background: #00cc00;
               color: black;
          }

          .navbar-inverse .navbar-brand,
          .navbar-inverse a {
               color: black;
          }

          .navbar-inverse .navbar-nav>li>a {
               color: clack;
          }

          .caros {
               margin-top: 30px;

          }

          hr {
               border: 0;
               height: 0.5px;
               clear: both;
               display: block;
               width: 99%;
               background-color: black;
               margin-left: 0.5em;
          }

          img {
               max-width: 100%;
               display: inline-block;
          }

          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }

          nav {
               background-color: #292b2c;
          }

          .navbar-custom {
               background-color: #292b2c;
          }

          /* change the brand and text color */
          .navbar-custom .navbar-brand,
          .navbar-custom .navbar-text {
               background-color: #292b2c;
          }

          .navbar-custom .navbar-nav .nav-link {
               background-color: #292b2c;
          }

          .navbar-custom .nav-item.active .nav-link,
          .navbar-custom .nav-item:hover .nav-link {
               background-color: #292b2c;
          }

          .firstimage {
               height: 500px;
               width: 100%;
          }

          .mybtn {
               border-color: green;
               border-style: solid;
          }

          .card {
               width: 100%;
               height: 100%;
               margin: 10px;
          }

          .right {
               display: flex;
          }

          .left {
               display: none;
          }

          .cart {
               /* margin-left:10px; */
               margin-right: -9px;
          }

          .profile {
               margin-right: 2px;

          }

          .login {
               margin-right: -2px;
               margin-top: 12px;
               display: none;
          }

          .searchbox {
               width: 60%;
          }

          .lists {
               display: inline-block;
          }

          .moblists {
               display: none;
          }

          .logins {
               text-align: center;
               margin-right: -30%;
               margin-left: 35%;
          }

          .tab {
               width: 100%;

               border-style: solid;
               border-width: 2px;
               padding: 2px;

          }

          th {
               border-color: white;
               border-style: solid;
               border-width: 2px;
               padding: 2px;

          }

          .tableyhead {

               color: red;

          }

          .thy {
               background-color: #555;
               color: white;

          }

          .trow {
               align-content: center;
          }

          .products {
               margin-left: 9%;

          }

          


            <style>


 
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://images.unsplash.com/photo-1586773860383-dab5f32bcb5a');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            /*margin: 50px auto;*/
            background-color: rgba(255, 255, 255, 0.9);
            /*padding: 20px;*/
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        select, table {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            font-size: 16px;
        }
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #999;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #5DADE2;
            color: white;
        }
        td {
            background-color: #ECF0F1;
        }
        
    </style>

     </style>

</head>

<body>





     <body>

          <nav class="navbar navbar-expand-xl ">
               <!-- <a href="#" class="navbar-brand">Academind</a> -->
               <div class=" flex-row-reverse left ">

                    <div class="p-2">
                         <!-- <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style=" color:green ;font-size:20px;margin-top:-20px;margin-bottom:20px;">&#61562;</i></a> -->
                         <!-- <span id="icon" style="color:green"> 5 </span>
                </div>  -->
                    </div>
                    <!-- <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;'></i></div> -->
                    <a class="float-left" href="#">
                         <img src="agro2.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
                    </a>
               </div>
               <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;font-size:20px; "></i></span>
               </button>
               <a class="float-left" href="farmerHomepage.php">
                    <img src="agro2.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
               </a>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">



                    <div class="proicon">

                         <?php
                         if (!isset($_SESSION['phonenumber'])) {
                              echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '></div></a>";
                         }
                         ?>
                    </div>

                    <div class="list-group moblists">

                         <?php
                         if (isset($_SESSION['phonenumber'])) {

                              echo "<a href='FarmerProfile.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                              echo "<a href=Transactions.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
                              echo "<a href='logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                         } else {
                              echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '>Login</div></a>";
                         }
                         ?>
                         <div class='loginz' style="text-align:center;">
                              <?php getFarmerUsername(); ?>
                         </div>
                    </div>
               </div>




               <div class=" flex-row-reverse right ">
                    <div class="p-2 cart">
                         <!-- <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green;margin-top:-20px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> 5 </span>
                </div> -->
                         <div class='loginz'>
                              <?php getFarmerUsername(); ?>
                         </div>
                    </div>
                    <div class="dropdown p-2 settings ">
                         <button class="btn  dropdown-toggle text-success" style="margin-top:-20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Settings
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              if (isset($_SESSION['phonenumber'])) {
                                   echo "<a href='FarmerProfile.php' class='dropdown-item' style='padding-right:-20px;'>Profile</a>";
                                   echo "<a href='Transactions.php' class='dropdown-item' style='padding-right:-20px;'>Orders</a>";
                                   echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>Logout</a>";
                              } else {
                                   echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                              }
                              ?>
                         </div>
                    </div>
               </div>
          </nav>
          <br>
          <div class="row" style="text-align:center;">
               <div class="col-md-3 col-sm-12">
                    <a href="farmerHomepage.php" id="navbar"><i class="fa fa-home" aria-hidden="true"></i><label>Home</label></a>
               </div>
               <div class="col-md-3 col-sm-12">
                    <a href="MyProducts.php" id="navbar"><i class="fa fa-leaf" aria-hidden="true"></i><label>My Products</label></a>
               </div>
               <div class="col-md-3 col-sm-12">
                    <a href="Transactions.php" id="navbar"><i class="fa fa-exchange" aria-hidden="true"></i><label>My Transactions</label></a>
               </div>
                <div class="col-md-3 col-sm-12">
    <a href="Weather Report.php" id="navbar">
        <img src="https://static.vecteezy.com/system/resources/previews/037/211/198/non_2x/paddy-rice-crops-illustration-free-vector.jpg" alt="Crop Details Icon" style="width:24px; height:24px;" />
        <label>Crop Details</label>
    </a>
</div>

          </div>
          <hr>


          <br>

<div class="container">
  <h1>State-wise Crop & Vegetable Details</h1>
 

  <label for="stateSelect"><strong>Select a State:</strong></label>
  <select id="stateSelect" onchange="showDetails()">
    <option value="">-- Select State --</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
     <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Odisha">Odisha</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Telangana">Telangana</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="Uttarakhand">Uttarakhand</option>
      <option value="West Bengal">West Bengal</option>
      <option value="Delhi">Delhi</option>



     
  </select>

  <label for="dataType"><strong>Select Data Type:</strong></label>
  <select id="dataType" onchange="showDetails()">
    <option value="crops">Crops</option>
    <option value="vegetables">Vegetables</option>
  </select>

  <h2 id="stateHeading"></h2>

  <table id="cropTable" style="display:none;">
    <thead>
      <tr>
        <th>Season</th>
        <th>Crops</th>
        <th>Water Required</th>
      </tr>
    </thead>
    <tbody id="cropBody"></tbody>
  </table>

  <table id="vegTable" style="display:none;">
    <thead>
      <tr>
        <th>Season</th>
        <th>Vegetables</th>
      </tr>
    </thead>
    <tbody id="vegBody"></tbody>
  </table>
</div>

<script>
  const data = {
    "Andhra Pradesh": {
      crops: [
        ["June - October (Kharif)", "Rice, Maize, Jowar, Bajra, Pulses, Cotton, Groundnut", "High"],
        ["October - March (Rabi)", "Wheat, Gram, Barley, Mustard, Sunflower, Lentils", "Low"],
        ["Summer (Zaid)", "Watermelon, Muskmelon, Cucumber, Pumpkin, Gourds, Okra, Tomatoes", "High"]
      ],
      vegetables: [
        ["June - October (Kharif)", "Brinjal, Tomato, Okra, Chilli, Cucumber, Pumpkin"],
        ["October - March (Rabi)", "Cabbage, Cauliflower, Carrot, Peas, Beetroot, Spinach"],
        ["Summer (Zaid)", "Bottle Gourd, Ridge Gourd, Snake Gourd, Watermelon, Muskmelon"]
      ]
    },
    "Arunachal Pradesh": {
      crops: [
        ["June - October (Kharif)", "Rice, Maize, Millets, Soybean, Sesame, Groundnut, Cotton", "High"],
        ["October - March (Rabi)", "Barley, Wheat, Peas, Mustard, Lentils, Potato", "Low"],
        ["Summer (Zaid)", "Tomato, Cucumber, Beans, Chilli, Watermelon, Pumpkin, Gourds", "High"]
      ],
      vegetables: [
        ["June - October (Kharif)", "Cucumber, Beans, Chilli, Tomato"],
        ["October - March (Rabi)", "Cabbage, Spinach, Turnip, Mustard Greens"],
        ["Summer (Zaid)", "Pumpkin, Bitter Gourd, Bottle Gourd, Ridge Gourd"]
      ]
    },
      "West Bengal": {
    crops: [
        ["June - October (Kharif)", "Rice, Jute, Maize, Sugarcane", "High"],
        ["October - March (Rabi)", "Wheat, Pulses, Mustard", "Moderate"],
        ["Summer (Zaid)", "Cucumber, Gourds, Tomato", "High"]
    ],
    vegetables: [
        ["June - October (Kharif)", "Okra, Brinjal, Ridge Gourd"],
        ["October - March (Rabi)", "Cabbage, Cauliflower, Peas"],
        ["Summer (Zaid)", "Watermelon, Pumpkin, Cucumber"]
    ]
},
    "Madhya Pradesh": {
            crops: [
                ["June - October (Kharif)", "Rice, Soybean, Maize, Cotton, Tur, Moong, Urd, Groundnut", "High"],
                ["October - March (Rabi)", "Wheat, Gram, Mustard, Linseed, Barley, Peas", "Moderate"],
                ["Summer (Zaid)", "Maize, Moong, Sunflower", "Moderate"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Brinjal, Tomato, Chilli, Okra"],
                ["October - March (Rabi)", "Cauliflower, Cabbage, Radish, Carrot"],
                ["Summer (Zaid)", "Cucumber, Bitter Gourd, Bottle Gourd"]
            ]
        },
        "Maharashtra": {
            crops: [
                ["June - October (Kharif)", "Rice, Cotton, Soybean, Jowar, Bajra, Groundnut, Tur, Moong", "High"],
                ["October - March (Rabi)", "Wheat, Gram, Jowar, Sunflower", "Moderate"],
                ["Summer (Zaid)", "Watermelon, Musk Melon, Groundnut", "High"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Tomato, Okra, Brinjal"],
                ["October - March (Rabi)", "Cauliflower, Cabbage, Onion"],
                ["Summer (Zaid)", "Cucumber, Pumpkin, Bitter Gourd"]
            ]
        },
        "Manipur": {
            crops: [
                ["June - October (Kharif)", "Rice, Maize, Soybean, Groundnut, Urd, Tur", "High"],
                ["October - March (Rabi)", "Wheat, Mustard, Lentil, Peas", "Moderate"],
                ["Summer (Zaid)", "Vegetables, Maize", "Moderate"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Tomato, Okra, Brinjal, Cucumber"],
                ["October - March (Rabi)", "Cabbage, Peas, Carrot"],
                ["Summer (Zaid)", "Pumpkin, Bottle Gourd"]
            ]
        },
        "Meghalaya": {
            crops: [
                ["June - October (Kharif)", "Rice, Maize, Millets, Groundnut, Ginger, Turmeric", "High"],
                ["October - March (Rabi)", "Mustard, Potato, Peas", "Moderate"],
                ["Summer (Zaid)", "Vegetables, Cucumber", "Moderate"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Chilli, Brinjal, Tomato"],
                ["October - March (Rabi)", "Cauliflower, Turnip, Cabbage"],
                ["Summer (Zaid)", "Pumpkin, Gourds"]
            ]
        },
        "Mizoram": {
            crops: [
                ["June - October (Kharif)", "Rice, Maize, Soybean, Sesame", "High"],
                ["October - March (Rabi)", "Potato, Mustard, Lentil", "Moderate"],
                ["Summer (Zaid)", "Cucumber, Beans", "Moderate"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Brinjal, Tomato, Chilli"],
                ["October - March (Rabi)", "Peas, Carrot, Cauliflower"],
                ["Summer (Zaid)", "Bottle Gourd, Pumpkin"]
            ]
        },
        "Nagaland": {
            crops: [
                ["June - October (Kharif)", "Rice, Maize, Millets, Pulses", "High"],
                ["October - March (Rabi)", "Wheat, Mustard, Potato", "Moderate"],
                ["Summer (Zaid)", "Cucumber, Pumpkin", "Moderate"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Chilli, Brinjal, Tomato"],
                ["October - March (Rabi)", "Spinach, Peas, Cabbage"],
                ["Summer (Zaid)", "Bitter Gourd, Bottle Gourd"]
            ]
        },
        "Odisha": {
            crops: [
                ["June - October (Kharif)", "Paddy, Maize, Groundnut, Cotton, Tur", "High"],
                ["October - March (Rabi)", "Wheat, Mustard, Lentil, Chickpea", "Moderate"],
                ["Summer (Zaid)", "Cucumber, Watermelon, Pumpkin", "High"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Okra, Tomato, Brinjal"],
                ["October - March (Rabi)", "Cauliflower, Carrot, Spinach"],
                ["Summer (Zaid)", "Bottle Gourd, Ridge Gourd"]
            ]
        },
           "Sikkim": {
            crops: [
                ["June - October (Kharif)", "Maize, Paddy, Finger Millet, Soybean, Buckwheat, Amaranthus", "High"],
                ["October - March (Rabi)", "Wheat, Barley, Mustard, Lentil, Peas, Potato", "Moderate"],
                ["Summer (Zaid)", "Moong, Cowpea, Summer Maize, Watermelon", "Moderate"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Beans, Cucumber, Tomato, Brinjal, Pumpkin"],
                ["October - March (Rabi)", "Cabbage, Cauliflower, Spinach, Carrot, Turnip"],
                ["Summer (Zaid)", "Bottle Gourd, Bitter Gourd, Ridge Gourd"]
            ]
        },
        "Tamil Nadu": {
            crops: [
                ["June - October (Kharif)", "Paddy, Maize, Ragi, Bajra, Cotton, Groundnut, Pulses", "High"],
                ["October - March (Rabi)", "Sorghum, Bengal Gram, Black Gram, Horse Gram, Sunflower", "Moderate"],
                ["Summer (Zaid)", "Green Gram, Watermelon, Sesame, Cucumber", "Moderate"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Okra, Tomato, Brinjal, Snake Gourd, Cluster Beans"],
                ["October - March (Rabi)", "Carrot, Beetroot, Cabbage, Cauliflower, Turnip"],
                ["Summer (Zaid)", "Ash Gourd, Bottle Gourd, Ridge Gourd"]
            ]
        },
        "Telangana": {
            crops: [
                ["June - October (Kharif)", "Paddy, Cotton, Soybean, Red Gram, Maize, Green Gram, Black Gram", "High"],
                ["October - March (Rabi)", "Bengal Gram, Wheat, Jowar, Sunflower, Mustard", "Moderate"],
                ["Summer (Zaid)", "Watermelon, Musk Melon, Sesame, Cowpea", "Moderate"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Brinjal, Tomato, Okra, Chilli, Bottle Gourd"],
                ["October - March (Rabi)", "Cabbage, Cauliflower, Radish, Spinach, Coriander"],
                ["Summer (Zaid)", "Bitter Gourd, Pumpkin, Cucumber"]
            ]
        },
        "Tripura": {
            crops: [
                ["June - October (Kharif)", "Rice, Jute, Maize, Groundnut, Pulses, Sesame", "High"],
                ["October - March (Rabi)", "Wheat, Mustard, Lentil, Peas, Potato", "Moderate"],
                ["Summer (Zaid)", "Moong, Cowpea, Watermelon, Cucumber", "Moderate"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Tomato, Okra, Brinjal, Bottle Gourd, Pointed Gourd"],
                ["October - March (Rabi)", "Cabbage, Cauliflower, Turnip, Carrot, Spinach"],
                ["Summer (Zaid)", "Pumpkin, Bitter Gourd, Ridge Gourd"]
            ]
        },
        "Uttar Pradesh": {
            crops: [
                ["June - October (Kharif)", "Paddy, Maize, Bajra, Jowar, Arhar, Groundnut", "High"],
                ["October - March (Rabi)", "Wheat, Barley, Gram, Mustard, Peas, Linseed", "Moderate"],
                ["Summer (Zaid)", "Moong, Cowpea, Watermelon, Melons", "Moderate"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Brinjal, Okra, Chilli, Bottle Gourd, Pumpkin"],
                ["October - March (Rabi)", "Cabbage, Cauliflower, Carrot, Radish, Turnip"],
                ["Summer (Zaid)", "Cucumber, Bitter Gourd, Ridge Gourd"]
            ]
        },
        "Uttarakhand": {
            crops: [
                ["June - October (Kharif)", "Rice, Maize, Finger Millet, Soybean, Urad, Tur", "High"],
                ["October - March (Rabi)", "Wheat, Barley, Mustard, Peas, Lentil, Potato", "Moderate"],
                ["Summer (Zaid)", "Moong, Cowpea, Cucumber, Melons", "Moderate"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Tomato, Brinjal, Okra, Pumpkin, Beans"],
                ["October - March (Rabi)", "Cabbage, Cauliflower, Carrot, Spinach, Broccoli"],
                ["Summer (Zaid)", "Bottle Gourd, Ridge Gourd, Bitter Gourd"]
            ]
        },


           "Assam": {
            crops: [
                ["June - October (Kharif)", "Paddy, Jute, Sugarcane, Maize, Sesamum, Pulses, Groundnut", "High"],
                ["October - March (Rabi)", "Wheat, Mustard, Lentil, Barley, Peas, Gram", "Moderate"],
                ["Summer (Zaid)", "Vegetables, Maize, Jowar", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Bottle Gourd, Brinjal, Okra"],
                ["October - March (Rabi)", "Cabbage, Cauliflower, Radish"],
                ["Summer (Zaid)", "Pumpkin, Cucumber"]
            ]
        },
        "Bihar": {
            crops: [
                ["June - October (Kharif)", "Paddy, Maize, Arhar, Jowar, Bajra, Urd, Moong", "High"],
                ["October - March (Rabi)", "Wheat, Lentil, Mustard, Barley, Gram, Peas", "Moderate"],
                ["Summer (Zaid)", "Moong, Vegetables, Maize, Sunflower", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Okra, Brinjal, Pumpkin"],
                ["October - March (Rabi)", "Cabbage, Carrot, Spinach"],
                ["Summer (Zaid)", "Cucumber, Bitter Gourd"]
            ]
        },
        "Chhattisgarh": {
            crops: [
                ["June - October (Kharif)", "Rice, Maize, Groundnut, Soybean, Arhar, Urad, Moong", "High"],
                ["October - March (Rabi)", "Wheat, Gram, Mustard, Linseed, Lentil", "Moderate"],
                ["Summer (Zaid)", "Vegetables, Moong, Sesame", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Tomato, Brinjal, Okra"],
                ["October - March (Rabi)", "Cauliflower, Cabbage, Carrot"],
                ["Summer (Zaid)", "Pumpkin, Bottle Gourd"]
            ]
        },
        "Goa": {
            crops: [
                ["June - October (Kharif)", "Rice, Maize, Pulses, Ragi, Groundnut", "High"],
                ["October - March (Rabi)", "Vegetables, Sugarcane, Wheat", "Moderate"],
                ["Summer (Zaid)", "Melons, Cucumbers, Sesame", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Brinjal, Tomato, Okra"],
                ["October - March (Rabi)", "Cabbage, Carrot, Turnip"],
                ["Summer (Zaid)", "Cucumber, Watermelon"]
            ]
        },
        "Gujarat": {
            crops: [
                ["June - October (Kharif)", "Cotton, Groundnut, Bajra, Jowar, Paddy, Maize, Tur, Sesame", "High"],
                ["October - March (Rabi)", "Wheat, Gram, Mustard, Barley, Cumin, Fennel", "Moderate"],
                ["Summer (Zaid)", "Moong, Watermelon, Muskmelon, Sunflower", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Tomato, Okra, Brinjal"],
                ["October - March (Rabi)", "Cabbage, Spinach, Carrot"],
                ["Summer (Zaid)", "Cucumber, Pumpkin"]
            ]
        },

           "Haryana": {
            crops: [
                ["June - October (Kharif)", "Paddy, Bajra, Cotton, Maize, Arhar, Sugarcane", "High"],
                ["October - March (Rabi)", "Wheat, Barley, Mustard, Gram, Lentil", "Moderate"],
                ["Summer (Zaid)", "Moong, Cowpea", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Okra, Brinjal, Pumpkin"],
                ["October - March (Rabi)", "Cauliflower, Carrot, Spinach"],
                ["Summer (Zaid)", "Cucumber, Bottle Gourd"]
            ]
        },
        "Himachal Pradesh": {
            crops: [
                ["June - October (Kharif)", "Maize, Paddy, Soybean, Urad, Rajma", "High"],
                ["October - March (Rabi)", "Wheat, Barley, Peas, Mustard, Gram", "Moderate"],
                ["Summer (Zaid)", "Vegetables, Moong", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Tomato, Beans, Capsicum"],
                ["October - March (Rabi)", "Cauliflower, Cabbage, Peas"],
                ["Summer (Zaid)", "Cucumber, Pumpkin"]
            ]
        },
        "Jharkhand": {
            crops: [
                ["June - October (Kharif)", "Rice, Maize, Arhar, Groundnut, Soybean", "High"],
                ["October - March (Rabi)", "Wheat, Lentil, Mustard, Linseed, Gram", "Moderate"],
                ["Summer (Zaid)", "Moong, Vegetables", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Brinjal, Okra, Tomato"],
                ["October - March (Rabi)", "Spinach, Carrot, Cabbage"],
                ["Summer (Zaid)", "Pumpkin, Bottle Gourd"]
            ]
        },
        "Karnataka": {
            crops: [
                ["June - October (Kharif)", "Paddy, Ragi, Maize, Groundnut, Red Gram, Turmeric", "High"],
                ["October - March (Rabi)", "Wheat, Bengal Gram, Sunflower, Safflower", "Moderate"],
                ["Summer (Zaid)", "Sesame, Vegetables", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Tomato, Brinjal, Okra"],
                ["October - March (Rabi)", "Cabbage, Cauliflower, Beans"],
                ["Summer (Zaid)", "Cucumber, Pumpkin"]
            ]
        },
        "Kerala": {
            crops: [
                ["June - October (Kharif)", "Paddy, Tapioca, Banana, Ginger, Turmeric", "High"],
                ["October - March (Rabi)", "Pulses, Vegetables, Sugarcane", "Moderate"],
                ["Summer (Zaid)", "Watermelon, Muskmelon", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Yam, Ash Gourd, Snake Gourd"],
                ["October - March (Rabi)", "Cabbage, Carrot, Beans"],
                ["Summer (Zaid)", "Cucumber, Pumpkin"]
            ]
        },
            "Punjab": {
            crops: [
                ["June - October (Kharif)", "Paddy, Cotton, Maize, Sugarcane, Bajra, Arhar", "High"],
                ["October - March (Rabi)", "Wheat, Barley, Mustard, Gram, Lentil", "Moderate"],
                ["Summer (Zaid)", "Moong, Vegetables", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Brinjal, Okra, Cucumber"],
                ["October - March (Rabi)", "Cauliflower, Carrot, Peas"],
                ["Summer (Zaid)", "Pumpkin, Bottle Gourd"]
            ]
        },
        "Rajasthan": {
            crops: [
                ["June - October (Kharif)", "Bajra, Maize, Groundnut, Cotton, Moong, Urad", "High"],
                ["October - March (Rabi)", "Wheat, Barley, Mustard, Gram, Cumin", "Moderate"],
                ["Summer (Zaid)", "Watermelon, Muskmelon", "Medium"]
            ],
            vegetables: [
                ["June - October (Kharif)", "Okra, Brinjal, Cucumber"],
                ["October - March (Rabi)", "Spinach, Carrot, Cabbage"],
                ["Summer (Zaid)", "Bottle Gourd, Pumpkin"]
            ]
        }
        
  };

  function showDetails() {
    const state = document.getElementById("stateSelect").value;
    const type = document.getElementById("dataType").value;
    const heading = document.getElementById("stateHeading");
    const cropBody = document.getElementById("cropBody");
    const vegBody = document.getElementById("vegBody");
    const cropTable = document.getElementById("cropTable");
    const vegTable = document.getElementById("vegTable");

    cropBody.innerHTML = "";
    vegBody.innerHTML = "";

    if (state && data[state]) {
      heading.textContent = `State: ${state}`;

      if (type === "crops") {
        cropTable.style.display = "table";
        vegTable.style.display = "none";

        data[state].crops.forEach(row => {
          const tr = document.createElement("tr");
          tr.innerHTML = `<td>${row[0]}</td><td>${row[1]}</td><td>${row[2]}</td>`;
          cropBody.appendChild(tr);
        });

      } else if (type === "vegetables") {
        vegTable.style.display = "table";
        cropTable.style.display = "none";

        data[state].vegetables.forEach(row => {
          const tr = document.createElement("tr");
          tr.innerHTML = `<td>${row[0]}</td><td>${row[1]}</td>`;
          vegBody.appendChild(tr);
        });
      }

    } else {
      heading.textContent = "";
      cropTable.style.display = "none";
      vegTable.style.display = "none";
    }
  }
</script>

         

          </div>

          <br>
        
       
        

     </body>

</html>