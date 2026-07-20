<!DOCTYPE html>
<html>
<head>
    <title>Navbar Example</title>
</head>

<body>

    <nav style="
        background-color: #333;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    ">
        <div style="
            color: white;
            font-size: 24px;
            font-weight: bold;
        ">
            MyLogo
        </div>

        <ul style="
            list-style: none;
            display: flex;
            gap: 25px;
            margin: 0;
            padding: 0;
        ">
            <li>
                <a href="#" style="
                    color: white;
                    text-decoration: none;
                    font-size: 18px;
                ">
                    Home
                </a>
            </li>

            <li>
                <a href="#" style="
                    color: white;
                    text-decoration: none;
                    font-size: 18px;
                ">
                    About
                </a>
            </li>

            <li>
                <a href="#" style="
                    color: white;
                    text-decoration: none;
                    font-size: 18px;
                ">
                    Services
                </a>
            </li>

            <li>
                <a href="#" style="
                    color: white;
                    text-decoration: none;
                    font-size: 18px;
                ">
                    {{$name}}
                </a>
            </li>
        </ul>
    </nav>

</body>
</html>