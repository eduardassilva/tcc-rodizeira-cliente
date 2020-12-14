function CreateDivItemCardapio(nameItem, descItem, tagString, itemID){

    alert('cardapio1 - ' + nameItem + '//' + descItem + '//' + tagString + '//' + itemID);

    var divItem = document.createElement('div');
    var divCheckbox = document.createElement('div');
    var inputCheckbox = document.createElement('input');
    var divName = document.createElement('div');
    var pName = document.createElement('p');
    var divDesc = document.createElement('div');
    var pDesc = document.createElement('p');
    var divTags = document.createElement('div');
    var labelTags = document.createElement('label');
    alert('cardapio2');
    divItem.className = 'cardapioItemDiv';
    divCheckbox.className = 'cardapioPedir';
    inputCheckbox.className = 'checkboxPedir';
    divName.className = 'cardapioName';
    divDesc.className = 'cardapioDescDiv';
    divTags.className = 'cardapioTag';
    alert('cardapio3');
    inputCheckbox.id = itemID;
    inputCheckbox.type = 'checkbox';
    alert('cardapio4');
    pName.innerHTML = nameItem;
    pDesc.innerHTML = descItem;
    labelTags.innerHTML = tagString.replaceAll('~', '\n');
    alert('cardapio5');
    document.getElementById('itemsCardapio').appendChild(divItem);
    divItem.appendChild(divCheckbox);
    divCheckbox.appendChild(inputCheckbox);
    divItem.appendChild(divName);
    divName.appendChild(pName);
    divItem.appendChild(divDesc);
    divDesc.appendChild(pDesc);
    divItem.appendChild(divTags);
    divTags.appendChild(labelTags);
    alert('cardapio6');
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