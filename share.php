<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Sharing</title>
    <style>
        #imageContainer {
            text-align: center;
            margin-bottom: 20px;
        }

        #image {
            max-width: 100%;
            max-height: 300px;
        }

        #shareButton {
            display: block;
            margin: 0 auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="imageContainer">
        <img id="image" src="your_image.jpg" alt="Image">
    </div>

    <button id="shareButton">Share on Social Media</button>

    <script>
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const image = urlParams.get('image')
        document.getElementById("imageid").src = "./uploads/user/".image;
        // console.log(product);

        document.getElementById('shareButton').addEventListener('click', function() {
            // Get the current URL
            var url = window.location.href;

            // Construct the share URL for Facebook
            var facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url);

            // Construct the share URL for Twitter
            var twitterShareUrl = 'https://twitter.com/share?url=' + encodeURIComponent(url);

            // Open the sharing windows for Facebook and Twitter
            window.open(facebookShareUrl, '_blank');
            window.open(twitterShareUrl, '_blank');
        });
    </script>
</body>

</html>