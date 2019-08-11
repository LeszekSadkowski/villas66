<?php
session_start();
if($_SESSION['bool'] !== true){
    // header('Location: http://avp-communications.com/demo/villas66/login.php');
    header('Location: login.php');
}
if(isset($_POST['logout'])){
    session_destroy();
    // header('Location: http://avp-communications.com/demo/villas66/login.php'); // working on server
    header('Location: login.php');
}
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$file_result = '';
if ($_FILES['file']['error']>0){
    $file_result .= 'No File Uploaded or Invalid File';
    $file_result .= 'Error Code: ' . $_FILES['file']['error'] . '<br>';
}else{
    move_uploaded_file($_FILES['file']['tmp_name'],"c:/xamp/httdocs/villas66/uploads/" . $_FILES['file']['name']);
    // move_uploaded_file($_FILES['file']['tmp_name'],"/volume1/web/demo/villas66/uploads/" . $_FILES['file']['name']);


    // if(isset($_POST["upload"])){header('Location: http://avp-communications.com/demo/villas66/drop.php');}
    
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Files</title>
    <link href="assets/css/drop.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="panel">
        <form id='upladed' action="" enctype='multipart/form-data' method='post'>
            <input type="file" name="file" id="file"><label for="file">Add file</label>
            <input type="submit" name="upload" value="Upload file">
        </form>
        <div id='searcher'> <input type="text" id='myInput' onkeyup=mySearch() placeholder='Serch here...'
                title='Type in a name'></div>
        <form action="" method='post'>
            <input type="submit" name="logout" value="Log out">
        </form>
    </div>
    <div id="files-list">
        <ul id='myUl'>
            <?php

                $path = dirname(__FILE__) . "/uploads/";
                $filesAll = scandir($path);
                $a = array('.', '..');
                $files = array_diff($filesAll,$a );
                $length = count($files)+1;
                for($i = 2; $i <count($files)+2 ; $i++) {
                echo "<li><a download href='" .$path.$files[$i]. "'>".$files[$i] ."</a></li>";
                };
                // echo count($files);
            ?>
        </ul>
    </div>
    <script>
    // list filter
    var looker, filter, ul, li, items, a, i;
    looker = document.querySelector('#myInput');
    var mySearch = function() {
        looker = document.querySelector('#myInput');
        filter = looker.value.toUpperCase();


        ul = document.querySelector('#myUl');
        li = ul.querySelectorAll('li');
        items = li.length;
        console.log(filter);


        for (i = 0; i < items; i++) {
            a = li[i].querySelector('a').textContent.split('.');
            var upperA = a[0].toUpperCase();
            // console.log(upperA);
            if (upperA.indexOf(filter) > -1) {
                li[i].style.display = '';
                console.log(upperA);

            } else {
                li[i].style.display = 'none';
            }
        }
    }
    //label name function
    var input = document.querySelector('#file');
    input.addEventListener('change', function(e) {
        var label = document.querySelector('label');
        labelVal = label.innerHTML;
        var fileName = '';
        fileName = e.target.value.split('\\').pop();

        if (fileName) {
            label.innerHTML = fileName;
        } else {
            label.innerHTML = labelVal;
        }
    });

    // var inputs = document.querySelectorAll('.inputfile');
    //     Array.prototype.forEach.call(inputs, function(input) {
    //         var label = input.nextElementSibling,
    //             labelVal = label.innerHTML;
    //         input.addEventListener('change', function(e) {
    //             var fileName = '';
    //             if(this.files && this.files.length > 1) {
    //                 fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
    //             }
    //             else { fileName = e.target.value.split('\\').pop(); }
    //             if(fileName) { label.innerHTML = fileName; }
    //             else { label.innerHTML = labelVal; }
    //         });
    //     });
    </script>
</body>

</html>