<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | Work Home Safety Solution</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #080808;
            color: #ffffff;
            min-height: 100vh;
        }

        .contact-page {
            min-height: 100vh;
            padding: 80px 20px;
            position: relative;
            overflow: hidden;

            background:
                linear-gradient(135deg,
                    rgba(0, 0, 0, 0.96),
                    rgba(20, 20, 20, 0.94));
        }

        /* Background Effect */

        .contact-page::before {
            content: "";
            position: absolute;
            width: 600px;
            height: 600px;
            top: -250px;
            right: -200px;

            background: radial-gradient(circle,
                    rgba(179, 143, 81, 0.12),
                    transparent 70%);

            pointer-events: none;
        }

        .contact-page::after {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            bottom: -250px;
            left: -200px;

            background: radial-gradient(circle,
                    rgba(179, 143, 81, 0.08),
                    transparent 70%);

            pointer-events: none;
        }

        .contact-container {
            position: relative;
            z-index: 2;
            max-width: 1100px;
            margin: auto;
        }

        /* Heading */

        .contact-heading {
            text-align: center;
            margin-bottom: 55px;
        }

        .contact-heading .small-title {
            color: #b38f51;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .contact-heading h1 {
            font-size: 48px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 15px;
        }

        .contact-heading p {
            max-width: 650px;
            margin: auto;
            color: rgba(255, 255, 255, 0.65);
            font-size: 16px;
            line-height: 1.8;
        }

        /* Main Box */

        .contact-box {
            display: grid;
            grid-template-columns: 1.5fr 0fr;

            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 22px;

            background: rgba(255, 255, 255, 0.035);
            backdrop-filter: blur(15px);

            overflow: hidden;
        }

        /* Left */

        .contact-info {
            padding: 45px;
            background: rgba(255, 255, 255, 0.025);
            border-right: 1px solid rgba(255, 255, 255, 0.10);
        }

        .contact-info h3 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .contact-info>p {
            color: rgba(255, 255, 255, 0.60);
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 25px;
        }

        .contact-icon {
            width: 45px;
            height: 45px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 10px;

            color: #b38f51;
            background: rgba(179, 143, 81, 0.10);

            font-size: 18px;
        }

        .contact-item h6 {
            margin: 0 0 5px;
            font-size: 14px;
            font-weight: 600;
        }

        .contact-item span {
            color: rgba(255, 255, 255, 0.55);
            font-size: 13px;
        }

        /* Form */

        .contact-form {
            padding: 45px;
        }

        .contact-form h3 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            color: rgba(255, 255, 255, 0.85);
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            height: 52px;

            background: rgba(255, 255, 255, 0.04);

            border: 1px solid rgba(255, 255, 255, 0.13);

            border-radius: 10px;

            color: #ffffff;

            font-size: 14px;

            padding: 0 15px;

            box-shadow: none !important;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.35);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #b38f51;
            background: rgba(255, 255, 255, 0.05);
            color: #ffffff;
        }

        .form-select {
            color: rgba(255, 255, 255, 0.65);
        }

        .form-select option {
            background: #111111;
            color: #ffffff;
        }

        textarea.form-control {
            height: 130px;
            padding-top: 15px;
            resize: none;
        }

        /* Submit Button */

        .submit-btn {
            width: 100%;
            height: 54px;

            border: 1px solid #b38f51;
            border-radius: 10px;

            background: #b38f51;
            color: #ffffff;

            font-size: 14px;
            font-weight: 600;

            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            background: transparent;
            color: #b38f51;
        }

        /* Back Button */

        .back-button {
            text-align: center;
            margin-top: 30px;
        }

        .back-button a {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            color: rgba(255, 255, 255, 0.65);
            text-decoration: none;

            font-size: 13px;

            transition: 0.3s;
        }

        .back-button a:hover {
            color: #b38f51;
        }

        /* Responsive */

        @media (max-width: 991px) {

            .contact-box {
                grid-template-columns: 1fr;
            }

            .contact-info {
                border-right: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.10);
            }

        }

        @media (max-width: 576px) {

            .contact-page {
                padding: 50px 15px;
            }

            .contact-heading h1 {
                font-size: 34px;
            }

            .contact-heading p {
                font-size: 14px;
            }

            .contact-info,
            .contact-form {
                padding: 30px 22px;
            }

        }
    </style>
</head>

<body>

    <section class="contact-page">

        <div class="contact-container">

            <!-- Heading -->

            <div class="contact-heading">

                <h1>
                    Contact Us
                </h1>

                <p>
                    Have a question or need professional workplace safety
                    solutions? Get in touch with our team and we'll be happy
                    to help.
                </p>

            </div>


            <!-- Contact Box -->

            <div class="contact-box">
                <!-- Contact Form -->

                <div class="contact-form">

                    <h3>
                        Send Us a Message
                    </h3>

                    <form action="send-mail.php" method="POST">


                        <!-- Name + Contact -->

                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label class="form-label">
                                        Full Name
                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        placeholder="Enter your name"
                                        required>

                                </div>

                            </div>


                            <div class="col-md-4">

                                <div class="form-group">

                                    <label class="form-label">
                                        Contact Number
                                    </label>

                                    <input
                                        type="tel"
                                        name="contact"
                                        class="form-control"
                                        placeholder="Enter your contact number"
                                        required>

                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group">

                                    <label class="form-label">
                                        Email Address
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter your email address"
                                        required>

                                </div>
                            </div>


                        </div>


                        <!-- Email -->



                        <!-- Services -->

                        <div class="form-group">

                            <label class="form-label">
                                Services
                            </label>

                            <select
                                name="service"
                                class="form-select"
                                required>

                                <option value="" selected disabled>
                                    Select a service
                                </option>

                                <option value="workplace-safety">
                                    Workplace Safety Solutions
                                </option>

                                <option value="risk-assessment">
                                    Risk Assessment
                                </option>

                                <option value="health-safety">
                                    Health & Safety Consultancy
                                </option>

                                <option value="safety-training">
                                    Safety Training
                                </option>

                                <option value="fire-safety">
                                    Fire Safety
                                </option>

                                <option value="other">
                                    Other
                                </option>

                            </select>

                        </div>


                        <!-- Message -->

                        <div class="form-group">

                            <label class="form-label">
                                Message
                            </label>

                            <textarea
                                name="message"
                                class="form-control"
                                placeholder="Tell us how we can help..."
                                required></textarea>

                        </div>


                        <!-- Submit -->

                        <button
                            type="submit"
                            class="submit-btn">
                            Send Message
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>

                    </form>

                </div>

            </div>


        </div>

    </section>

</body>

</html>