<?php
include("includes/header2.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create tendor holder</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="form-box">
        <h2>create tender and define forms holder</h2>
        <form action="admin_process_create.php"method="POST">
            <div class="form-group">
                <label for="project_name">Project name</label>
                <input type="text",name="project_name",id="project_name" required>

            </div>
            <div class="form-group">
        <label for="username">Tender Username</label>
        <input type="text" name="username" id="username" required>
      </div>
      <div class="form-group">
        <label for="password">Tender password</label>
         <input type="password" name="password" id="password" required>

      </div>
      
      <hr style="margin: 30px 0;">
      <h3>Standard Form Field Labels</h3>
      <div class="form-group">
        <label for="contractor_label">contractor_label</label>
         <input type="text" name="contractor_label" id="contractor_label" value="Contractor Name"readonly>

      </div>
      <div class="form-group">
        <label for="location_label">Project Location Label</label>
        <input type="text" name="location_label" id="location_label" value="Project Location"readonly>
      </div>
      <div class="form-group">
        <label for="contact_phone_label">Contact Number Label</label>
        <input type="text" name="contact_phone_label" id="contact_phone_label" value="Contact Number" readonly>
      </div>
      <div class="form-group">
        <label for="contact_email_label">Contact Email Label</label>
        <input type="text" name="contact_email_label" id="contact_email_label" value="Contact Email" readonly>
      </div>

      <div class="form-group">
        <label for="budget_label">Estimated Budget Label</label>
        <input type="text" name="budget_label" id="budget_label" value="Estimated Budget"readonly>
      </div>

      <div class="form-group">
        <label for="start_date_label">Start Date Label</label>
        <input type="text" name="start_date_label" id="start_date_label" value="Start Date"readonly>
      </div>
       <div class="form-group">
     <label for="end_date_label">Planned End Date Label</label>
         <input type="text" name="end_date_label" id="end_date_label" value="Planned End Date"readonly>
    </div>
    <div class="form-group">
  <label for="profile">Picture</label>
  <input type="file" name="profile" id="profile">
</div>

      <hr style="margin: 30px 0;">
      <h3>Custom Field Labels</h3>
      <div id="custom-fields" class="custom-fields"></div>

      <button type="button" class="add-field-btn" onclick="addCustomField()">+ Add Custom Label</button>

      <br><br>
      <button type="submit" class="btn">Generate</button>
        </form>
    </div>
    
  <script>
    let fieldCount = 0;

    function addCustomField() {
      fieldCount++;
      const container = document.getElementById('custom-fields');
      const group = document.createElement('div');
      group.className = 'custom-field-group';
      group.innerHTML = `
        <label>Custom Field ${fieldCount} Label</label>
        <input type="text" name="custom_label_${fieldCount}" placeholder="Enter label name">
      `;
      container.appendChild(group);
    }
    </script>
    
</body>
</html>