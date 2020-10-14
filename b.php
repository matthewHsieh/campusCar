<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
</head>
<body>
<h2>Move Rover</h2>
<form id="selection" method="get">
   <input type="radio" name="kobegreat" value="0,0" checked/>Kobe1
   <input type="radio" name="kobegreat" value="50,0"/>Kobe2
   <input type="radio" name="kobegreat" value="-50,0"/>Kobe3
</form>

<div id="target">
    <h3>Rover Status</h3>
</div>

<script>
    $('#selection').change
    (
        function() 
        {
            var selected_value = $("input[name='kobegreat']:checked").val();

            $.ajax
            ( 
                {
                    url: "new.php",
                    dataType : "html",
                    method: "POST",
                    cache: false,
                    data: { selected_value : selected_value },

                    success: function(response)
                    {
                       var test1 = "<p>"+response+"</p>";
                       $("h3").html(test1);
                    }
                }
            );
        }
    );
</script>
</body>
</html>