<html>
    <head>
        <title>Daftar Tugas Belanjaan</title>
        <link href="<?= base_url('/style.css') ?>" rel="stylesheet"/>
    </head>
    <body>
    <div class="menu-wrap">
    <ul>
        <li><a href="">LOGIN</a>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="proses.php?op=logout">Logout</a></li>
            </ul>
        </li>
    </ul>
    </div>
        <header class="header wrapper">
            <h1 class="title">Daftar Belanjaan <?= date('d M Y') ?></h1>
        </header>
        <main class="main wrapper">
            <?php if(!empty($tugas)): ?>
                <ul class="task-list">
                    <?php foreach($tugas as $t): ?>
                        <li class="<?php if(!empty($t['selesai_pada'])): ?> selesai <?php endif; ?> task-item">
                            <div class="content">
                                <sup>#<?= $t['id'] ?> </sup><?= $t['nama'] ?>
                            </div>
                            <?php if(empty($t['selesai_pada'])): ?>
                                <div class="action">
                                    <button type="submit" form="check-<?= $t['id'] ?>" class="primary">Selesai</button>
                                    <button type="submit" form="del-<?= $t['id'] ?>" class="secondary">Hapus</button>
                                </div>
                                <form method="POST" id="check-<?= $t['id'] ?>" action="<?= base_url('/tugas/' . $t['id']) ?>" style="display:none">
                                    <input name="_method" type="hidden" value="put"/>
                                </form>
                                <form method="POST" id="del-<?= $t['id'] ?>" action="<?= base_url('/tugas/' . $t['id']) ?>" style="display:none">
                                    <input name="_method" type="hidden" value="delete"/>
                                </form>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>
                    Tidak ada belanjaan.
                </p>
            <?php endif; ?>
            <?php if(flash_has('pesan')): ?>
                <div class="message">
                    <?= flash_get('pesan') ?>
                </div>
            <?php endif; ?>
            <div class="create-form">
                <form action="<?= base_url('/tugas') ?>" method="POST">
                    <input name="nama" required autocomplete="off" type="text" value="" placeholder="Nama belanjaan" />
                    <button type="submit">Tambah</button>
                </form>
                <form action="aksi.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file">
                </form>
            </div>
            <tr>
        </main>
    </body>
</html>
