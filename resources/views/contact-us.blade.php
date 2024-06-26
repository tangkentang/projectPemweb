<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iRepair - Contact Us</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            animation: fadeIn 1s ease-in-out;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            animation: slideDown 1s ease-in-out;
        }
        .navbar a {
            text-decoration: none;
            color: black;
            margin: 0 10px;
        }
        .navbar a.active {
            font-weight: bold;
        }
        .navbar .tittle {
            font-size: 20px;
            color: black;
            font-weight: bold;
            margin-top: 0;
        }
        .container {
            text-align: center;
            padding: 20px;
            animation: fadeInUp 1.5s ease-in-out;
        }
        .contact-info, .contact-form {
            width: 45%;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 8px;
            background-color: white;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .contact-info:hover, .contact-form:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .contact-info {
            background-color: #333;
            color: white;
            text-align: left;
            animation: fadeInLeft 1.5s ease-in-out;
        }
        .contact-info p, .contact-info a {
            color: white;
        }
        .contact-info a {
            text-decoration: none;
        }
        .contact-info .social-icons img {
            width: 24px;
            height: auto;
            margin: 0 5px;
            transition: transform 0.3s;
        }
        .contact-info .social-icons img:hover {
            transform: scale(1.2);
        }
        .contact-form {
            text-align: left;
            animation: fadeInRight 1.5s ease-in-out;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
            transition: box-shadow 0.3s;
        }
        .contact-form input:focus, .contact-form textarea:focus {
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .contact-form button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: black;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .contact-form button:hover {
            background-color: #333;
        }
        .contact-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .map {
            height: 400px;
            width: 100%;
            margin-top: 20px;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideDown {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="tittle">
            <a href="/">iRepair</a>
        </div>
        <a href="/">Home</a>
        <a href="{{ route('service-iphone') }}">Service iPhone</a>
        <a href="{{ route('contact-us') }}" class="active">Contact Us</a>
        <a href="/track-order">Tracking Order</a>
    </div>
    <div class="container">
        <h2>Contact Us</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <p>Any question or remarks? Just write us a message!</p>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p>Say something to start a chat!</p>
                <p><strong>Phone:</strong> +62 812 6778 3531</p>
                <p><strong>Email:</strong> hernandodtha@student.ub.ac.id</p>
                <p><strong>Address:</strong> Fakultas Ilmu Komputer, Universitas Brawijaya</p>
                <div class="social-icons">
                    <a href="#"><img src="{{ asset('images/twitter.png') }}" alt="Twitter"></a>
                    <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
                    <a href="#"><img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn"></a>
                    <p>Our Location</p>
                </div>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4350635499263!2d112.61242917575228!3d-7.953911729252521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827994694b27%3A0x4eb4fed2fe1b7977!2sGedung%20A%20Fakultas%20Ilmu%20Komputer%20Universitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1717105068542!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-form">
                <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" required>
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <label for="noPhone">Phone Number</label>
                    <input type="text" id="noPhone" name="noPhone" required>
                    <label for="msg">Message</label>
    <textarea id="msg" name="msg" rows="4" required></textarea>
    <label for="attachment">Attachment</label>
    <input type="file" id="attachment" name="attachment" accept=".jpg,.jpeg,.png,.pdf">
    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
