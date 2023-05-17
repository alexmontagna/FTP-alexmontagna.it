// A simple function to fetch data from an API
function fetchData(url) {
    return fetch(url).then((response) => {
        if (!response.ok) {
            throw new Error(`Error: ${response.status}`);
        }
        return response.json();
    });
}

// Fetch data using the function and a sample API
// const url = 'https://jsonplaceholder.typicode.com/todos/1';
const url = "https://alexmontagna.it/fakedata/?id=1";

// Using Promise.resolve().then() with the fetchData function
Promise.resolve(fetchData(url))
    .then((result) => {
        console.log(result);
    })
    .catch((error) => {
        console.error("An error occurred:", error);
    });
