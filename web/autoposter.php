
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" type="text/css" href="css/autoposter.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        window.onload = function() {
            $('#post').on('click',function(){
                var message = document.getElementsByName('message')[0];
                message = message.value;

                if (message === "") {
                    alert("Please enter some text before posting")
                    return;
                }

                var groups = [];

                $( "select option:selected" ).each(function() {
                    groups.push(this.id);
                });

                if (groups.length <= 0) {
                    alert("Please select at least one group.");
                    return;
                }
                $.ajax({
                    url: 'http://autofacebookgroupposter.com/background.php',
                    data:{message:message,groups:groups},
                    success: function(data){
                       alert(data);

                    },
                    error: function(data) {
                        alert('Send this error to milos.keza@gmail.com: '+data);
                    }
                });
            });
        }

    </script>
</head>
<body>
<div id="main">

    <div class="margin">
        <h1>
       
        </h1>
    </div>


    <div class="margin">




            <textarea rows="10" cols="50" placeholder="Enter your text here." name="message" id="message"></textarea>
            <div class="grupe">
               
            <button id="post">Post</button>

    </div>

    <div class="margin">
        <input type="file" name="pic" accept="image/*">

    </div>

    <div class="baner margin">

    </div>

</div>

</body>
</html>
