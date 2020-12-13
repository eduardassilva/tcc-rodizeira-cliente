function CreateDivItemCardapio(nameItem, descItem, tagString, itemID){
    var divItem = document.createElement('div');
    var divCheckbox = document.createElement('div');
    var inputCheckbox = document.createElement('input');
    var divImg = document.createElement('div');
    var img = document.createElement('img');
    var divName = document.createElement('div');
    var pName = document.createElement('p');
    var divDesc = document.createElement('div');
    var pDesc = document.createElement('p');
    var divTags = document.createElement('div');
    var labelTags = document.createElement('label');

    divItem.className = 'cardapioItemDiv';
    divCheckbox.className = 'cardapioPedir';
    inputCheckbox.className = 'checkboxPedir';
    divImg.className = 'cardapioImg';
    img.className = 'imgCardapio';
    divName.className = 'cardapioName';
    divDesc.className = 'cardapioDescDiv';
    divTags.className = 'cardapioTag';

    inputCheckbox.id = itemID;
    inputCheckbox.type = 'checkbox';

    img.src = 'img/meatIcon.png';

    pName.innerHTML = nameItem;
    pDesc.innerHTML = descItem;
    labelTags.innerHTML = tagString.replaceAll('~', '\n');

    document.getElementById('itemsCardapio').appendChild(divItem);
    divItem.appendChild(divCheckbox);
    divCheckbox.appendChild(inputCheckbox);
    divItem.appendChild(divImg);
    divImg.appendChild(img);
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