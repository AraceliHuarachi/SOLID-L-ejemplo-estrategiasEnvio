<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Shipping Strategies</title>
</head>
<body>
    <h1>Test Shipping Strategies</h1>
    
    <form action="/shipping-test" method="POST">
        @csrf
        <label for="delivery_type">Delivery type:</label>
        <select name="delivery_type" id="delivery_type" required>
            <option value="home" {{ old('delivery_type') === 'home' ? 'selected' : '' }}>Home delivery</option>
            <option value="pickup" {{ old('delivery_type') === 'pickup' ? 'selected' : '' }}>Pick up in store</option>
        </select>
        <br><br>

        <label for="distance">Distance (km):</label>
        <input type="number" name="distance" id="distance" value="{{ old('distance', 10) }}" required>
        <br><br>

        <label for="weight">Weight (kg):</label>
        <input type="number" name="weight" id="weight" value="{{ old('weight', 5) }}" required>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    @if (isset($cost) && isset($time))
        <h2>Results:</h2>
        <p><strong>Delivery type:</strong> {{ $delivery_type }}</p>
        <p><strong>Distance:</strong> {{ $distance }} km</p>
        <p><strong>Weight:</strong> {{ $weight }} kg</p>
        <p><strong>Cost:</strong> ${{ $cost }}</p>
        <p><strong>Estimated time:</strong> {{ $time }} hours</p>
    @endif
</body>
</html>
