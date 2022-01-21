<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload image</title>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body>
    
    <?php foreach ($errors as $error) : ?>
        <li><?= esc($error) ?></li>
    <?php endforeach ?>

    <?= form_open_multipart('upload/upload') ?>

    <label>Title of your Image : </label>
    <input type="text" name="title" placeholder="Enter title here..." /><br>

    <label>Upload your Image here: </label>
    <input type="file" name="userfile" size="20" />

    <br /><br />
    
    <input type="submit" value="Upload" />
    <p class="btn"><?= anchor('viewimages', 'View Uploaded Images') ?></p><br>
    </form>

</body>

</html>