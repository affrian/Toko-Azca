<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body onload='addItem()'>
	<strong>Input:</strong> Harga, Qty, Discount
	<div id='containerBox'></div>
	<button onclick="addItem()">Tambah Item</button>



	<script>
		


			let container	= document.getElementById('containerBox'),
			div 		= document.createElement('div'),
			input		= document.createElement('input'),
			buttonDel	= document.createElement('button'),
			subtotalCtn	= document.createElement('span'),
			inputHarga	= input.cloneNode(),
			inputQty	= input.cloneNode(),
			inputDiskon	= input.cloneNode(),
			subtotal	= input.cloneNode(),
			newItem;
		
		
		subtotalCtn.textContent = 'Subtotal:';
		subtotal.setAttribute('disabled', '');
		subtotalCtn.appendChild(subtotal);
		
		inputHarga.placeholder = 'Harga';
		inputQty.placeholder = 'Qty';
		inputDiskon.placeholder = 'Discount';
		
		inputHarga.name = 'harga[]';
		inputQty.name = 'qty[]';
		inputDiskon.name = 'discount[]';
		
		inputHarga.type = 'number';
		inputQty.type = 'number';
		inputDiskon.type = 'number';
		
		buttonDel.textContent = 'Hapus';
		buttonDel.setAttribute('onclick', 'hapusItem(this.parentNode)');
		inputHarga.setAttribute('onkeyup', 'onType(this)');
		inputQty.setAttribute('onkeyup', 'onType(this)');
		inputDiskon.setAttribute('onkeyup', 'onType(this)');
		
		function addItem() {
			if (!container.children.length) {
				div.className = ('item-0');
				div.appendChild(inputHarga);
				div.appendChild(inputQty);
				div.appendChild(inputDiskon);
				div.appendChild(subtotalCtn);
				div.appendChild(buttonDel);
				container.appendChild(div);
			} else {
				newItem = container.children[container.children.length-1].cloneNode();
				newItem.className = newItem.className.replace(newItem.className.split('item-')[1], Number(newItem.className.split('item-')[1])+1);
				newItem.innerHTML = container.children[0].innerHTML;
				for (i=0; i<newItem.length; i++) {
					if (newItem.children[i].value) {
						newItem.children[i].value = '';
					}
				}
				container.appendChild(newItem);
			}
		}
		
		function hapusItem(el) {
			el.parentNode.removeChild(el);
		}
		
		function onType(el) {
			var parentNo	= Number(el.parentNode.className.split('item-')[1]),
				harga		= el.parentNode.children[0].value,
				qty			= el.parentNode.children[1].value,
				discount	= el.parentNode.children[2].value;
					
			if (harga && qty) {
				el.parentNode.children[3].children[0].value = harga*qty;
				
				if (discount) {
					el.parentNode.children[3].children[0].value -= discount;
				}
			}
		}
	</script>
</body>
</html>