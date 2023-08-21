<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Imperial+Script&family=Poppins:wght@400;600&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container_certificate {
            height: 100vh;
            overflow: hidden;
            z-index: 10;
            position: relative;
            border: 1px solid black;
            padding: 2rem;
            display: flex;
        }

        .certificate {
            z-index: 10;
            width: 100%;
            border: 8px solid black;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .certificate p {
            font-family: "Poppins", sans-serif;
        }

        .certificate h1 {
            font-family: "Imperial Script", cursive;
            font-size: 90px;
            font-weight: normal;
        }
        .certificate .name {
            font-family: "Poppins", sans-serif;
            font-size: 34;
            font-weight: bolder;
        }

        .type_certification {
            font-family: "Poppins", sans-serif;
            font-size: 38px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1;
        }

        .logo h1 {
            font-family: "Poppins", sans-serif;
            font-size: 24px;
            font-weight: bold;
        }

        .logo img {
            width: 140px;
        }

        .divider {
            width: 5px;
            height: 65%;
            background-color: black;
        }

        .left-top {
            top: 0;
            left: 0;
            position: absolute;
            background-color: #697899;
            width: 300px;
            height: 300px;
            transform: rotate(45deg);
            margin-top: -190px;
            margin-left: -190px;
        }

        .right-top {
            top: 0;
            right: 0;
            position: absolute;
            background-color: #697899;
            width: 300px;
            height: 300px;
            transform: rotate(45deg);
            margin-top: -190px;
            margin-right: -190px;
        }

        .left-bottom {
            bottom: 0;
            left: 0;
            position: absolute;
            background-color: #697899;
            width: 300px;
            height: 300px;
            transform: rotate(-50deg);
            margin-bottom: -170px;
            margin-left: -190px;
        }

        .right-bottom {
            bottom: 0;
            right: 0;
            position: absolute;
            background-color: #697899;
            width: 300px;
            height: 300px;
            transform: rotate(50deg);
            margin-bottom: -170px;
            margin-right: -190px;
        }


    </style>
</head>
<body>
<div class="container_certificate">
    <div class="certificate">
        <div class="left-top"></div>
        <div class="left-bottom"></div>
        <div class="right-top"></div>
        <div class="right-bottom"></div>
        <h1>Certification</h1>
        <p>this certifies that</p>
        <h2 class="name">Ziaurrahman Athaya</h2>
        <p>has successfully completed</p>
        <h2 class="type_certification">Backend Developer Course</h2>
        <p class="date">On {{ now() }} At</p>
        <div class="logo">
            <img src="./Logo-Dark.png" alt="logo" />
            <div class="divider"></div>
            <div class="frameacade">
                <h1>Frame</h1>
                <h1 style="color: #f6b21b; margin-left: 1.5rem">
                    Acade
                </h1>
            </div>
        </div>
    </div>
</div>
</body>
</html>
