<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Kick — Book a Court</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validateForm() {
            var court = document.getElementById("court");
            if (!court.value || court.value === "Select One" || court.value === "") {
                alert("You must select a court.");
                return false;
            }
            return true;
        }
        document.addEventListener("DOMContentLoaded", function () {
            var dateInput = document.getElementById("date");
            if (dateInput) {
                var today = new Date().toISOString().split("T")[0];
                dateInput.setAttribute("min", today);
            }
        });
    </script>
</head>

<body class="booking-page">
    <!-- Left: pitch-side panel -->
    <aside class="booking-aside">
        <div>
            <a class="brand" href="index.php">
                <img src="assets/Logo-2.png" alt="Swift Kick logo">
                <span>Swift<strong>Kick</strong></span>
            </a>
        </div>
        <div>
            <h1>Secure <span>your slot</span></h1>
            <p class="lead">Choose your ground and kick-off time — your team awaits its match captain.</p>
            <ul class="rules-list">
                <li><i>1</i> Pick the court, date and a kick-off range below.</li>
                <li><i>2</i> Slots open daily from 7:00 AM to 8:00 PM.</li>
                <li><i>3</i> Keep it tight — a maximum of 2 hours per game.</li>
                <li><i>4</i> Confirm and your booking is instantly locked in.</li>
            </ul>
        </div>
        <footer>
            <a href="index.php">&larr; Back to home</a> &middot; <a href="mybookings.php">My bookings</a>
        </footer>
    </aside>

    <!-- Right: booking form -->
    <main class="booking-main">
        <div class="booking-form">
            <span class="form-meta">Match booking</span>
            <h2>Book Now</h2>
            <p class="form-intro">Fill in your match details and confirm your reservation.</p>

            <form action="checkbookings.php" method="POST" onsubmit="return validateForm()">
                <div class="form-grid">
                    <div class="form-group full">
                        <label for="court">Court</label>
                        <select id="court" name="court" required>
                            <option value="">Select One</option>
                            <?php
                            include "db_connect.php";
                            $selectedCourt = isset($_GET['court_name']) ? $_GET['court_name'] : '';

                            $result = $conn ? mysqli_query($conn, "SELECT * FROM futsals") : false;
                            if ($result) {
                                while ($futsal = mysqli_fetch_array($result)) {
                                    $isSelected = ($futsal['Name'] === $selectedCourt) ? 'selected' : '';
                                    echo "<option value='{$futsal['ID']}' $isSelected>" . htmlspecialchars($futsal['Name']) . "</option>";
                                }
                            }
                            ?>
                        </select>
                        <small>Which ground is your team taking over?</small>
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date" required>
                        <small>Today or any future date.</small>
                    </div>

                    <div class="form-group">
                        <label for="starttime">Start Time</label>
                        <input type="time" id="starttime" name="starttime" min="07:00" max="20:00" required>
                        <small>Kick-off from 7:00 AM.</small>
                    </div>

                    <div class="form-group">
                        <label for="endtime">End Time</label>
                        <input type="time" id="endtime" name="endtime" min="07:00" max="20:00" required>
                        <small>Wrap it up by 8:00 PM.</small>
                    </div>

                    <div class="form-group">
                        <label>&nbsp;</label>
                        <div class="submit-row">
                            <input type="submit" value="Book Court">
                        </div>
                        <small>Maximum 2 hours per booking.</small>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>