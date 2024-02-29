<!doctype html>
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
    <link href="./assets/css/style.css" rel="stylesheet">

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
                    <img id="my-image" src="#" />
                </div>
                <div class="card-footer">
                    <button id="use">Set</button>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Result</h4>
                </div>
                <div class="card-body">
                    <canvas id="myCanvas" width="1440" height="1800" style="border:1px solid grey;"></canvas>

                    <!-- <canvas id="myCanvas" width="240" height="297" style="border:1px solid grey;"></canvas> -->
                    <!-- <img id="result" src="">
                    <a id="download_image_a" href="/" download="myimage">Download >></a> -->
                </div>
                <div class="card-footer">
                    <button type="button" onClick="download()">Download</button>
                    <!-- <a id="download_image_a" href="/" download="myimage">Download >></a> -->
                    <!-- <a id="download_image" href="/" download="myimage">Download >></a> -->
                </div>
            </div>
        </div>

        <div class="d-none">
            <img src="" id="templete_background" alt="">
            <img src="" id="uploaded_croped_image" alt="">
        </div>

        <!-- <img id="scream" width="220" height="277" src="https://www.w3schools.com/graphics/pic_the_scream.jpg" alt="The Scream"> -->
        <!-- <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                    <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Cool stuff</a></li>
                        <li><a class="text-muted" href="#">Random feature</a></li>
                        <li><a class="text-muted" href="#">Team feature</a></li>
                        <li><a class="text-muted" href="#">Stuff for developers</a></li>
                        <li><a class="text-muted" href="#">Another one</a></li>
                        <li><a class="text-muted" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Resource</a></li>
                        <li><a class="text-muted" href="#">Resource name</a></li>
                        <li><a class="text-muted" href="#">Another resource</a></li>
                        <li><a class="text-muted" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Team</a></li>
                        <li><a class="text-muted" href="#">Locations</a></li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer> -->
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="./assets/library/croppie/croppie.min.js"></script>
    <script>
        const canvas = document.getElementById("myCanvas");
        const ctx = canvas.getContext("2d");
        // ctx.width = 1440; // actual size given with integer values
        // ctx.height = 1800;

        // ctx.style.width = '400px'; // show at 50% on screen
        // ctx.style.height = '50px';


        var backgroundImage = new Image();
        var topImage = new Image();
        // Load the images
        backgroundImage.src = './assets/templete/Influencer-Template.png';
        backgroundImage.onload = function() {
            $('#templete_background').attr('src', backgroundImage);
        }



        $(document).ready(function() {
            console.log("ready!");
            // canvas_initiate("image");
            // Initialize Croppie once
            var resize = new Croppie($('#my-image')[0], {
                viewport: {
                    // width: 1252,
                    // height: 1681,
                    width: 200,
                    height: 250,
                    type: 'square'
                },
                boundary: {
                    // width: 300,
                    height: 450
                },
                enableZoomboolean: true,
                enableOrientation: true,
                quality: 1
            });

            $('#use').on('click', function() {
                // Get cropped image and handle it
                resize.result(
                    // 'base64'
                    {
                        type: 'base64',
                        size: {
                            width: 1252,
                            height: 1681,
                        },
                        format: 'png',
                    }

                ).then(function(dataImg) {
                    var data = [{
                        image: dataImg
                    }, {
                        name: 'myimgage.jpg'
                    }];
                    $('#uploaded_croped_image').attr('src', dataImg);
                    // $('#download_image_a').attr('href', dataImg);
                    canvas_initiate();
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
        function canvas_initiate() {
            // clearCanvas(ctx);

            // Create two image objects
            topImage.src = $('#uploaded_croped_image').attr('src');

            ctx.clearRect(0, 0, canvas.width, canvas.height);
            // When both images are loaded, draw them onto the canvas
            // backgroundImage.onload = function() {


            // }

            topImage.onload = function() {
                // Calculate the position to center the top image
                var x = (canvas.width - topImage.width) / 2;
                var y = (canvas.height - topImage.height) / 2;

                ctx.drawImage(topImage, x, y - 10); // Draw the top image in the center
                ctx.drawImage(backgroundImage, 0, 0, canvas.width, canvas.height);

            }
        }

        function download() {
            let canvasImage = document.getElementById('myCanvas').toDataURL('image/png', 1.0);
            // var canvas = document.createElement('hidden_canvas');
            // var context = canvas.getContext('2d');
            // canvas.width = 1400;
            // canvas.height = 1800;

            // let canvasImage = canvas.toDataURL('image/png');

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

        function clearCanvas(ctx) {
            ctx.save();
            ctx.globalCompositeOperation = 'copy';
            ctx.strokeStyle = 'transparent';
            ctx.beginPath();
            ctx.lineTo(0, 0);
            ctx.stroke();
            ctx.restore();
        }
    </script>

</body>

</html>