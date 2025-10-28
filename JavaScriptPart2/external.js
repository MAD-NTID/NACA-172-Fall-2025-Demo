console.log("external script");

function runHelloWorld() {
    console.log("Hello World");
    console.log("from ");
    console.log("a function")
}

function updateHelloWorldText() {
    let h1 = document.getElementsByTagName("h1")[0];

    console.log('before overwriting h1 text', h1.innerHTML);
    h1.innerHTML = "Tired of these Hello World crap";
    console.log('after overwriting h1 text', h1.innerHTML);
}