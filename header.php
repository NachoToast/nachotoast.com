<div id="header">
    <a href="/">Home</a>

    <!--log in-->
    <?php if(!isset($_SESSION["id"])) echo "
        <div class='dropdown'>
            <a href='login'>Log In</a>
            <div class='dropdown-content'>
                <a href='signup'>Sign Up</a>
            </div>
        </div>";
    ?>

    <!--profiles-->
    <?php
        if (isset($_SESSION["id"])) echo "
            <div class='dropdown'>
            <a class='noselect'>Users</a>
                <div class='dropdown-content'>
                    <a href='profiles.php?user=" . $_SESSION["id"] . "'>" . $_SESSION["username"] . "</a>
                    <a href='profiles.php'>All Users</a>
                </div>
            </div>";
        else echo "<a href='profiles.php'>Users</a>";
    ?>
    
    <!-- 110 project directory -->
    <div class="dropdown">
        <a class="noselect">110</a>
        <div class="dropdown-content">
            <a href="110/float">Float</a>
            <a href="110/links">Links</a>
        </div>
    </div>

    <!-- changelog -->
    <a href="changelog">Changelog</a>

    <!-- games -->
    <a href="g/Ignominy">Ignominy</a>

    <!--logout-->
    <?php if (isset($_SESSION["id"])) echo "<a href='inc/logout.inc'>Log Out</a>" ?>

    <!--notifications-->
    <?php
        if (isset($_GET["s"])) {
            if ($_GET["s"] == "login") echo "<a class='n g' onclick='this.style.display = `none`'>Successfully Logged In!</a>";
            else if ($_GET["s"] == "logout") echo "<a onclick='this.style.display = `none`' class='n g'>Successfully Logged Out!</a>";
            else if ($_GET["s"] == "signup") echo "<a class='n g' onclick='this.style.display = `none`'>Successfully Signed Up!</a>";
        }
    ?>
</div>