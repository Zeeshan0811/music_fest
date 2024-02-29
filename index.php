<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico" />
    <meta name="theme-color" content="#563d7c">
    <title>Event Spark</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" crossorigin="anonymous" />

    <!-- Custom styles for this template -->
    <link href="./assets/library/croppie/croppie.css" rel="stylesheet" />
    <link href="./assets/css/cover.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="pricing-header px-3 py-3 pt-3 pb-md-3 mx-auto text-center">
        <img class="d-block mx-auto" src="./assets/images/Mnemonic.png" alt="" width="200">
        <!-- <h1 class="display-4">Tecno Music Fest</h1> -->
        <!-- <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p> -->
    </div>

    <div class="container-fluid">
        <div class="card-deck mb-3 text-center ml-2 mr-2">
            <div class="card mb-4 box-shadow bg-dark text-white">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Upload Image</h4>
                </div>
                <div class="card-body mt-5 text-center">
                    <div class="form-group">
                        <input type="file" id="imgInp" />
                    </div>
                </div>
            </div>
            <div class="card mb-4 box-shadow bg-dark text-white">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Crop</h4>
                </div>
                <div class="card-body">
                    <img id="my-image" src="#" />
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" id="use">Set Image</button>
                </div>
            </div>
            <div class="card mb-4 box-shadow bg-dark text-white">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Result</h4>
                </div>
                <div class="card-body">
                    <canvas id="myCanvas" width="1440" height="1800" style="border: 1px solid grey"></canvas>
                </div>
                <div class="card-footer">
                    <button id="btn_download" class="btn btn-success" type="button" onClick="download()">Download</button>
                </div>
            </div>
        </div>

        <div class="d-none">
            <img src="" id="templete_background" alt="" />
            <img src="" id="uploaded_croped_image" alt="" />
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="./assets/library/croppie/croppie.min.js"></script>
    <script>
        const canvas = document.getElementById("myCanvas");
        const ctx = canvas.getContext("2d");

        var backgroundImage = new Image();
        var topImage = new Image();
        // Load the images
        backgroundImage.src = "./assets/templete/Influencer-Template_2.png";
        backgroundImage.onload = function() {
            $("#templete_background").attr("src", backgroundImage);
        };

        $(document).ready(function() {
            console.log("ready!");
            // canvas_initiate("image");
            // Initialize Croppie once
            var resize = new Croppie($("#my-image")[0], {
                viewport: {
                    // width: 1252,
                    // height: 1681,
                    width: 200,
                    height: 250,
                    type: "square",
                },
                boundary: {
                    // width: 300,
                    height: 450,
                },
                enableZoomboolean: true,
                enableOrientation: true,
                quality: 1,
            });

            $("#use").on("click", function() {
                // Get cropped image and handle it
                resize
                    .result(
                        // 'base64'
                        {
                            type: "base64",
                            size: {
                                width: 1252,
                                height: 1681,
                            },
                            format: "png",
                        }
                    )
                    .then(function(dataImg) {
                        var data = [{
                                image: dataImg,
                            },
                            {
                                name: "myimgage.jpg",
                            },
                        ];
                        $("#uploaded_croped_image").attr("src", dataImg);
                        // $('#download_image_a').attr('href', dataImg);
                        canvas_initiate();
                    });

                $("#btn_download").fadeIn();
            });

            $("#imgInp").change(function() {
                readURL(this, resize);
            });


            // $(document).on('submit', '#imgInp', function(e) {
            //     e.preventDefault();
            //     readURL(this, resize);

            //     return false;
            // });

        });



        function readURL(input, croppieInstance) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    // Update Croppie instance with new image source
                    croppieInstance.bind({
                        url: e.target.result,
                    });
                    $("#use").fadeIn();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Starting Canvas
        function canvas_initiate() {
            // clearCanvas(ctx);

            // Create two image objects
            topImage.src = $("#uploaded_croped_image").attr("src");

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
            };
        }

        function download() {
            let canvasImage = document
                .getElementById("myCanvas")
                .toDataURL("image/png", 1.0);

            // this can be used to download any image from webpage to local disk
            let xhr = new XMLHttpRequest();
            xhr.responseType = "blob";
            xhr.onload = function() {
                let a = document.createElement("a");
                a.href = window.URL.createObjectURL(xhr.response);
                a.download = "image_name.png";
                a.style.display = "none";
                document.body.appendChild(a);
                a.click();
                a.remove();
            };
            xhr.open("GET", canvasImage); // This is to download the canvas Image
            xhr.send();
        }

        function clearCanvas(ctx) {
            ctx.save();
            ctx.globalCompositeOperation = "copy";
            ctx.strokeStyle = "transparent";
            ctx.beginPath();
            ctx.lineTo(0, 0);
            ctx.stroke();
            ctx.restore();
        }
    </script>
</body>

</html>