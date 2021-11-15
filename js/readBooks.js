/*(() => {
    const form = document.getElementById("form");
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        validacion();
        const xhr = new XMLHttpRequest();
        fetch('../data/MOCK_DATA.json').then(response=>response.json()
        ).then(data=>console.log(data));

        fetch('../php/server.php').then(response=>console.log(response));
    });
})();
*/