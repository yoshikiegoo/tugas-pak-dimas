<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Form Data Diri</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&family=Lexend:wght@100..900&family=Schoolbell&display=swap');

    :root{
        /* Palet hangat & nyaman */
        --bg: radial-gradient(1200px 600px at 10% 10%, #fff8f3 0%, #fff7f0 30%, #fff3ec 100%);
        --page-bg: #fff7f0;        
        --card: linear-gradient(180deg, #fffaf5 0%, #fff6f0 100%);
        --muted: #7a5a44;       
        --text: #152550ff;        
        --accent: light blue;      
        --accent-2: #0a0a61ff;    
        --border: #6476c7ff;      
        --input-bg: rgba(194, 198, 206, 0.84);
        --shadow: 0 10px 30px rgba(25, 64, 141, 0.06);
        --radius: 12px;
        --gap: 14px;
        --radius-sm: 8px;
        font-family: 'Comic Relief', -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        -webkit-font-smoothing:antialiased;
        -moz-osx-font-smoothing:grayscale;
    }

    *{box-sizing:border-box}

    body{
       margin: 0;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 36px;
    background-image: url('bulan.jpg'); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-color: ; /* Cadangan */
    color: var(--text);
    line-height: 1.45;  
    font-size: 20px;
    backdrop-filter: blur(4px);
    }

    .container{
        width: 700px;
        max-width:100%;
    }

    .card{
        background:var(--card);
        border-radius:var(--radius);
        box-shadow: var(--shadow);
        padding:22px;
        margin-bottom:var(--gap);
        border:1px solid var(--border);
        backdrop-filter: blur(4px);
    }

    h2{
        margin:0 0 10px 0;
        font-size:20px;
        text-align:center;
        color:var(--text);
        letter-spacing:0.2px;
    }

    p.lead{
        margin:0 0 14px 0;
        text-align:center;
        color:var(--muted);
        font-size:13px;
    }

    form{ display:block; }

    label{
        display:block;
        font-size:13px;
        color:var(--muted);
        margin-bottom:8px;
        margin-top:12px;
        font-weight:600;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    select,
    textarea {
        width:100%;
        padding:12px 12px;
        border-radius:var(--radius-sm);
        border:1px solid var(--border);
        background:var(--input-bg);
        font-size:15px;
        color:var(--text);
        transition:box-shadow .18s ease, border-color .12s ease, transform .06s ease;
        box-shadow: inset 0 1px 0 rgba(93, 126, 218, 0.82);
    }

    input::placeholder,
    textarea::placeholder{
        color:rgba(43,43,43,0.45);
    }

    textarea{ min-height:100px; resize:vertical; }

    input:focus,
    select:focus,
    textarea:focus {
        outline:none;
        border-color:var(--accent);
        box-shadow: 0 8px 28px rgba(217,119,6,0.08);
        transform:translateY(-1px);
    }

    .row{
        display:flex;
        gap:12px;
    }

    .row > * { flex:1; }

    .actions{
        margin-top:18px;
        text-align:center;
    }

    input[type="submit"]{
        background: linear-gradient(90deg, var(--accent) 0%, var(--accent-2) 100%);
        color:light blue;
        border:none;
        padding:12px 18px;
        border-radius:10px;
        cursor:pointer;
        font-weight:700;
        width:100%;
        box-shadow: 0 8px 24px rgba(217,119,6,0.12);
        transition:transform .12s ease, box-shadow .12s ease, opacity .12s ease;
        letter-spacing:0.3px;
    }

    input[type="submit"]:hover{
        transform: translateY(-3px);
        opacity:0.98;
    }

    .hasil p{
        margin:8px 0;
        font-size:14px;
        color:var(--text);
    }

    .hint{
        font-size:13px;
        color:var(--muted);
    }

    @media (max-width:520px){
        body{ padding:18px; }
        .container{ width:100%; }
        .card{ padding:16px; }
    }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Form Data Diri</h2>
        <p class="lead">data diri keyen</p>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label class= "label nama">Nama Lengkap</label>
            <input type="text" name="nama" required placeholder="Contoh: alexander graham">

            <label class="email">Email</label>
            <input type="email" name="email" required placeholder="nama@contoh.com">

            <div class="row">
                <div>
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" required placeholder="Kota">
                </div>
                <div>
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" required>
                </div>
            </div>

            <label>Jenis Kelamin</label>
            <select name="kelamin" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label>Alamat</label>
            <textarea name="alamat" rows="3" required placeholder="Jl, RT/RW, Kecamatan, Kota"></textarea>

            <label>Nomor HP</label>
            <input type="text" name="no_hp" required placeholder="0812xxxx">

            <div class="actions">
                <input type="submit" value="Kirim">
            </div>
        </form>
    </div>

    <div class="card">
        <h3 style="margin:0 0 8px 0;">Hasil</h3>
        <p class="hint">Data yang dikirim akan tampil di bawah setelah klik "Kirim".</p>

        <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // ambil dan sanitize input
            $nama = htmlspecialchars($_POST['nama'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $tempat_lahir = htmlspecialchars($_POST['tempat_lahir'] ?? '');
            $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir'] ?? '');
            $kelamin = htmlspecialchars($_POST['kelamin'] ?? '');
            $alamat = htmlspecialchars($_POST['alamat'] ?? '');
            $no_hp = htmlspecialchars($_POST['no_hp'] ?? '');

            echo '<div class="hasil">';
            echo "<p><strong>Nama:</strong> {$nama}</p>";
            echo "<p><strong>Email:</strong> {$email}</p>";
            echo "<p><strong>Tempat Lahir:</strong> {$tempat_lahir}</p>";
            echo "<p><strong>Tanggal Lahir:</strong> {$tanggal_lahir}</p>";
            echo "<p><strong>Jenis Kelamin:</strong> {$kelamin}</p>";
            echo "<p><strong>Alamat:</strong> {$alamat}</p>";
            echo "<p><strong>No. HP:</strong> {$no_hp}</p>";
            echo '</div>';
        } else {
            echo '<div class="hasil"><p class="hint">Belum ada data.</p></div>';
        }
        ?>
    </div>
</div>

</body>
</html>
