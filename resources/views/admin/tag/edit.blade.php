<div class="row">
	<div class="col-md-12">
		<form method="post" action="{{ route('tag.update', $tags->id ) }}">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}
			<div class="col-md-12">
    			<div class="form-group">
    				<label>Tag :</label>
					<input type="text" name="name" class="form-control" required="required" placeholder="Masukkan tag..." value="{{ $tags->name }}">
    			</div>
			</div>
		</form>
	</div>
</div>