<div class="row">
	<div class="col-md-12">
		<form action="{{ route('post.update', $post->id ) }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}
			<div class="col-md-12">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $post->judul }}">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="category_id">
                        <option value="" holder>Pilih Kategori</option>
                        @foreach($category as $result)
                        <option value="{{ $result->id }}"
                        @if($result->id == $post->category_id)
                            selected
                        @endif
                            >{{  $result->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih Tags</label>
                    <select class="form-control select2" multiple="" name="tags[]">
                        @foreach($tags as $tag)
                        <option value="{{ $tag->id }}"
                        @foreach($post->tags as $value)
                            @if($tag->id == $value->id)
                            selected
                            @endif
                        @endforeach       	
                            >{{ $tag->name }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Konten</label>
                    <textarea class="form-control" name="content" id="content">{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <label>Thumbnail</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
			</div>
		</form>
	</div>
</div>