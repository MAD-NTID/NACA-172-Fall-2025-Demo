function convertToFahrenheit(celsius) 
{
    // Converting Celsius to Fahrenheit
    let fahrenheit = (celsius * (9/5)) + 32;

    return fahrenheit;
}

function convertToCelsius(fahrenheit)
{
    let celsius = (fahrenheit - 32) * (5 / 9);

    return celsius;
}

console.log(`30 deg celsius is ${convertToFahrenheit(30)} deg Fahrenheit`);
console.log(`86 deg Fahrenheit is ${convertToCelsius(86)} deg Celsius`);