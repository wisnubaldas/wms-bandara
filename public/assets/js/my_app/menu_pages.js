function menuTree() {
    return {
        tree: [],
        init() {
            fetch('/api/menus/')
                .then(response => response.json())
                .then(data => {
                    let map = [];
                    // Create a map with ID as the key and children array
                    data.forEach(item => {
                        map[item.id] = { ...item, children: [] };
                    });

                    // Iterate over the data again to establish parent-child relationships
                    data.forEach(item => {
                        //- console.log("cibay",item)
                        if (item.parent_id == "0") {
                            // Top-level items (no parent)
                            this.tree.push(map[item.id]);
                        } else {
                            // Items with a parent, add to the parent's children
                            if (map[item.parent_id] && typeof map[item.parent_id] !== 'undefined') {
                                map[item.parent_id].children.push(map[item.id]);
                            }
                        }
                    });
                })
                .catch(error => console.error('Error fetching menu data:', error));
        },
    }
}
function detail_menu(e) {
    return {
        pageTemplate: [],
        init() {
            const uri = '/api/menus/detail/' + e;
            fetch(uri)
                .then(response => response.json())
                .then(data => {
                    if(data.lenght > 0){
                       $store.childMenuShared.updateData(data)
                    }
                })
        }
    }
}
document.addEventListener('alpine:init', () => {
    // Define a store named "sharedData"
    Alpine.store('childMenuShared', {
        menuChild:[],
        updateData(data) {
            this.menuChild = data;
        }
    });
});
// function belekok() {
//     const myHeaders = new Headers();
//     myHeaders.append("Access-Control-Allow-Origin", "*");
//     myHeaders.append("User-Agent", "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:132.0) Gecko/20100101 Firefox/132.0");

//     const requestOptions = {
//         method: "GET",
//         headers: myHeaders,
//         redirect: "follow",
//     };

//     fetch("https://stoic.tekloon.net/stoic-quote", requestOptions)
//         .then((response) => response.text())
//         .then((result) => console.log(result))
//         .catch((error) => console.error(error));
// }
//     belekok()

// setInterval(function () {
//     belekok()
// }, 5000); //5 seconds
