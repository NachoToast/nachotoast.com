    <link href="css/all_profiles.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script defer src="js/profiles.js"></script>
    <meta property="og:title" content="NachoToast User Profiles">
    <meta property="og:description" content="List of NachoToast user profiles.">
    <meta property="og:site_name" content="NachoToast">
    <meta property="og:image" content="https://nachotoast.com/good_boye.jpg">
    <title>User Profiles</title>
</head>
<body>
    <?php include_once 'header.php'?>
    <h1>NachoToast User Profiles</h1>
    <div id="profiles_config">
        <p class='noselect'>
            <span class='users_per_page uppa' onclick="change_users_per_page(0)">10</span>
            <span class='users_per_page' onclick="change_users_per_page(1)">20</span>
            <span class='users_per_page' onclick="change_users_per_page(2)">50</span>
             Users Per Page
        </p>
        <p class='noselect'>
            <span class='page_skip' onclick='change_page(-2)'><< </span>
            <span class='page_skip' onclick='change_page(-1)'> <</span>
            <span id="page_display_number">Page 1 of 2</span>
            <span class='page_skip' onclick='change_page(1)'>> </span>
            <span class='page_skip' onclick='change_page(2)'> >></span>
        </p>
        <p class='noselect' id='user_display_number'>Displaying 50 of 89 users.</p>
    </div>
    <input
    <?php
        if (isset($_SESSION["id"])) echo 'placeholder="Search" oninput="schedule_profiles()"';
        else echo 'placeholder="Log in to search users." disabled';
    ?> id="username_search">
    <div id="profiles_div">
    </div>
</body>
</html>