<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Radio Button Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Form with Radio Button Table</h1>
    <form action="process.php" method="post">
        <table>
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Option 5</th>
                    <th>Option 6</th>
                    <th>Option 7</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        What is your favorite color?
                        <input type="hidden" name="question1" value="What is your favorite color?">
                    </td>
                    <td><input type="radio" name="option1" value="1"></td>
                    <td><input type="radio" name="option1" value="2"></td>
                    <td><input type="radio" name="option1" value="3"></td>
                    <td><input type="radio" name="option1" value="4"></td>
                    <td><input type="radio" name="option1" value="5"></td>
                    <td><input type="radio" name="option1" value="6"></td>
                    <td><input type="radio" name="option1" value="7"></td>
                </tr>
                <!-- Tambahkan baris lain dengan pertanyaan berbeda sesuai kebutuhan -->
                <tr>
                    <td>
                        How often do you exercise?
                        <input type="hidden" name="question2" value="How often do you exercise?">
                    </td>
                    <td><input type="radio" name="option2" value="1"></td>
                    <td><input type="radio" name="option2" value="2"></td>
                    <td><input type="radio" name="option2" value="3"></td>
                    <td><input type="radio" name="option2" value="4"></td>
                    <td><input type="radio" name="option2" value="5"></td>
                    <td><input type="radio" name="option2" value="6"></td>
                    <td><input type="radio" name="option2" value="7"></td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
