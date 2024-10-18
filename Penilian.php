<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .status {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #e9ecef;
            text-align: center;
            font-weight: bold;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #d1e7dd;
            border: 1px solid #c3e6cb;
            border-radius: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Penilaian Mahasiswa</h1>
        <form method="post" action="">
            <div class="input-group">
                <label for="nilai1">Nilai Mata Kuliah 1:</label>
                <input type="number" id="nilai1" name="nilai1" required>
            </div>

            <div class="input-group">
                <label for="nilai2">Nilai Mata Kuliah 2:</label>
                <input type="number" id="nilai2" name="nilai2" required>
            </div>

            <div class="input-group">
                <label for="nilai3">Nilai Mata Kuliah 3:</label>
                <input type="number" id="nilai3" name="nilai3" required>
            </div>

            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai1 = htmlspecialchars($_POST['nilai1']);
            $nilai2 = htmlspecialchars($_POST['nilai2']);
            $nilai3 = htmlspecialchars($_POST['nilai3']);

            $rataRata = ($nilai1 + $nilai2 + $nilai3) / 3;

            echo "<div class='result'>";
            echo "<h2>Hasil Penilaian:</h2>";
            echo "Nilai Rata-rata: " . number_format($rataRata, 2) . "<br>";
            echo "<div class='status'>";
            echo "Status: " . ($rataRata >= 60 ? "<span style='color: green;'>Lulus</span>" : "<span style='color: red;'>Tidak Lulus</span>");
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
