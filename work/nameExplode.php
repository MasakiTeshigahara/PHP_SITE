<?php
$title = ' ';
include('_header.php');
include('_sidebar.php');
?>

<main class="main">
    <div class="box">
        <section>
        <img src="img/job_kantokukan_man.png" width="260" height="260" alt="占い師">
        <h1>名前分裂</h1>
        <form method="POST" action="nameExplode.php">
            <label>生年月日と名前を入力してください</label><br />
            <label>例）20210118山田太郎</label><br /><br />
            <input type="text" size="50px" name="data" />
            <input type="submit" value="送信" />

            <h3 class="text">年</h3>
            <?php
            if (isset($_POST['data'])) {
                $year = substr($_POST['data'], "0", "4");
                echo "<p　class='msg_result'> $year 年</p>";
            }
            ?>
            <h3 class="text">月</h3>
            <?php
            if (isset($_POST['data'])) {
                $month = substr($_POST['data'], "4", "2");
                echo "<p　class='msg_result'> $month 月</p>";
            }
            ?>
            <h3 class="text">日</h3>
            <?php
            if (isset($_POST['data'])) {
                $day = substr($_POST['data'], "6", "2");
                echo "<p　class='msg_result'> $day 日</p>";
            }
            ?>
            <h3 class="text">名前</h3>
            <?php
            if (isset($_POST['data'])) {
                $name = substr($_POST['data'], "8");
                echo "<p　class='msg_result'> $name 様</p>";
            }
            ?>
            <h3 class="text">年齢</h3>
            <?php
            $now = date("Ymd");
            // echo $birth ;
            if (isset($_POST['data'])) {
                $birth = $year . $month . $day;
                $age = floor(($now - $birth) / 10000);
                echo "<p　class='msg_result'> $age 歳</p>";
            }
            ?>
            </section>
    </div>
</main>

</div>
</body>

</html>
</DOCTYPE>