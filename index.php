<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script type="text/javascript">

        window.onload = function () {
            $('#ok').click(function () {
                $.ajax({
                    url: 'rez.php',
                    type: 'POST',
                    dataType: 'json',
                    data: 'text='  + $('#text').val(),
                    success: function (data) {

                       if(data.number >5){
                           $('#body').html(data.text)
                       } else {
                           $('#body').html("<h1>" + data.text + "</h1>")
                       }
                    },
                    context: document.body,
                    statusCode: {
                        404: function() {
                            alert( "page not found" );
                        }
                    }
                }).done(function() {

                });


            });

        }

        
    </script>
</head>
<body>
<form id="form" onsubmit="return false">
    <input id="text" name="text">
    <input type="submit" id="ok">
</form>
<div id="body"></div>
</body>
</html>