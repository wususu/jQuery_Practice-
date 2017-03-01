<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="../../jq.js"></script>
    <style type="text/css">
        body{
            font-family: "Trebuchet MS", Arial, Verdana;
            width: 600px;
        }
        div{
            background-color: #F5F5DC;
        }
    </style>
</head>
<body>
<?php
try {
    $mysql = new PDO('mysql:host=localhost;dbname=exampleDB', 'root', 'root');
}catch (Exception $e){
    die($e);
}
    $query = "SELECT * FROM language";
    if ($result = $mysql->query($query))
    {
        if ($result->rowCount() > 0 )
        {
            ?>
<p>
    Select a language
    <select id="selectLanguage">
        <option value="">select</option>
        <?php
            while($row = $result->fetch())
            {
                ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['languageName']; ?></option>
        <?php
            }

        ?>
    </select>
</p>
<p id="result"> </p>
        <?php
        }
        else{
            echo 'No records found!';
        }
        $result = null;
    }
    else
    {
        echo "Error in query: $query".$mysql->errorInfo();
    }
    $mysql = null;
?>

</body>
<script type="text/javascript">
    $(document).ready(function () {
        $('#selectLanguage').change(function () {
            if ($(this).val() != '')
            {
                $.ajax({
                    url: 'results.php',
                    type: 'GET',
                    dataType: 'text',
                    data: {'id': $(this).val()},
                    success: function (data) {
                        $('#result').html(data);
                    }
                });
            }
        });
    });
</script>
</html>