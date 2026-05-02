<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Weather API</title>

<style>
body {
    font-family: Arial;
    background: linear-gradient(135deg, #ffe4f1, #ffd6ec);
    text-align: center;
    padding: 40px;
}

button {
    background: #ff4fa3;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 12px;
    cursor: pointer;
    margin: 10px;
}

button:hover {
    background: #ff2f91;
}

pre {
    background: white;
    padding: 20px;
    border-radius: 12px;
    width: 60%;
    margin: 20px auto;
}
</style>
</head>

<body>

<h1>Weather API</h1>

<button onclick="weather()">Get Weather</button>

<pre id="out"></pre>

<script>
async function weather() {
    const res = await fetch(
        'https://api.open-meteo.com/v1/forecast?latitude=59.93&longitude=30.31&current_weather=true'
    );
    const data = await res.json();
    document.getElementById('out').textContent =
        JSON.stringify(data.current_weather, null, 2);
}
</script>

</body>
</html>
