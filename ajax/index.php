<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comments</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<main>
    <div style="border: 1px solid red; height: auto; width:500px" id="comment-section">
<!--        <p>message</p>-->
    </div>

    <input id="comment-input" type="text">
    <button id="send-button">Send Message</button>
</main>

<script>
    // Handler for the button click event
    $("#send-button").click(function() {
        // Get the comment from the input field
        var comment = $("#comment-input").val();

        // Make an Ajax request to submit the comment
        $.ajax({
            type: "POST",
            url: "comment_traitement.php",
            data: { comment: comment },
            success: function (response) {
                console.log(response);

                // Update the comment section with the new comment (you may need to modify this part)
                $("#comment-section").append("<p>" + comment + "</p>");

                // Clear the input field
                $("#comment-input").val("");
            }
        });
    });
</script>
</body>
</html>
