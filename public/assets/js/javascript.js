(function readyJS(win, doc) {
    let btn = doc.querySelector("#btn-excluir");


    async function deleteAutor() {
        let opt = doc.querySelector("#opt-autor");
        opt.getAttribute("value");
        if ((opt.value) != "") {
            let response = await fetch("http://127.0.0.1:8000/autor/delete/" + opt.value);
            if (response.ok) {
                alert("excluido");
            } else {
                alert("HTTP-Error: " + response.status);
            }
        } else alert("selecione um autor para exclui-lo");
    }


    btn.addEventListener("click", deleteAutor, false)
})(window, document);