<?php include '_part_header.php'; ?>

<?php

# 2022-08-20 16:54:41
# menampilkan data user github
# base uri : https://api.github.com/users/{YOUR_USERNAME_GITHUB}

# tampilkan user github RSO
# menggunakan fungsi curl yang sudah di buat di function

# github account readsevenone
$profile_rso = http_request('https://api.github.com/users/readsevenone');

# github account ninjandri
$profile_njd = http_request('https://api.github.com/users/ninjandri');

?>

<div class="container">

    <div style="margin-bottom: 50px;">

        <h1 class="page-header text-center" style="margin-top: 20px; margin-bottom: 30px;">About</h1>
        <p class="text-justify">
            Selamat datang, di modul aplikasi API Pancake, aplikasi ini merupakan aplikasi tester yang di buat untuk development testing. silahkan explore dan silahkan untuk
            memberi masukan jika memang ada masukan dari para pengunjung site kami.
            Kami manusia yang tidak sempurna, kesempurnaan hanya milik <b>Tuhan</b>, kami masih tahap proses, kami masih belajar,
            kami bukan yang terbaik tapi kami akan berusaha memberikan yang terbaik. Semoga Tuhan mengizinkan, semoga Tuhan melindungi kita, Amin.
        </p>

    </div>

    <div style="margin-bottom: 50px;">

        <h1 class="page-header text-center" style="margin-top: 20px; margin-bottom: 30px;">Team</h1>
        <div class="row">

            <div class="col-lg-6 text-center" style="margin-bottom: 40px;">
                <img class="img-circle" src="<?= $profile_njd['avatar_url'] ?>" alt="Generic placeholder image" width="140" height="140">
                <h3 class="text-danger"><?= $profile_njd['login'] ?></h3>
                <p>
                    Nama lengkap <?= $profile_njd['name'] ?> sebagai pemain inti, yang bertempat tinggal di <?= $profile_njd['location'] ?>, doi punya codename <?= $profile_njd['login'] ?> bisa cek di link github nya,
                    <a href="<?= $profile_njd['html_url'] ?>" target="_new" onclick="return confirm('Benernih mau kepoin ??');" style="text-decoration: none;">Kepoin yu !! </a> biar kenal.
                </p>

                <blockquote style="margin-top: 20px;">
                    <?= $profile_njd['bio'] ?>
                </blockquote>
            </div>

            <div class="col-lg-6 text-center" style="margin-bottom: 40px;">
                <img class="img-circle" src="<?= $profile_rso['avatar_url'] ?>" alt="Generic placeholder image" width="140" height="140">
                <h3 class="text-danger"><?= $profile_rso['login'] ?></h3>
                <p>
                    Nama lengkap <?= $profile_rso['name'] ?> sebagai pemain cadangan, yang bertempat tinggal di <?= $profile_rso['location'] ?>, doi punya codename <?= $profile_rso['login'] ?> bisa cek di link github nya,
                    <a href="<?= $profile_rso['html_url'] ?>" target="_new" onclick="return confirm('Benernih mau kepoin ??');" style="text-decoration: none;">Kepoin yu !! </a> biar kenal.
                </p>

                <blockquote style="margin-top: 20px;">
                    <?= $profile_rso['bio'] ?>
                </blockquote>
            </div>

        </div>

    </div>

</div>

<?php include '_part_footer.php'; ?>