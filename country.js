document.addEventListener('DOMContentLoaded', () => {

    const selectDrop = document.querySelector('#country');
    fetch('https://restcountries.com/v3.1/all').then(res => {
        return res.json();
    }).then(countries => {
        let output = "";
        countries.sort(function(c1, c2) {
            return c1.name.common.localeCompare(c2.name.common);
        })
        countries.forEach(country => {
            output += `<option>${country.name.common}</option>`;
        });
        selectDrop.innerHTML = output;
    }).catch(err => {
        console.log(err);
    })
});