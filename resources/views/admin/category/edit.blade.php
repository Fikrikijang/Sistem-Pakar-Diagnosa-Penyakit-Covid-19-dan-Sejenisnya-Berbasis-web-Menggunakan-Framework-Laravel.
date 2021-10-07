<div class="row">
	<div class="col-md-12">
		<form method="post" action="{{ route('category.update' , $category->id ) }}">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}
			<div class="col-md-12">
    			<div class="form-group">
    				<label>Kategori :</label>
					<input type="text" name="name" class="form-control" required="required" placeholder="Masukkan kategori..." value="{{ $category->name }}">
    			</div>
			</div>
		</form>
	</div>
</div>