$(document).ready(function () {

  

// Inicio da Função tipo de contato
var rowIdx = 0;

// jQuery button click event to add a row.
$('#addBtn').on('click', function () {

	// Adding a row inside the tbody.
	$('#tbody').append(`<tr id="R${++rowIdx}">
                <td class="text-center">
                 <select name="" class="form-control">
                      <option value="">Selecione uma opção</option>
                     
                </select>
                </td>
		<td class="row-index text-center">
                <input type="text" class="form-control focus" name="" placeholder="Informações do contato">
                </td>
		<td class="text-center">
			<button class="btn btn-danger remove"
			type="button">Remover campo</button>
		</td>
		</tr>`);
});
// 
// 

// jQuery button click event to remove a row
$('#tbody').on('click', '.remove', function () {

	
	var child = $(this).closest('tr').nextAll();
	child.each(function () {
		
		// Getting <tr> id.
		var id = $(this).attr('id');

		// Getting the <p> inside the .row-index class.
		var idx = $(this).children('.row-index').children('p');

		// Gets the row number from <tr> id.
		var dig = parseInt(id.substring(1));

		// Modifying row index.
		idx.html(`Row ${dig - 1}`);

		// Modifying row id.
		$(this).attr('id', `R${dig - 1}`);
	});

	// Removing the current row.
	$(this).closest('tr').remove();

	// Decreasing the total number of rows by 1.
	rowIdx--;
});








//
});