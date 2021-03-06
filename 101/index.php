    <link rel="stylesheet" href="solarized-dark.css" type="text/css">
    <script defer src="highlight.pack.js"></script>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <script>const resources = [
        <?php
            session_start();
            $revision_exercise_files = array();
            $i = 0;
            foreach(glob('revision_exercises/*.html') as $filename) {
                $p = pathinfo($filename);
                $n = $p['filename'];
                $n = str_replace('_', ' ', $n);
                $n = ucwords($n);
                $fs = filesize($filename);
                $file = fopen($filename, "r");
                $contents = fread($file, $fs);
                fclose($file);
                $revision_exercise_files[$i]['name'] = $n;
                $arr = explode("<pre>", $contents);
                array_shift($arr);
                $revision_exercise_files[$i]['contents'] = $arr;
                $revision_exercise_files[$i]['size'] = $fs;
                $revision_exercise_files[$i]['order'] = floatval(substr($contents, 0, 2));
                $i++;
            }
            function cmp($a, $b) {
                return $b['order'] - $a['order'];
            }
            function cmp_i($a, $b) {
                return $a['order'] - $b['order'];
            }

            usort($revision_exercise_files, "cmp");
            echo json_encode($revision_exercise_files);
        ?>,
        <?php
            $assessments_files = array();
            $i = 0;
            foreach(glob('assessments/*.html') as $filename) {
                $p = pathinfo($filename);
                $n = $p['filename'];
                $n = str_replace('_', ' ', $n);
                $n = ucwords($n);
                $fs = filesize($filename);
                $file = fopen($filename, "r");
                $contents = fread($file, $fs);
                fclose($file);
                $assessments_files[$i]['name'] = $n;
                $arr = explode("<pre>", $contents);
                array_shift($arr);
                $assessments_files[$i]['contents'] = $arr;
                $assessments_files[$i]['size'] = $fs;
                $assessments_files[$i]['order'] = floatval(substr($contents, 0, 2));
                $i++;
            }

            usort($assessments_files, "cmp");
            echo json_encode($assessments_files);
        ?>,
        <?php
            $assignments = array();
            $i = 0;
            foreach(glob('assignments/*.html') as $filename) {
                $p = pathinfo($filename);
                $n = $p['filename'];
                $n = str_replace('_', ' ', $n);
                $n = ucwords($n);
                $fs = filesize($filename);
                $file = fopen($filename, "r");
                $contents = fread($file, $fs);
                fclose($file);
                $assignments[$i]['name'] = $n;
                $arr = explode("<pre>", $contents);
                array_shift($arr);
                $assignments[$i]['contents'] = $arr;
                $assignments[$i]['size'] = $fs;
                $assignments[$i]['order'] = floatval(substr($contents, 0, 2));
                $i++;
            }

            usort($assignments, "cmp");
            echo json_encode($assignments);
        ?>,
        <?php
            $past_papers = array();
            $i = 0;
            foreach(glob('past_papers/*.html') as $filename) {
                $p = pathinfo($filename);
                $n = $p['filename'];
                $n = str_replace('_', ' ', $n);
                $n = ucwords($n);
                $fs = filesize($filename);
                $file = fopen($filename, "r");
                $contents = fread($file, $fs);
                fclose($file);
                $past_papers[$i]['name'] = $n;
                $arr = explode("<pre>", $contents);
                array_shift($arr);
                $past_papers[$i]['contents'] = $arr;
                $past_papers[$i]['size'] = $fs;
                $past_papers[$i]['order'] = floatval(substr($contents, 0, 2));
                $i++;
            }

            usort($past_papers, "cmp");
            echo json_encode($past_papers);
        ?>]
    </script>
    <script defer src='display_files.js'></script>
    <?php
        if (isset($_GET["q"]) && isset($_GET["p"]) && isset($_GET["t"])) {
            if ($_GET["t"] == 0) $files = $revision_exercise_files;
            else if ($_GET["t"] == 1) $files = $assessments_files;
            ?>
                <script>const from_url = true; url_data = {type: <?php echo $_GET["t"]?>,question:<?php echo $_GET["q"] ?>, page:<?php echo $_GET["p"] ?>} </script>
                <meta property="og:title" content="<?php echo $files[$_GET["p"] - 1]['name'] . ', Question ' . $_GET["q"]?>">
                <meta property="og:description" content="<?php
                            $output = $files[$_GET["p"] - 1]['contents'][$_GET["q"] - 1];
                            $output = substr($output, 6, -10);
                            $output = nl2br($output);
                            $output = htmlentities($output);
                            echo $output;
                    ?>">
            <?php
        }
        else {
            ?>
                <meta property="og:title" content="CompSci101 Index">
                <meta property="og:description" content="Index page for the CompSci101 resource hub on the NachoToast website.">
                <script>const from_url = false</script>
            <?php
        }
        include_once '../head.html';
    ?>
    <meta property="og:site_name" content="NachoToast">
    <meta property="og:image" content="https://nachotoast.com/img/main.png">
    <title>101 Index</title>
</head>
<body>
    <?php
        include_once '../header.php' ;
    ?>
    <h1 class='noselect'>CompSci 101 Index</h1>
    <div id='global_notification_box'>
        <?php
            // if (!isset($_COOKIE["1/06"])) echo "<p class='noselect' id='1/06'>1/06 update: Lab 9 and timed exercise 9 are up.<br>Revision (coding) exercises won't be up since they are different per person.</p>";
            // todo: use data html attribute to adjust expiry date?
        ?>
    </div>
    <div id='resource_container'>
        <div class='special_scroll'>
            <h2 class='noselect'>Quick Links</h2>
            <a class="noselect" target="_blank" href="https://uoa.tukib.org/">Bryn's Dashboard</a>
            <a class="noselect" target="_blank" href="https://notes.joewuthrich.com/compsci101">Joe's Notes</a>
            <a class="noselect" target="_blank" href="https://coderunner.auckland.ac.nz/moodle/course/view.php?id=3391">Coderunner</a>
            <a class="noselect" target="_blank" href="https://canvas.auckland.ac.nz/courses/60604">Canvas</a>
            <a class="noselect" target="_blank" href="https://discord.gg/QZgUWJQhJ7">Discord</a>
            <a class="noselect" target="_blank" href="https://www.library.auckland.ac.nz/exam-papers/subject/Computer%20Science/COMPSCI%20101">Past Papers</a>
            <a class='noselect' target='_blank' href='https://www.calendar.auckland.ac.nz/en/courses/faculty-of-science/computer-science.html?_ga=2.47717159.1698591504.1621423272-1880834076.1611556323#COMPSCI_373Computer_Graphics_and_Image_Processing'>Course Info</a>
        </div>
        <div id='revision_exercises' class='noselect special_scroll'>
        </div>
        <div id='assessments' class='noselect special_scroll'>
        </div>
        <div id='assignments' class='noselect special_scroll'>
        </div>
        <div id='past_papers' class='noselect special_scroll'>
        </div>
        <div class='special_scroll'>
            <h2 class='noselect'>Walkthroughs</h2>
            <a class='noselect' href='101/walkthroughs/lab_9_question_6'>Lab 9: Question 6</a>
            <a class='noselect' href='101/walkthroughs/tictactoe'>Tic Tac Toe</a>
            <a class='noselect' href='101/walkthroughs/sudoku'>Sudoku</a>
            <a class='noselect' href='101/walkthroughs/minimock'>Mini-Mock Exam</a>
        </div>
    </div>
    <div id="output_container">
    </div>
</body>
</html>