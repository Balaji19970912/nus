<?php
// ob_start();
// session_start();
// if(!isset($_SESSION['userId'])){
// 	header("location:signin/login.php");
// }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="img/social-square-n-blue.png">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        box-sizing: border-box;
        padding: 0;
        margin: 0 auto;
      }
      body {
        font-family: "Poppins", sans-serif;
        background: #f9fbfd;
        /* overflow-x: hidden; */
      }

      button {
        font-family: "Poppins", sans-serif;
      }

      button.homeButton {
        background: url('img/home-icon.svg') no-repeat;
        background-position: left;
      }

      button.homeButton.active {
        background: url('img/home-hover-icon.svg') no-repeat;
        background-position: left;
      }

      button.usermanagementButton {
        background: url('img/usermanagement-icon.svg') no-repeat;
        background-position: left;
      }

      button.usermanagementButton.active {
        background: url('img/usermanagement-hover-icon.svg') no-repeat;
        background-position: left;
      }

      button.enterTrade {
        background: url('img/entertrade-icon.svg') no-repeat;
        background-position: left;
      }

      button.enterTrade.active {
        background: url('img/entertrade-hover-icon.svg') no-repeat;
        background-position: left;
      }

      button.generateReport {
        background: url('img/generate-report-icon.svg') no-repeat;
        background-position: left;
      }

      button.generateReport.active {
        background: url('img/generate-report-hover-icon.svg') no-repeat;
        background-position: left;
      }

      button.addCompany {
        background: url('img/add-company-icon.svg') no-repeat;
        background-position: left;
      }

      button.addCompany.active {
        background: url('img/add-company-hover-icon.svg') no-repeat;
        background-position: left;
      }

      button.addSupplyContract {
        background: url('img/add-supply-contract-icon.svg') no-repeat;
        background-position: left;
      }

      button.addSupplyContract.active {
        background: url('img/add-supply-contract-hover-icon.svg') no-repeat;
        background-position: left;
      }

      /* Style the tab */
      .tab {
        float: left;
        border-right: 1px solid #ccc;
        background-color: #ffffff;
        width: 18%;
        height: 100vh;
        position: fixed;
      }

      /* Style the buttons inside the tab */
      .tab button {
        display: block;
        background-color: inherit;
        color: #6e84a3;
        padding: 10px 30px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 15px;
        width: 88%;
        margin: 0 30px;
      }

      /* Change background color of buttons on hover */
      /* .tab button:hover {
        background-color: #ddd;
      } */

      /* Create an active/current "tab button" class */
      .tab button.active {
        /* background-color: #ccc; */
        border-right: 5px solid #2c7be5;
        color: #12263f;
      }

      /* Style the tab content */
      .tabcontent {
        float: left;
        /* padding: 0px 12px; */
        /* border: 1px solid #ccc; */
        width: 100%;
        border-left: none;
        margin: 0 0 0 21%;
        /* height: 300px; */
      }

      .tab img {
        margin: 30px;
      }
    </style>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- <h2>Vertical Tabs</h2>
    <p>Click on the buttons inside the tabbed menu:</p> -->

    <div class="tab">
      <img src="img/nus-logo-2020.svg" alt="NUS Consulting Group Logo" />
      <button
        class="tablinks homeButton"
        onclick="openNUSTabs(event, 'Home')"
        id="defaultOpen"
      >
       Home
      </button>
      <button class="tablinks addCompany" onclick="openNUSTabs(event, 'Add Company')">
       Company
      </button>
      <button class="tablinks addSupplyContract" onclick="openNUSTabs(event, 'Add Supply Contract')">
       Supply Contract
      </button>
      <button class="tablinks enterTrade" onclick="openNUSTabs(event, 'Enter Trade')">
        Enter Trade
      </button>
      <button class="tablinks generateReport" onclick="openNUSTabs(event, 'Generate Report')">
        Generate Report
      </button>
      <button class="tablinks usermanagementButton" onclick="openNUSTabs(event, 'User Management')">
        User Management
      </button>
    </div>

    <div id="Home" class="tabcontent">
      <?php
        include('addhome.php');
      ?>
    </div>

    <div id="Add Company" class="tabcontent">
      <?php
        
        include('addcompany.php');
      ?>
    </div>

    <div id="Add Supply Contract" class="tabcontent">
      <h3>Supply Contract Pages</h3>
    </div>

    <div id="Enter Trade" class="tabcontent">
      <?php
        include('addEnterTrade.php');
      ?>
    </div>

    <div id="Generate Report" class="tabcontent">
      <?php
        include('addGenerateReport.php');
      ?>
    </div>

    <div id="User Management" class="tabcontent">
      <?php
        include('usermanagement/index.php');
      ?>
    </div>

    <script>
      function openNUSTabs(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
    </script>
  </body>
</html>
