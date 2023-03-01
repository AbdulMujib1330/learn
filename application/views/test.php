<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $variable1; ?></h1>
    <p><?php echo $variable2; ?></p>


    <?php foreach ($variabel3 as $key) : ?>
        <div><?php echo $key ?></div>
    <?php endforeach; ?>

    <?php foreach ($variabel4 as $key) : ?>
        <div><?php echo $key ?></div>
    <?php endforeach; ?>
    <?php foreach ($variabel as $data) : ?>
        <div>Nama: <?php echo $data['nama']; ?></div>
        <div>Umur: <?php echo $data['umur']; ?></div>
    <?php endforeach; ?> 
    
    <?php foreach ($data as $cek) : ?>
    <?php
    if ($cek > $proses) {
        $style = 'style="font-size:50px;"';
    } else {
        $style = '';
    }
    ?>
    <button <?php echo $style;?>>Tombol</button>
    <?php endforeach; ?> 
</body>

</html>