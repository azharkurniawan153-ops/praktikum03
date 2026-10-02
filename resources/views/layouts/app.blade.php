<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'LaporBanjir')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f8fb;
            color: #1e293b;
            min-height: 100vh;
        }

        /* NAVBAR */
        nav {
            background: linear-gradient(135deg, #075985, #0284c7);
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0,0,0,.12);
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: 800;
            text-decoration: none;
        }

        .logo span {
            color: #bae6fd;
        }

        .menu {
            display: flex;
            gap: 10px;
            list-style: none;
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 10px;
            transition: .3s;
            font-weight: 600;
        }

        .menu a:hover {
            background: rgba(255,255,255,.18);
        }

        /* CONTENT */
        main {
            width: 84%;
            max-width: 1200px;
            margin: 40px auto;
            min-height: 70vh;
        }

        .hero {
            background: linear-gradient(135deg, #0c4a6e, #0284c7);
            color: white;
            border-radius: 24px;
            padding: 45px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(2,132,199,.2);
        }

        .hero::after {
            content: "🌊";
            position: absolute;
            right: 50px;
            bottom: -15px;
            font-size: 110px;
            opacity: .18;
        }

        .hero h1 {
            font-size: 38px;
            margin-bottom: 12px;
        }

        .hero p {
            color: #e0f2fe;
            max-width: 650px;
            line-height: 1.7;
        }

        /* CARD */
        .card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(15,23,42,.07);
            margin-bottom: 25px;
        }

        .section-title {
            margin-bottom: 25px;
        }

        .section-title h2 {
            color: #075985;
            margin-bottom: 6px;
        }

        .section-title p {
            color: #64748b;
        }

        /* FORM */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .form-group input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            outline: none;
            font-size: 15px;
            transition: .3s;
        }

        .form-group input:focus {
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(2,132,199,.12);
        }

        .btn {
            display: inline-block;
            border: none;
            background: linear-gradient(135deg, #0284c7, #0369a1);
            color: white;
            padding: 14px 24px;
            border-radius: 12px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            transition: .3s;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(2,132,199,.25);
        }

        /* LAPORAN GRID */
        .laporan-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        .laporan-card {
            background: white;
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 8px 25px rgba(15,23,42,.07);
            border-top: 5px solid #0284c7;
            transition: .3s;
        }

        .laporan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(15,23,42,.12);
        }

        .laporan-icon {
            font-size: 35px;
            margin-bottom: 15px;
        }

        .laporan-card h3 {
            color: #0f172a;
            margin-bottom: 10px;
        }

        .info {
            color: #64748b;
            margin: 8px 0;
        }

        .status {
            display: inline-block;
            margin-top: 12px;
            padding: 7px 13px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 800;
        }

        .waspada {
            background: #fef3c7;
            color: #92400e;
        }

        .siaga {
            background: #ffedd5;
            color: #c2410c;
        }

        .awas {
            background: #fee2e2;
            color: #b91c1c;
        }

        /* ALERT */
        .alert {
            padding: 18px 20px;
            background: #dcfce7;
            border-left: 5px solid #16a34a;
            color: #166534;
            border-radius: 12px;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .data-box {
            display: grid;
            gap: 15px;
            margin-top: 20px;
        }

        .data-item {
            background: #f8fafc;
            padding: 16px;
            border-radius: 12px;
        }

        .data-item strong {
            display: block;
            color: #075985;
            margin-bottom: 5px;
        }

        /* FOOTER */
        footer {
            background: #082f49;
            color: #bae6fd;
            text-align: center;
            padding: 25px;
            margin-top: 50px;
        }

        footer strong {
            color: white;
        }

        @media(max-width: 700px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            .menu {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero {
                padding: 30px;
            }

            .hero h1 {
                font-size: 28px;
            }

            main {
                width: 92%;
            }
        }
    </style>
</head>

<body>

    <nav>
        <a href="{{ route('laporan.form') }}" class="logo">
             Lapor<span>Banjir</span>
        </a>

        <ul class="menu">
            <li>
                <a href="{{ route('laporan.form') }}"> Laporkan</a>
            </li>

            <li>
                <a href="{{ route('laporan.index') }}"> Daftar Laporan</a>
            </li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>
            © 2026 <strong>LaporBanjir</strong> |
            Sistem Pelaporan Banjir BPBD Kabupaten Bandung
        </p>
    </footer>

</body>
</html>