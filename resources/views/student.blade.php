<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data List</title>

    <style>
        body {
            margin: 0;
            padding: 40px 20px;
            font-family: Arial, sans-serif;
            background-color: #f4f7fb;
        }

        h1 {
            text-align: center;
            color: #1f2937;
            margin-bottom: 30px;
        }

        .student-list {
            max-width: 700px;
            margin: auto;
            padding: 0;
            list-style: none;
        }

        .student-card {
            margin-bottom: 15px;
            padding: 20px;
            background-color: white;
            border-left: 5px solid #2563eb;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .student-card:hover {
            transform: translateY(-3px);
            transition: 0.3s;
        }

        .student-details {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .student-details li {
            padding: 7px 0;
            color: #4b5563;
            border-bottom: 1px solid #eeeeee;
        }

        .student-details li:last-child {
            border-bottom: none;
        }

        .student-details strong {
            display: inline-block;
            width: 80px;
            color: #111827;
        }
    </style>
</head>

<body>

<h1>Student Data List</h1>

<ul class="student-list">
    @foreach($students as $student)
        <li class="student-card">
            <ul class="student-details">
                <li>
                    <strong>Name:</strong>
                    {{ $student->name }}
                </li>

                <li>
                    <strong>Email:</strong>
                    {{ $student->email }}
                </li>

                <li>
                    <strong>City:</strong>
                    {{ $student->city }}
                </li>
            </ul>
        </li>
    @endforeach
</ul>

</body>
</html>