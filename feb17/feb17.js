let info = [];
let modIndex = 0;
const style = {
    getTotal: `
        position: absolute;
        right: 20px;
        top: 9px;
    `,
    showTotal: `
        margin-left: 12px;
        color: white;
    `
}

let start = () => {
    var display = document.getElementById('show');
    display.innerHTML = `
        <input type="text" id="name">
        <input type="number" id="quantity">
        <input type="number" id="cost">
        <button id="add_item">Add item</button>
        <button id="display_item">Display item</button>
    `;

    document.getElementById('add_item').addEventListener('click',() => {
        var quantityr = document.getElementById('quantity')
        var cost = document.getElementById('cost')
        var name = document.getElementById('name')
        info.push({
            name: name.value,
            cost: cost.value,
            quantity: quantityr.value,
        })
        start();
    });

    let showTable = () => {
        
        if (info.length > 0) {

            let row = ``;
            var arrayTotal = [];

            info.map((e) => {
                let maths = e.quantity * e.cost;
                arrayTotal.push(maths);
                row += ` 
                    <tr>
                        <td>`+e.name+`</td>
                        <td>`+e.quantity+`</td>
                        <td>$`+e.cost+`</td>
                        <td>$`+maths+`</td>
                        <td>
                            <button value="`+info.indexOf(e)+`" class="edit">Edit</button>
                            <button value="`+info.indexOf(e)+`" class="remove">Remove</button>
                        </td>
                    </tr>
                `;
            })
            let table = `
            <div>
                <div style="`+style.getTotal+`">
                    <button id="getArrayTotal">Get Total</button><span style="`+style.showTotal+`" id="sum"></span>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Cost Per Item</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        `+row+`
                    </tbody>
                </table>
            <div>`;

            document.getElementById('table').innerHTML = table;
            document.getElementById('getArrayTotal').addEventListener('click', () => {
                let sum = 0;
                arrayTotal.forEach(element => {
                    sum = sum + element;
                });
                document.getElementById('sum').innerText = "$"+sum;
            });
        }else{
            document.getElementById('table').innerHTML = ``;
        }
        
        let edits = document.getElementsByClassName('edit')
        if (edits.length > 0) {
            for (let index = 0; index < edits.length; index++) {
                const element = edits[index];
                element.addEventListener('click', (e) => {
                    modIndex = e.target.value
                    let ele = e.target.parentElement.parentElement.children
                    console.log(ele)
                    let ig = ['name','quantity','cost']
                    for (let index = 0; index < ele.length - 2; index++) {
                        const element = ele[index];
                        if (index == 0) {element.innerHTML = `<input type="text" value="`+element.innerText+`" id="edit_`+ig[index]+`">`}
                        else {element.innerHTML = `<input type="number" value="`+element.innerText+`" id="edit_`+ig[index]+`">`}
                    }
                    e.target.innerText = 'Save';
                    e.target.id = 'save'
                    e.target.removeAttribute('class')
                    
                    var edit_name = document.getElementById('edit_name')
                    var edit_quantity = document.getElementById('edit_quantity')
                    var edit_cost = document.getElementById('edit_cost')
                    let save = document.getElementById('save');
                    save.addEventListener('click',() => {
                            
                        info[modIndex].name = edit_name.value;
                        info[modIndex].quantity = edit_quantity.value;
                        info[modIndex].cost = edit_cost.value;
                        console.log(edit_name.value)
                        showTable();
                        start();
                    });
                })
            }
        }

        let remove = document.getElementsByClassName('remove')
        if (remove.length > 0) {
            for (let index = 0; index < remove.length; index++) {
                const element = remove[index];
                element.addEventListener('click', (e) => {
                    info.splice(e.target.value,1);
                    showTable()
                    // start()
                })
            }
        }
    }

    document.getElementById('display_item').addEventListener('click',() => {
        
        showTable();
    });

}
start();
