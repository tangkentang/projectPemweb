<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Order - iRepair</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Existing CSS code */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            animation: fadeIn 1s ease-in-out;
        }
        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
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
        .navbar .tittle {
            font-size: 20px;
            color: black;
            font-weight: bold;
            margin-top: 0;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        h1, h2 {
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1.5s ease-in-out;
        }
        .search-bar {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeInUp 1.5s ease-in-out;
        }
        .search-bar input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            outline: none;
            transition: box-shadow 0.3s;
        }
        .search-bar input[type="text"]:focus {
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .search-bar button {
            padding: 10px 20px;
            border: none;
            background-color: #333;
            color: white;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .search-bar button:hover {
            background-color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            animation: fadeInUp 1.5s ease-in-out;
            display: none; /* Initially hide the table */
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .track-order h2 {
            margin-bottom: 20px;
        }
        .reset-button {
            margin-left: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #555;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .reset-button:hover {
            background-color: #777;
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
    <header>
        <!-- Optional Header Content -->
    </header>
    <main>
        <div class="container">
            <section class="track-order">
                <h2>Track Your Order</h2>
                <div class="search-bar">
                    <input type="text" id="search-input" placeholder="Search Your Order">
                    <button type="button" id="search-button">Search</button>
                    <button type="button" id="reset-button" class="reset-button">Reset</button>
                </div>
                <h3>Your Search</h3>
                <table id="order-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Pelanggan</th>
                            <th>Nama Layanan</th>
                            <th>Model</th>
                            <th>Estimasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem(); ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->kode }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->layanan }}</td>
                                <td>{{ $item->tipe }}</td>
                                <td>{{ $item->durasi }}</td>
                            </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->withQueryString()->links() }}
            </section>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 iRepair. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const queryParams = new URLSearchParams(window.location.search);
            const searchQuery = queryParams.get('search');
            if (searchQuery) {
                document.getElementById('order-table').style.display = 'table';
                document.getElementById('search-input').value = searchQuery;
            }
        });

        document.getElementById('search-button').addEventListener('click', function() {
            const query = document.getElementById('search-input').value;
            if (query) {
                window.location.href = `/track-order?search=${query}`;
            }
        });

        document.getElementById('reset-button').addEventListener('click', function() {
            document.getElementById('search-input').value = '';
            window.location.href = `/track-order`;
        });
    </script>
</body>
</html>
