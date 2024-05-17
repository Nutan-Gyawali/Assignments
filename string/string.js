

function search() {
    let textSearch = document.getElementById("texte").value;
    console.log(textSearch);

    let para = document.getElementById("para");

    let pattern = new RegExp(`${textSearch}`, "gi");
    textSearch = textSearch.replace(/[.*?^${}()|[\]\\}]/g, "\\$&");


    para.innerHTML = para.textContent.replace(pattern, match => `<mark>${match}</mark>`);



}

