<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftsaroNepal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 700px;
            margin: 20px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* Header Styles */
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #eee;
        }

        .header img {
            width: 140px;
            margin-bottom: 10px;
        }

        .header h1 {
            font-size: 22px;
            color: #222;
            margin: 0;
        }

        /* Content Styles */
        .content {
            padding: 20px 0;
            font-size: 16px;
            line-height: 1.7;
            color: #555;
        }

        .content p {
            margin-bottom: 15px;
        }

        .content a {
            color: #ff2953;
            font-weight: bold;
            text-decoration: none;
        }

        .content a:hover {
            text-decoration: underline;
        }

        /* Footer Styles */
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 2px solid #eee;
            font-size: 14px;
            color: #777;
        }

        .social-icons {
            margin-top: 15px;
        }

        .social-icons a {
            margin: 0 8px;
            display: inline-block;
        }

        .social-icons img {
            width: 28px;
            transition: transform 0.3s ease;
        }

        .social-icons a:hover img {
            transform: scale(1.1);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .header h1 {
                font-size: 20px;
            }

            .content {
                font-size: 14px;
            }

            .footer {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://softsaro.com/img/softsarologo.png" alt="Softsaro Logo">
            <h1>{{ $mysubject }}</h1>
        </div>

        <div class="content">
            {{-- <p>
                <b>
                    Hello {{ $subscriber->name }} ,
                </b>
            </p> --}}
            <p>
                {!! $content !!}
            </p>
        </div>

        <div class="footer">
            <p>&copy; 2025 SoftsaroNepal. All rights reserved.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/softsaronepal" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png"
                        alt="Facebook">
                </a>
                <a href="https://www.instagram.com/softsaronepal/" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
                </a>
                <a href="https://www.linkedin.com/company/softsaro/" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png"
                        alt="LinkedIn">
                </a>
                <a href="https://www.youtube.com/@softsaronepal" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.png"
                        alt="YouTube">
                </a>
                <a href="https://www.tiktok.com/@softsaronepal" target="_blank">
                    <img src="https://img.icons8.com/color/48/000000/tiktok.png" alt="TikTok">
                </a>
            </div>
        </div>
    </div>
</body>

</html>
