<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="./assets/library/croppie/croppie.css" rel="stylesheet">
    <style>
        canvas {
            border: 1px solid grey;
        }
    </style>
</head>

<body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Techno Fest</h1>
        <!-- <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p> -->
    </div>

    <div class="container-fluid">
        <div class="card-deck mb-3 text-center ml-2 mr-2">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Form</h4>
                </div>
                <div class="card-body text-left">
                    <form>
                        <div class="form-group">
                            <label for="field_name">Name</label>
                            <input type="text" class="form-control" id="field_name" name="field_name" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="field_phone">Phone</label>
                            <input type="text" class="form-control" id="field_phone" name="field_phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="field_email">Email address</label>
                            <input type="email" class="form-control" id="field_email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="upload-demo">Upload Image</label>
                            <input type='file' id="imgInp" />
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Crop</h4>
                </div>
                <div class="card-body">
                    <div id="my-image"></div>
                </div>
                <div class="card-footer">
                    <button id="use" class="btn btn-primary">Set</button>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Result</h4>
                </div>
                <div class="card-body">
                    <canvas id="myCanvas" width="240" height="297"></canvas>
                </div>
                <div class="card-footer">
                    <button type="button" onClick="download()" class="btn btn-primary">Download</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="./assets/library/croppie/croppie.min.js"></script>
    <script>
        const canvas = document.getElementById("myCanvas");
        const ctx = canvas.getContext("2d");
        let backgroundImage = new Image();
        let topImage = new Image();

        $(document).ready(function() {
            console.log("ready!");

            // Initialize Croppie once
            var resize = new Croppie($('#my-image')[0], {
                viewport: {
                    width: 200,
                    height: 250,
                    type: 'square'
                },
                boundary: {
                    width: 300,
                    height: 300
                },
                enableOrientation: true
            });

            $('#use').on('click', function() {
                // Get cropped image and handle it
                resize.result('base64').then(function(dataImg) {
                    var data = [{
                        image: dataImg
                    }, {
                        name: 'myimgage.jpg'
                    }];
                    // Clear the canvas
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    // Draw the background image again
                    backgroundImage.src = './assets/templete/Influencer-Template.png';
                    // When both images are loaded, draw them onto the canvas
                    backgroundImage.onload = function() {
                        ctx.drawImage(backgroundImage, 0, 0, canvas.width, canvas.height);
                    }


                    // Draw the top image
                    topImage.src = dataImg;
                    canvas_initiate(dataImg)
                });
            });

            $("#imgInp").change(function() {
                readURL(this, resize);
            });
        });

        function readURL(input, croppieInstance) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    // Update Croppie instance with new image source
                    croppieInstance.bind({
                        url: e.target.result
                    });
                    $('#use').fadeIn();
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Starting Canvas
        function canvas_initiate(user_image) {

            topImage.src = user_image;

            topImage.onload = function() {
                // Calculate the position to center the top image
                var x = (canvas.width - topImage.width) / 2;
                var y = (canvas.height - topImage.height) / 2;

                ctx.drawImage(topImage, x, y); // Draw the top image in the center
            }
        }

        function download() {
            let canvasImage = document.getElementById('myCanvas').toDataURL('image/png');
            // this can be used to download any image from webpage to local disk
            let xhr = new XMLHttpRequest();
            xhr.responseType = 'blob';
            xhr.onload = function() {
                let a = document.createElement('a');
                a.href = window.URL.createObjectURL(xhr.response);
                a.download = 'image_name.png';
                a.style.display = 'none';
                document.body.appendChild(a);
                a.click();
                a.remove();
            };
            xhr.open('GET', canvasImage); // This is to download the canvas Image
            xhr.send();
        }
    </script>

</body>

</html>