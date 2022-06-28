<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Tabs</title>
    <link rel="stylesheet" type="text/css" href="usermanagement/css/style.css">
</head>
<body>
<div class="tabs">
   <div class="sidebar">
   <a class="adduserbutton" href="inviteuser.php"><img src="img/user-plus.svg" alt="Add User Icon" width=18px height=18px> Invite new user</a>
      <!-- tabs buttons  -->
      <button class="tab-btn tab-btn-active" data-for-tab="1">Admin</button>
      <button class="tab-btn" data-for-tab="2">NUS Manager</button>
      <button class="tab-btn" data-for-tab="3">NUS User</button>
      <button class="tab-btn" data-for-tab="4">Parent User</button>
      <button class="tab-btn" data-for-tab="5">Client User</button>
    </div>
      <!-- tabs content  -->
      <div class="content">
          <div class="tab-content tab-content-active" data-tab="1">
            <?php
                include('listadmin.php');
            ?>
           </div>
            <div class="tab-content" data-tab="2">
            <?php
                include('listmanager.php');
            ?>
            </div>
            <div class="tab-content" data-tab="3">
            <?php
                include('listnususer.php');
            ?>
            </div>
            <div class="tab-content" data-tab="4">
            <?php
                include('listparentuser.php');
            ?>
            </div>
            <div class="tab-content" data-tab="5">
            <?php
                include('listclientuser.php');
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