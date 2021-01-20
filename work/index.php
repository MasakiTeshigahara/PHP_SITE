<?php
$title = ' ';
include('_header.php');
include('_sidebar.php');
?>

<main class="main">
    <div class="layout_bukai">
        <section>
            <div class="img_bukai">
                <img src="img/job_ekisya.png" width="260" height="260" alt="占い師">
            </div>
            <h1>くじ引き</h1>
            <form method="POST" action="index.php">
                <label>フルネームをアルファベットで入力してください</label><br />
                <label>例）tarou yamada</label><br /><br />
                <input type="text" size="50px" name="data" />
                <input type="submit" value="送信" />

                <h3 class="text">あなたの運勢は...</h3>

                <?php
                if (isset($_POST['data'])) {
                    $input = trim($_POST['data']);
                } else {
                    $input = "";
                }
                // $input = trim($_POST['data']);
                $input = strlen($input);
                // echo $input;
                // if (isset($_POST['data'])) {
                if ($input == 0) {
                    echo "";
                } elseif ($input % 10 == 0) {
                    echo "<p class='msg_result'>　大吉</p>";
                } elseif ($input % 2 == 0) {
                    echo "<p class='msg_result'>　中吉</p>";
                } elseif ($input % 2 == 1) {
                    echo "<p class='msg_result'>　小吉</p>";
                }

                ?>

                <!-- <a href="index.php">戻る</a> -->
        </section>
    </div>
</main>

</div>
</body>

</html>
</DOCTYPE>