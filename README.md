# StudentHub — Campus Portal

A redesigned, responsive student portal starter project with academic pages, campus notices and events, student registration/login, and PHP/MySQL admin workflows. The refreshed interface uses a consistent navigation system, responsive layouts, modern cards, clearer forms, and an updated landing page.

## Run locally
1. Install XAMPP and start **Apache** and **MySQL**.
2. Copy this folder into `C:\xampp\htdocs\StudentHub` (Windows) or your XAMPP `htdocs` directory.
3. Create/configure the database to match `db_connect.php` and the tables used by the PHP pages.
4. Open `http://localhost/StudentHub/home.html`.
5. Static pages can be previewed directly, but PHP forms and dashboards require Apache/PHP and a configured MySQL database.

## Main pages
- `home.html` — new landing page
- `course.html`, `timetable.html`, `result.html` — academic information
- `event.html`, `event_dashboard.html`, `notice.html` — campus updates
- `register.html`, `login.html`, `portfolio.html` — student-facing pages
- `admin_dashboard.php`, `manage_students.php`, `manage_events.php` — administration

## Notes
- `styles.css` provides the shared responsive design system.
- `script.js` contains shared navigation and UI enhancements.
- Existing PHP endpoints and JSON data files are retained; configure database credentials before using server-side workflows.
