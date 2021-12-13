function cleanFunctions(event) {
    event.preventDefault();

    document.getElementById("description").value = null;
    document.getElementById("category").value = null;
}

function confirmDel(event) {
    event.preventDefault();

    let token = document.getElementsByName("_token")[0].value;
    if (confirm("Deseja mesmo apagar?")) {
        // fetch(`/${event.target.id}`, {
        //     method: "POST",
        //     headers: {
        //         "X-CSRF-TOKEN": token,
        //     },
        //     body: {
        //         _method: "DELETE",
        //     },
        // })
        //     .then(() => {
        //         console.log(event.target.id);
        //         // window.location.reload();
        //     })
        //     .catch(() => {
        //         alert("Não foi possivel excluir");
        //     });
        let ajax = new XMLHttpRequest();
        ajax.open("DELETE", event.target.id);
        ajax.setRequestHeader("X-CSRF-TOKEN", token);
        ajax.onreadystatechange = function () {
            if (ajax.readyState === 4 && ajax.status === 200) {
                window.location.href = "/";
            }
        };
        ajax.send();
    } else {
        return false;
    }
}

window.onload = () => {
    if (document.querySelector(".js-del")) {
        let btn = document.querySelectorAll(".js-del");

        for (let i = 0; i < btn.length; i++) {
            btn[i].addEventListener("click", confirmDel, false);
        }
    }
};
