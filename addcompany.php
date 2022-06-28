<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="usermanagement/css/style.css">
    
    <title>NUS Consulting Group | Add Company</title>
    <style>
        a {
            text-decorarion: none;
        }
        a.addParentCompany {
            /* background-color: #1363f1; */
            color: #12263F;
            font-weight: 500;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            position: absolute;
            right: 16%;
            top: 5%;
            cursor: pointer;
            transition: 0.5s ease-out;
            background: url('img/add-company-hover-icon.svg') no-repeat;
            background-position: left;
        }
        a.addClientCompany {
            /* background: #1363f1; */
            color: #12263F;
            font-weight: 500;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            position: absolute;
            right: 2%;
            top: 5%;
            cursor: pointer;
            transition: 0.5s ease-out;
            background: url('img/add-company-hover-icon.svg') no-repeat;
            background-position: left;
        }
        a.addParentCompany:hover, a.addClientCompany:hover {
            background: #1363f1;
            color: #ffffff;
            transition: 0.5s ease-in;
            text-decoration: none;
        }
    </style>
</head>
<body>
        <!-- <h1>Add Company</h1>
        <p>Adding <strong>New Parent Company</strong> tab and <strong>New Client</strong> tabs</p> -->
    <!-- <button class="addParentCompany">Add Parent Company</button> -->
    <a href="addparent.php" class="addParentCompany">Parent Company</a>
    <a href="addclient.php" class="addClientCompany">Client Company</a>

    <!-- <button class="addClientCompany">Add Client Company</button> -->
    <div class="tabs">
   <div class="sidebar">
      <!-- tabs buttons  -->
      <button class="tab-btn tab-btn-active" data-for-tab="1">Parent Comapny</button>
      <button class="tab-btn" data-for-tab="2">Client Company</button>
    </div>
      <!-- tabs content  -->
      <div class="content">
          <div class="tab-content tab-content-active" data-tab="1">
              <?php
                include('listparentcompany.php');
              ?>
           </div>
            <div class="tab-content" data-tab="2">
            <?php
                include('listclientcompany.php');
              ?>
            </div>
       </div>
 </div>

 <script>
  function setupTabs() {
  document.querySelectorAll(".tab-btn").forEach((button) => {
    button.addEventListener("click", () => {
      const sidebar = button.parentElement;
      const tabs = sidebar.parentElement;
      const tabNumber = button.dataset.forTab;
      const tabActivate = tabs.querySelector(
        `.tab-content[data-tab="${tabNumber}"]`
      );

      sidebar.querySelectorAll(".tab-btn").forEach((button) => {
        button.classList.remove("tab-btn-active");
      });
      tabs.querySelectorAll(".tab-content").forEach((tab) => {
        tab.classList.remove("tab-content-active");
      });
      button.classList.add("tab-btn-active");
      tabActivate.classList.add("tab-content-active");
    });
  });
}

document.addEventListener("DOMContentLoaded", () => {
  setupTabs();
});

 </script>
</body>
</html>