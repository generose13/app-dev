@include('layouts.student-officer-nav')
@yield('student-officer-nav')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Clearance</title>

    <!--Style CSS Link-->
    <link rel="stylesheet" href="css/student.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="doc-content-container">
        <!--View Document Markup-->
        <div class="top-content">
            <div class="header">
                <div class="header-title">View Document</div>
                <div class="header-AY">Academic Year: <div class="grey-box"></div>
                </div>
            </div>

        </div>
        <div class="filename-print">
            <div>File Name:</div>
            <div>
                <button class="btnPrint"><i class="fa fa-print"></i> Print</button>
            </div>
        </div>


        <div class="file-content">
            <div class="file-preview">
                <input type="file" accept="image/*">
            </div>
        </div>
    </div>

    <script>
        function previewFile() {
            var preview = document.querySelector('.file-preview');
            var fileInput = document.querySelector('input[type=file]');
            var file = fileInput.files[0];


            reader.onloadend = function() {
                var img = document.createElement('img');
                img.src = reader.result;
                preview.innerHTML = ''; // Clear previous preview
                preview.appendChild(img);
            }

            if (file) {
                reader.readAsDataURL(file);
                fileInput.value = ''; // Clear file input value
            } else {
                preview.innerHTML = '';
            }
        }

        document.querySelector('input[type=file]').addEventListener('change', previewFile);
    </script>

</body>

</html>
