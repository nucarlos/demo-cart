@extends('cart.layouts.default')

@section('page')

<div class="row">

		@foreach ($products as $product)
		<div class="col-3 col-sm-3 col-lg-3">
			<div class="thumbnail">
				<div class="caption">
					<h2>{{{ $product->name }}}</h2>
					<p></p>
					<p>
						@if ($cart->find(array('id' => $product->slug)))
						<span class="btn btn-info btn-sm disabled">Add Cart</span>
						@else
						<a class="btn btn-info btn-sm" href="{{ URL::to("cart/{$product->slug}/add") }}">Add Cart</a>
						@endif

						{{-- Add to wishlist button --}}
						<span class="pull-right">
							{{-- Check if the product is on the wishlist already --}}
							@if ($wishlist->find(array('id' => $product->slug)))
								<a class="btn btn-xs tip" href="{{ URL::to("wishlist/{$product->slug}/remove") }}" title="Remove from Wishlist"><i class="glyphicon glyphicon-star"></i></a>
							@else
								<a class="btn btn-xs tip" href="{{ URL::to("wishlist/{$product->slug}/add") }}" title="Add to Wishlist"><i class="glyphicon glyphicon-star-empty"></i></a>
							@endif
						</span>
					</p>
				</div>
			</div>
		</div>
		@endforeach

</div>

{{ $products->links() }}

@stop
