<a href=<?= $this->Url->Build('/')?>> Home </a>/ JS Table <br><br>

<table id="records_table" class="table table-bordered">
	<thead>
		<tr>
		<th><center><button id="addbtn" class="btn btn-primary">Add</button></center></th>
		<th>Description</th>
		<th>Quantity</th>
		<th>Unit Price</th>
		</tr>
	</thead>
	<tbody>
	<tr id="1">
		<td></td>
		<td id="description">Description</td>
		<td id="quantity">Quantity</td>
		<td id="price">Price</td>
	<tr>
	</tbody>
</table>

<Script>
	
$('document').ready(function(){

	$('td').on('click', function() {
	var trval = $(this).parent('tr').attr('id');
    var tdtext = $(this).attr('id');
    var $this = $(this);
    var $input = $('<textarea>', {
        value: $this.text(),
        type: 'text',
        name: 'data[1]['+tdtext+']',
        blur: function() {
           $this.text(this.value);
        },
        keypress: function(e) {
           if (e.which === 13) $input.blur();
        }
    }).appendTo( $this.empty() ).focus();
	});

	function tbl_click(){
	$('td').on('click', function() {
	var trval = $(this).parent('tr').attr('id');
    var tdtext = $(this).attr('id');
    var $this = $(this);
    var $input = $('<textarea>', {
        value: $this.text(),
        type: 'text',
        name: 'data[1]['+tdtext+']',
        blur: function() {
           $this.text(this.value);
        },
        keypress: function(e) {
           if (e.which === 13) $input.blur();
        }
    }).appendTo( $this.empty() ).focus();
	});

	}

	$('#addbtn').on('click',function(){
		var trid = $('#records_table tbody tr').attr('id');
	
		table_add();

	});

	function table_add(){

		var html = '';
		html+= '<tr>';
		html+= '<td></td>';
		html+= '<td id="description">Description</td>';
		html+= '<td id="quantity">Quantity</td>';
		html+= '<td id="price">Price</td>';
		html+= '</tr>';

		$('#records_table').append(html);

		tbl_click();
	}
		
	

});

</Script>