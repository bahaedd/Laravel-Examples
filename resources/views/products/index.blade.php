

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Filter Example | CodeChief') }}</div>

	    		<form action="{{ route('filter') }}" method="GET" style="margin-top: 20px;">
    			<select name="price_id" id="input">
    				<option value="0">Select Price</option>
    				@foreach (\App\Models\Price::select('id','price')->get() as $price)
    					<option value="{{ $price->id }}" {{ $price->id == $selected_id['price_id'] ? 'selected' : '' }}>
    					{{ $price['price'] }}
    				    </option>
    				@endforeach
    			</select>
    			<select name="color_id" id="input">
    				<option value="0">Select Color</option>
    				@foreach (\App\Models\Color::select('id','name')->get() as $color)
					<option value="{{ $color->id }}" {{ $color->id == $selected_id['color_id'] ? 'selected' : '' }}>
					{{ $color['name'] }}
				    </option>
				    @endforeach
    			</select>
	    		<input type="submit" class="btn btn-danger btn-sm" value="Filter">
	    		</form>


	    		<table class="table table-stripped">
	    			<thead>
	    				<tr>
	    					<th>No</th>
	    					<th>Name</th>
	    					<th>Price</th>
	    					<th>Color</th>
	    				</tr>
	    			</thead>
	    			<tbody>
	    				@forelse($products as $product )
	    				<tr>
	    					<td>{{ $loop->index+1 }}</td>
	    					<td>{{ $product->name }}</td>
	    					<td>{{ $product->price->price }}</td>
	    					<td>{{ $product->color->name }}</td>
	    				</tr>
	    				@empty
	    				<p> No data Found </p>
	    				@endforelse

	    			</tbody>
	    		</table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
