<?php
session_start();
include 'db_connect.php';

$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Events</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="site-header">
  <a class="brand" href="home.html" aria-label="StudentHub home"><span class="brand-mark">S</span><span class="brand-copy"><strong>StudentHub</strong><small>Campus, connected.</small></span></a>
  <button class="nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">☰</button>
  <nav class="site-nav" aria-label="Main navigation"><a href="home.html">Overview</a><a href="course.html">Courses</a><a href="timetable.html">Timetable</a><a href="result.html">Results</a><a href="notice.html">Notices</a><a href="event.html">Events</a><a href="portfolio.html">Profile</a><a href="about.html">About</a><a href="contact.html">Contact</a><a href="feedback.html">Feedback</a><a class="nav-cta" href="login.html">Sign in <span>↗</span></a></nav>
</header>
    <main class="container">
        <div class="card">
            <h2>Manage Events</h2>
            <a href="add_event.html" class="btn" style="background:#28a745; margin-bottom: 20px;">+ Add Event</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Poster</th>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Venue</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td>
                            <?php if ($row['poster'] != "") { ?>
                                <img src="uploads/<?php echo $row['poster']; ?>" width="60" height="60" style="object-fit:cover; border-radius:4px;">
                            <?php } ?>
                        </td>
                        <td><?php echo $row['event_name']; ?></td>
                        <td><?php echo $row['event_date']; ?></td>
                        <td><?php echo $row['venue']; ?></td>
                        <td>
                            <a href="edit_event.php?id=<?php echo $row['id']; ?>" style="color:#f39c12; margin-right:10px;">Edit</a>
                            <a href="process_delete_event.php?id=<?php echo $row['id']; ?>" style="color:red;">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
  <script src="script.js" defer></script>
  <footer class="site-footer"><div><strong>StudentHub</strong><span>One campus. Every opportunity.</span></div><p>© 2026 StudentHub · Designed for student life</p></footer>
</body>
</html>