<?php
session_start();
include 'db_connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM events WHERE id = $id";
$result = mysqli_query($conn, $sql);
$event = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Event</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="site-header">
  <a class="brand" href="home.html" aria-label="StudentHub home"><span class="brand-mark">S</span><span class="brand-copy"><strong>StudentHub</strong><small>Campus, connected.</small></span></a>
  <button class="nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">☰</button>
  <nav class="site-nav" aria-label="Main navigation"><a href="home.html">Overview</a><a href="course.html">Courses</a><a href="timetable.html">Timetable</a><a href="result.html">Results</a><a href="notice.html">Notices</a><a href="event.html">Events</a><a href="portfolio.html">Profile</a><a href="about.html">About</a><a href="contact.html">Contact</a><a href="feedback.html">Feedback</a><a class="nav-cta" href="login.html">Sign in <span>↗</span></a></nav>
</header>
    <main class="container">
        <div class="card" style="max-width:500px; margin:40px auto;">
            <h2>Edit Event</h2>
            <form method="POST" action="process_edit_event.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
                
                <label>Event Name</label>
                <input type="text" name="event_name" value="<?php echo $event['event_name']; ?>" required>
                
                <label>Event Date</label>
                <input type="date" name="event_date" value="<?php echo $event['event_date']; ?>" required>
                
                <label>Venue</label>
                <input type="text" name="venue" value="<?php echo $event['venue']; ?>" required>
                
                <label>Update Poster (Optional)</label>
                <input type="file" name="poster" accept="image/png, image/jpeg">
                
                <div style="margin-top:15px; display:flex; gap:10px;">
                    <button type="submit">Update Event</button>
                    <a href="manage_events.php" class="btn" style="background:#6c757d;">Back</a>
                </div>
            </form>
        </div>
    </main>
  <script src="script.js" defer></script>
  <footer class="site-footer"><div><strong>StudentHub</strong><span>One campus. Every opportunity.</span></div><p>© 2026 StudentHub · Designed for student life</p></footer>
</body>
</html>