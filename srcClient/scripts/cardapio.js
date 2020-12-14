function CreateDivItemCardapio(nameItem, descItem, tagString, itemID){
    var divItem = document.createElement('div');
    var divCheckbox = document.createElement('div');
    var inputCheckbox = document.createElement('input');
    var divName = document.createElement('div');
    var pName = document.createElement('p');
    var divDesc = document.createElement('div');
    var pDesc = document.createElement('p');
    var divTags = document.createElement('div');
    var labelTags = document.createElement('label');
    divItem.className = 'cardapioItemDiv';
    divCheckbox.className = 'cardapioPedir';
    inputCheckbox.className = 'checkboxPedir';
    divName.className = 'cardapioName';
    divDesc.className = 'cardapioDescDiv';
    divTags.className = 'cardapioTag';
    inputCheckbox.id = itemID;
    inputCheckbox.type = 'checkbox';
    pName.innerHTML = nameItem;
    pDesc.innerHTML = descItem;
    labelTags.id = tagString;
    document.getElementById('itemsCardapio').appendChild(divItem);
    divItem.appendChild(divCheckbox);
    divCheckbox.appendChild(inputCheckbox);
    divItem.appendChild(divName);
    divName.appendChild(pName);
    divItem.appendChild(divDesc);
    divDesc.appendChild(pDesc);
    divItem.appendChild(divTags);
    divTags.appendChild(labelTags);
}

function PedirCardapio(){
    var itensOrdered = 0;
    var selectedItems = document.getElementsByClassName('checkboxPedir');
    
    for(var i = 0; i < selectedItems.length; i++){
        if(selectedItems[i].checked){
            $.ajax({                                      
                url: '/TCC-Rodizeira/srcClient/php/insertPedido.php',       
                type: "POST",
                data: {resID: restaurant_id, itemID: selectedItems[i].id} 
            });
            
            itensOrdered++;
            selectedItems[i].checked = false;
        }
    }
    if(itensOrdered > 0){
        alert('Itens pedidos com sucesso!');
    }
}