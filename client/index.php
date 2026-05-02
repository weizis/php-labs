<!DOCTYPE html>
<html>
<body>
<button onclick="weather()">Weather</button>
<pre id="out"></pre>

<script>
async function weather() {
    const res = await fetch('https://api.open-meteo.com/v1/forecast?latitude=59.9386&longitude=30.2141&current_weather=true');
    const data = await res.json();
    document.getElementById('out').textContent =
        JSON.stringify(data.current_weather, null, 2);
}
</script>
</body>
</html>
