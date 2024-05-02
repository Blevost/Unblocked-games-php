<html>
<head>
    <title>My Website</title>
    <style type="text/css" media="screen">
        .active {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    foreach ($items as $item) {
        if (isset($_GET['page']) && $_GET['page'] == strtolower($item)) {
            echo '<a href="?page=' . strtolower($item) . '" class="active">' . $item . '</a><br>';
            $activePage = strtolower($item) . ".php";
        } else {
            echo '<a href="?page=' . strtolower($item) . '">' . $item . '</a><br>';
        }
    }

    // Include the active page
    if (isset($activePage)) {
        include $activePage;
    } else {
        include "home.php"; // Default page
    }
    ?>
</body>
</html>
