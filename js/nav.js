function run_first() {
    if(sessionStorage.item_id) {
        document.getElementById(sessionStorage.item_id.toString()).classList.add("active");
    }
    else {
        document.getElementById("0").classList.add("active");
    }
}

function nav_item_selected(item_id) {
    for(i = 0; i < 7; i++) {
        document.getElementById(i.toString()).classList.remove("active");
    }
    document.getElementById(item_id.toString()).classList.add("active");

    //store item_id in sessionStorage
    sessionStorage.item_id = item_id;
}

function run_first() {
    if(sessionStorage.item_id) {
        document.getElementById(sessionStorage.item_id.toString()).classList.add("active");
    }
    else {
        document.getElementById("0").classList.add("active");
    }
}
