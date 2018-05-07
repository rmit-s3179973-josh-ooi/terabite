@extends('layout')

@section('css')
	{!! Html::style(asset('css/website/home.css')) !!}
@endsection

@section('content')
<br>
@if(Request::is('/'))
@include('inc.showcase') <!-- for something else -->
@endif

<div class="items py-10">
  <h2 class="title">Hot Deals</h2>
  <div class="row">
    <div class="col-sm-3">
      <div class="card mb-4">
        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="" data-holder-rendered="true" >

        <div class="card-body">
          <strong class="card-text">Product Name</strong>
          <br><br>
          <strong class="card-price">$10.00</strong>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn1 btn-sm btn-outline-secondary">View</button>
              <button type="button" class="btn2 btn-sm btn-outline-secondary">Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card mb-4 box-shadow">
        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162f5da2cdf%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162f5da2cdf%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.8203125%22%20y%3D%22118.696875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">

        <div class="card-body">
          <strong class="card-text">Product Name</strong>
          <br><br>
          <strong class="card-price">$10.00</strong>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn1 btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn2 btn-sm btn-outline-secondary">Edit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-3">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162f5da2ce2%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162f5da2ce2%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.8203125%22%20y%3D%22118.696875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          <div class="card-body">
            <strong class="card-text">Product Name</strong>
            <br><br>
            <strong class="card-price">$10.00</strong>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn1 btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn2 btn-sm btn-outline-secondary">Edit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-3">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162f5da2ce8%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162f5da2ce8%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.8203125%22%20y%3D%22118.696875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                  <strong class="card-text">Product Name</strong>
                  <br><br>
                  <strong class="card-price">$10.00</strong>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn1 btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn2 btn-sm btn-outline-secondary">Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <br><br>

      <div class="items py-8">
	<div class="container">
		<h2 class="title">Deals of the Day</h2>
		<div class="row">
			<div class="col-sm-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162f5da2cdf%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162f5da2cdf%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.8203125%22%20y%3D%22118.696875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                  <strong class="card-text">Product Name</strong>
                  <br><br>
                  <strong class="card-price">$10.00</strong>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn1 btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn2 btn-sm btn-outline-secondary">Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162f5da2cdf%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162f5da2cdf%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.8203125%22%20y%3D%22118.696875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                  <strong class="card-text">Product Name</strong>
                  <br><br>
                  <strong class="card-price">$10.00</strong>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn1 btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn2 btn-sm btn-outline-secondary">Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162f5da2ce2%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162f5da2ce2%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.8203125%22%20y%3D%22118.696875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                  <strong class="card-text">Product Name</strong>
                  <br><br>
                  <strong class="card-price">$10.00</strong>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn1 btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn2 btn-sm btn-outline-secondary">Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162f5da2ce8%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162f5da2ce8%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.8203125%22%20y%3D%22118.696875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                  <strong class="card-text">Product Name</strong>
                  <br><br>
                  <strong class="card-price">$10.00</strong>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn1 btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn2 btn-sm btn-outline-secondary">Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--	<h1>Terabite</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec felis id enim varius imperdiet et sed mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam ornare imperdiet sem, id tincidunt est blandit vitae. Praesent auctor at ipsum sed congue. Donec rhoncus leo quam, vitae finibus nisl viverra ut. Curabitur varius euismod mi, nec eleifend nunc gravida et. Morbi tincidunt tellus eget ante egestas, eu congue odio scelerisque. Mauris tincidunt at felis vitae euismod. Vestibulum massa libero, dictum ut sapien a, dictum feugiat ante. Donec eu orci aliquam ligula lacinia cursus vitae eget tellus. Sed sit amet rutrum augue. Quisque gravida, ex ac porta efficitur, massa urna blandit risus, tincidunt facilisis nunc tortor at massa. Nunc sit amet mauris neque. Donec ac sem et mi cursus commodo. Nam at enim turpis.</p>


	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec felis id enim varius imperdiet et sed mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam ornare imperdiet sem, id tincidunt est blandit vitae. Praesent auctor at ipsum sed congue. Donec rhoncus leo quam, vitae finibus nisl viverra ut. Curabitur varius euismod mi, nec eleifend nunc gravida et. Morbi tincidunt tellus eget ante egestas, eu congue odio scelerisque. Mauris tincidunt at felis vitae euismod. Vestibulum massa libero, dictum ut sapien a, dictum feugiat ante. Donec eu orci aliquam ligula lacinia cursus vitae eget tellus. Sed sit amet rutrum augue. Quisque gravida, ex ac porta efficitur, massa urna blandit risus, tincidunt facilisis nunc tortor at massa. Nunc sit amet mauris neque. Donec ac sem et mi cursus commodo. Nam at enim turpis.</p>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec felis id enim varius imperdiet et sed mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam ornare imperdiet sem, id tincidunt est blandit vitae. Praesent auctor at ipsum sed congue. Donec rhoncus leo quam, vitae finibus nisl viverra ut. Curabitur varius euismod mi, nec eleifend nunc gravida et. Morbi tincidunt tellus eget ante egestas, eu congue odio scelerisque. Mauris tincidunt at felis vitae euismod. Vestibulum massa libero, dictum ut sapien a, dictum feugiat ante. Donec eu orci aliquam ligula lacinia cursus vitae eget tellus. Sed sit amet rutrum augue. Quisque gravida, ex ac porta efficitur, massa urna blandit risus, tincidunt facilisis nunc tortor at massa. Nunc sit amet mauris neque. Donec ac sem et mi cursus commodo. Nam at enim turpis.</p>  -->


	

@endsection





