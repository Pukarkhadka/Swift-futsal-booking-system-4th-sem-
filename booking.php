 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Futsal Court</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validateForm() {
            var court = document.getElementById("court").value;
            if (court === "Select One") {
                alert("You must select a court.");
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
</head>

<body>
    
    <div class="booking-form">
        <h2>Book Now</h2>
        <form action="checkbookings.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
                <small>You can only choose the current date or a date in the future.</small>
            </div>
            <div class="form-group">
                <label for="time">Start Time:</label>
                <input type="time" id="starttime" name="starttime" min="07:00" max="20:00" required>
                <small>Booking time starts from 7 AM and ends at 8 PM.</small>
            </div>
            <div class="form-group">
                <label for="time">End Time:</label>
                <input type="time" id="endtime" name="endtime" min ="07:00" max="20:00" required>
                <small>You can only book for a maximum of 2 hours.</small>
            </div>
                
            <div class="form-group">
                <label for="court">Court:</label>
                <select id="court" name="court" required>
                    <option>Select One</option>
                <?php
                    include "db_connect.php";
                   $selectedCourt = isset($_GET['court_name']) ? $_GET['court_name'] : '';

                   $result = mysqli_query($conn, "SELECT * FROM futsals");
                   while ($futsal = mysqli_fetch_array($result)) {
                       $isSelected = ($futsal['Name'] === $selectedCourt) ? 'selected' : '';
                       echo "<option value='{$futsal['ID']}' $isSelected>{$futsal['Name']}</option>";
                   }
                   ?>
               </select>
           </div>
           <div class="form-group">
               <input type="submit" value="Book">
           </div>
       </form>
   </div>
</body>
</html>
