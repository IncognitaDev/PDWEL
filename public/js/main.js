function cleanFunctions(event) {
    event.preventDefault();

    document.getElementById("description").value = null;
    document.getElementById("category").value = null;
}

function confirmDel(event) {
    event.preventDefault();

    let token = document.getElementsByName("_token")[0].value;
    if (confirm("Deseja mesmo apagar?")) {
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

const handleEdit = (event) => {
    const id = event.target.id;

    const edit = document.querySelector(`#id-${id}`);

    const a = edit.querySelectorAll(".hidden");
    const d = edit.querySelectorAll(".static-field");
    const editbtn = edit.querySelector(".edit");

    editbtn.classList.add("hidden");

    a.forEach((b) => {
        b.classList.remove("hidden");
    });
    d.forEach((b) => {
        b.classList.add("hidden");
    });
};

window.onload = () => {
    if (document.querySelector(".js-del")) {
        const btns = document.querySelectorAll(".js-del");

        btns.forEach((btn) => {
            btn.addEventListener("click", confirmDel);
        });
    }
    if (document.querySelector(".edit")) {
        const edit = document.querySelectorAll(".edit");

        for (let i = 0; i < edit.length; i++) {
            edit[i].addEventListener("click", handleEdit);
        }
    }
    if (document.querySelector("#edit #status")) {
        const status = document.querySelectorAll("#edit #status");

        for (let i = 0; i < status.length; i++) {
            status[i].addEventListener("change", handleStatusChange);
        }
    }
};
