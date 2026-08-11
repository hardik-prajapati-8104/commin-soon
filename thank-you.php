<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Thank You - Work Home Safety Solution</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            min-height: 100vh;
            color: #fff;

            background:
                linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)),
                url("images/work.jpeg") center center / cover no-repeat;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .thank-you-box {
            width: 90%;
            max-width: 650px;
            text-align: center;

            padding: 55px 40px;

            background: rgba(40, 40, 40, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;

            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);

            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.35);
        }

        .check-icon {
            width: 80px;
            height: 80px;

            margin: 0 auto 25px;

            border: 2px solid #fff;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 40px;
        }

        .thank-you-box h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .thank-you-box p {
            font-size: 16px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 30px;
        }

        .back-btn {
            display: inline-block;

            padding: 13px 30px;

            color: #fff;
            text-decoration: none;

            border: 1px solid rgba(255, 255, 255, 0.7);
            border-radius: 30px;

            transition: 0.3s ease;
        }

        .back-btn:hover {
            background: #fff;
            color: #222;
        }

        @media (max-width: 576px) {

            .thank-you-box {
                padding: 40px 25px;
            }

            .thank-you-box h1 {
                font-size: 32px;
            }

            .thank-you-box p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <div class="thank-you-box">

        <div class="check-icon">
            ✓
        </div>

        <h1>Thank You!</h1>

        <p>
            Thank you for subscribing to Work Home Safety Solution.
            Your email has been successfully submitted.
        </p>

        <a href="index.php" class="back-btn">
            Back to Home
        </a>

    </div>

</body>

</html>
